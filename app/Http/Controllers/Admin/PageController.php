<?php

namespace App\Http\Controllers\Admin;

use Cviebrock\EloquentSluggable\Services\SlugService;
use App\Http\Requests\Page\UpdatePageRequest;
use App\Http\Requests\Page\PageRequest;
use App\Repository\Page\PageInterface;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Page;
use Storage;
use File;

class PageController extends Controller
{
    protected $page;

    public function __construct(PageInterface $page)
    {
        $this->page = $page;

         $this->middleware('permission:page-list|page-create|page-edit|page-delete', ['only' => ['index','show']]);
         $this->middleware('permission:page-create', ['only' => ['create','store']]);
         $this->middleware('permission:page-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:page-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $records = $this->page->getAll();        
        return view('admin.page.index', compact('records'));
    }
    
    public function create()
    {
        $categories = Category::where('status', 1)->orderBy('name', 'asc')->get();
        return view('admin.page.create', compact('categories'));
    }

    public function store(PageRequest $request)
    {
        $data = $request->all();
        
        $image = '';
        if($request->hasFile('image'))
        {
            $imageextesion = time().'.'.$request->image->extension();  
     
            $image = Storage::disk('s3')->put('page', $request->image);
            $image = Storage::disk('s3')->url($image);
        }

        $data['image'] = $image;
        $data['slug'] = SlugService::createSlug(Page::class, 'slug', $request->slug);
        $page = $this->page->store($data);
        if($page) {
            \LogActivity::addToLog('Page added successfully.');
            return redirect()->route('pages.index')->with(['success' => 'Page added successfully.']);
        }

        return redirect()->back()->with(['fail' => 'Unable to add page.']);
    }

    public function edit($id)
    {
        $categories = Category::where('status', 1)->orderBy('name', 'asc')->get();
        $edit = $this->page->find($id);
        return view('admin.page.edit', compact('edit', 'categories'));
    }

    public function update(UpdatePageRequest $request, Page $page)
    {
        $data = $request->all();
        $image ='';
        
       
            if($request->hasFile('image'))
            {
                $oldimage = Page::where('id', $page->id)->value('image');
                $arr = explode("/", $oldimage);
                Storage::disk('s3')->delete('page/' . $arr[count($arr) - 1]);

                $imageName = time().'.'.$request->image->extension();  
     
                $image = Storage::disk('s3')->put('page', $request->image);
                $image = Storage::disk('s3')->url($image);
            }
            else
            {
                $imagenull = Page::where('id', $page->id)->value('image');
            }
        
        if($page->slug != $request->slug)
        {
            $checkSlug     = Page::where('slug', $request->slug)->first();
            $checkSlug ? $data['slug'] = SlugService::createSlug(Page::class, 'slug', $request->slug) : $data['slug'] = $request->slug;
        }
        
        $data['image'] = $image ? $image : $imagenull;
        $page = $this->page->update($data, $page->id);

        if($page) {
            \LogActivity::addToLog('Page updated successfully.');
            return redirect()->route('pages.index')->with(['success' => 'Page updated successfully.']);
        }

        return redirect()->back()->with(['fail' => 'Unable to update page.']);
    }

    public function changeStatus(Request $request, $id)
    {
        $this->page->statusChange($id);
        \LogActivity::addToLog('Page Status successfully changed.');
        return redirect()->route('pages.index')->with(['success' => 'Status successfully changed.']);
    }

    public function destroy($id)
    {
        $page = $this->page->delete($id);

        if($page) {
            \LogActivity::addToLog('Page Deleted successfully.');
            return redirect()->route('pages.index')->with(['success' => 'Page Deleted successfully.']);
        }

        return redirect()->back()->with(['fail' => 'Unable to delete page.']);
    }
}
