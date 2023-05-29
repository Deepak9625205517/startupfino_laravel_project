<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Testmonial\CreateTestmonialRequest;
use App\Http\Requests\Testmonial\UpdateTestmonialRequest;
use App\Repository\Testmonial\TestmonialInterface;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimonial;
use Storage;
use File;

class TestmonialController extends Controller
{
    protected $testmonial;

    public function __construct(TestmonialInterface $testmonial)
    {
         $this->testmonial = $testmonial;

         $this->middleware('permission:testmonial-list|testmonial-create|testmonial-edit|testmonial-delete', ['only' => ['index','show']]);
         $this->middleware('permission:testmonial-create', ['only' => ['create','store']]);
         $this->middleware('permission:testmonial-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:testmonial-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $records = $this->testmonial->getAll();        
        return view('admin.testmonial.index', compact('records'));
    }
    
    public function create()
    {
        return view('admin.testmonial.create');
    }

    public function store(CreateTestmonialRequest $request)
    {
        $data = $request->all();
        
        $image = '';
        
        if($request->hasFile('image'))
        {
            $imageextesion = time().'.'.$request->image->extension();  
     
            $image = Storage::disk('s3')->put('testmonial', $request->image);
            $image = Storage::disk('s3')->url($image);
        }

        $data['name']        = $request->name;
        $data['designation'] = $request->designation;
        $data['description'] = $request->description;
        $data['image']       = $image;
        $testmonial = $this->testmonial->store($data);
        if($testmonial) {
            \LogActivity::addToLog('Testmonial added successfully.');
            return redirect()->route('testmonials.index')->with(['success' => 'Testmonial added successfully.']);
        }

        return redirect()->back()->with(['fail' => 'Unable to add Testmonial.']);
    }

    public function edit($id)
    {
        $edit = $this->testmonial->find($id);
        return view('admin.testmonial.edit', compact('edit'));
    }

    public function update(UpdateTestmonialRequest $request, Testimonial $Testmonial)
    {
        $data = $request->all();
       
        $image ='';
        
            if($request->hasFile('image'))
            {
                $oldimage = Testimonial::where('id', $Testmonial->id)->value('image');
                $arr = explode("/", $oldimage);
                Storage::disk('s3')->delete('testmonial/' . $arr[count($arr) - 1]);

                $imageName = time().'.'.$request->image->extension();  
     
                $image = Storage::disk('s3')->put('testmonial', $request->image);
                $image = Storage::disk('s3')->url($image);
            }
            else
            {
                $imagenull = Testimonial::where('id', $Testmonial->id)->value('image');
            }
        
        $data['name']        = $request->name;
        $data['designation'] = $request->designation;
        $data['description'] = $request->description;
        $data['image']       = $image ? $image : $imagenull;
        $Testmonial = $this->testmonial->update($data, $Testmonial->id);

        if($Testmonial) {
            \LogActivity::addToLog('Testmonial updated successfully.');
            return redirect()->route('testmonials.index')->with(['success' => 'Testmonial updated successfully.']);
        }

        return redirect()->back()->with(['fail' => 'Unable to update Testmonial.']);
    }

    public function changeStatus(Request $request, $id)
    {
        $this->testmonial->statusChange($id);
        \LogActivity::addToLog('Testmonial Status successfully changed.');
        return redirect()->route('testmonials.index')->with(['success' => 'Status successfully changed.']);
    }

    public function destroy($id)
    {
        $testmonial = $this->testmonial->delete($id);

        if($testmonial) {
            \LogActivity::addToLog('Testmonial Deleted successfully.');
            return redirect()->route('testmonials.index')->with(['success' => 'Testmonial Deleted successfully.']);
        }

        return redirect()->back()->with(['fail' => 'Unable to delete Testmonial.']);
    }
}
