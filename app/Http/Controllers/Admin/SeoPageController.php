<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Seo\SeoRequest;
use App\Repository\Seo\SeoInterface;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\Seo;


class SeoPageController extends Controller
{
    protected $seo;

    public function __construct(SeoInterface $seo)
    {
        $this->seo = $seo;

         $this->middleware('permission:seo-page-list|seo-page-create|seo-page-edit|seo-page-delete', ['only' => ['index','show']]);
         $this->middleware('permission:seo-page-create', ['only' => ['create','store']]);
         $this->middleware('permission:seo-page-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:seo-page-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $records = $this->seo->getAll(); 
        return view('admin.seo.index', compact('records'));
    }
    
    public function create()
    {
        $pages = Page::where('status', 1)->get();
        
        return view('admin.seo.create', compact('pages'));
    }

    public function store(SeoRequest $request)
    {
        $data = $request->all();
       
        $seo = $this->seo->store($data);
        if($seo) {
            \LogActivity::addToLog('Seo Page added successfully.');
            return redirect()->route('seo-pages.index')->with(['success' => 'Seo Page added successfully.']);
        }

        return redirect()->back()->with(['fail' => 'Unable to add seo page.']);
    }

    public function edit($id)
    {
        $pages = Page::where('status', 1)->get();
        $edit = $this->seo->find($id);
        
        return view('admin.seo.edit', compact('edit', 'pages'));
    }

    public function update(SeoRequest $request, $id)
    {
        $data = $request->all();
        
        $seo = $this->seo->update($data, $id);

        if($seo) {
            \LogActivity::addToLog('Seo Page updated successfully.');
            return redirect()->route('seo-pages.index')->with(['success' => 'Seo Page updated successfully.']);
        }

        return redirect()->back()->with(['fail' => 'Unable to update seo page.']);
    }

    public function destroy($id)
    {
        $seo = $this->seo->delete($id);

        if($seo) {
            \LogActivity::addToLog('Seo Page Deleted successfully.');
            return redirect()->route('seo-pages.index')->with(['success' => 'Seo Page Deleted successfully.']);
        }

        return redirect()->back()->with(['fail' => 'Unable to delete seo page.']);
    }
}
