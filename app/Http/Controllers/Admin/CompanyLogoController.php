<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CompanyLogo\CreateCompanyLogoRequest;
use App\Http\Requests\CompanyLogo\UpdateCompanyLogoRequest;
use App\Repository\CompanyLogo\CompanyLogoInterface;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CompanyLogo;
use Storage;
use File;

class CompanyLogoController extends Controller
{
    protected $companylogo;

    public function __construct(CompanyLogoInterface $companylogo)
    {
         $this->companylogo = $companylogo;

         $this->middleware('permission:company-logo-list|company-logo-create|company-logo-edit|company-logo-delete', ['only' => ['index','show']]);
         $this->middleware('permission:company-logo-create', ['only' => ['create','store']]);
         $this->middleware('permission:company-logo-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:company-logo-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $records = $this->companylogo->getAll();        
        return view('admin.company_logo.index', compact('records'));
    }
    
    public function create()
    {
        return view('admin.company_logo.create');
    }

    public function store(CreateCompanyLogoRequest $request)
    {
        $data = $request->all();
        
        $image = '';
        if($request->hasFile('image'))
        {
            $imageName = time().'.'.$request->image->extension();  
     
            $image = Storage::disk('s3')->put('company_logo', $request->image);
            $image = Storage::disk('s3')->url($image);
        }

        $data['company_name'] = $request->company_name;
        $data['image'] = $image;
        $companylogo = $this->companylogo->store($data);
        if($companylogo) {
            \LogActivity::addToLog('Company Logo added successfully.');
            return redirect()->route('company-logos.index')->with(['success' => 'Company Logo added successfully.']);
        }

        return redirect()->back()->with(['fail' => 'Unable to add Company Logo.']);
    }

    public function edit($id)
    {
        $edit = $this->companylogo->find($id);
        return view('admin.company_logo.edit', compact('edit'));
    }

    public function update(UpdateCompanyLogoRequest $request, CompanyLogo $CompanyLogo)
    {
        $data = $request->all();
       
        $image ='';
        
            if($request->hasFile('image'))
            {
                $oldimage = CompanyLogo::where('id', $CompanyLogo->id)->value('image');
                $arr = explode("/", $oldimage);
                Storage::disk('s3')->delete('company_logo/' . $arr[count($arr) - 1]);

                $imageName = time().'.'.$request->image->extension();  
     
                $image = Storage::disk('s3')->put('company_logo', $request->image);
                $image = Storage::disk('s3')->url($image);
            }
            else
            {
                $imagenull = CompanyLogo::where('id', $CompanyLogo->id)->value('image');
            }
        
        $data['company_name'] = $request->company_name;
        $data['image'] = $image ? $image : $imagenull;
        $CompanyLogo = $this->companylogo->update($data, $CompanyLogo->id);

        if($CompanyLogo) {
            \LogActivity::addToLog('Company Logo updated successfully.');
            return redirect()->route('company-logos.index')->with(['success' => 'Company Logo updated successfully.']);
        }

        return redirect()->back()->with(['fail' => 'Unable to update Company Logo.']);
    }

    public function changeStatus(Request $request, $id)
    {
        $this->companylogo->statusChange($id);
        \LogActivity::addToLog('Company Logo Status successfully changed.');
        return redirect()->route('company-logos.index')->with(['success' => 'Status successfully changed.']);
    }

    public function destroy($id)
    {
        $companylogo = $this->companylogo->delete($id);

        if($companylogo) {
            \LogActivity::addToLog('Company Logo Deleted successfully.');
            return redirect()->route('company-logos.index')->with(['success' => 'Company Logo Deleted successfully.']);
        }

        return redirect()->back()->with(['fail' => 'Unable to delete Company Logo.']);
    }
}
