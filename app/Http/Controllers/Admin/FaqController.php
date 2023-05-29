<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Faq\FaqRequest;
use App\Repository\Faq\FaqInterface;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FAQ;

class FaqController extends Controller
{
    protected $companylogo;

    public function __construct(FaqInterface $faq)
    {
         $this->faq = $faq;

        //  $this->middleware('permission:faq-list|faq-create|faq-edit|faq-delete', ['only' => ['index','show']]);
        //  $this->middleware('permission:faq-create', ['only' => ['create','store']]);
        //  $this->middleware('permission:faq-edit', ['only' => ['edit','update']]);
        //  $this->middleware('permission:faq-delete', ['only' => ['destroy']]);

    }

    public function index()
    {
        $records = $this->faq->getAll();        
        return view('admin.faq.index', compact('records'));
    }
   

    public function create()
    {
        return view('admin.faq.create');
    }

    public function store(faqRequest $request)
    {
        $data = $request->all();

        $faq = $this->faq->store($data);

        if($faq) {

            \LogActivity::addToLog('Faq added successfully.');

            return redirect()->route('faq.index')->with(['success' => 'Faq added successfully.']);
        }

        return redirect()->back()->with(['fail' => 'Unable to add Faq.']);

    }

    public function edit($id)
    {
        $edit = $this->faq->find($id);
        return view('admin.faq.edit', compact('edit'));
    }

    public function update(FaqRequest $request, $id)
    {
        
        $data = $request->all();      
        $faq  = $this->faq->update($data, $id);

        if($faq) {

            \LogActivity::addToLog('Faq updated successfully.');

            return redirect()->route('faq.index')->with(['success' => 'Faq updated successfully.']);

        }

        return redirect()->back()->with(['fail' => 'Unable to update Faq.']);

    }



    public function changeStatus(Request $request, $id)
    {

        $this->faq->statusChange($id);

        \LogActivity::addToLog('Faq Status successfully changed.');

        return redirect()->route('faq.index')->with(['success' => 'Status successfully changed.']);

    }

    public function destroy($id)
    {

        $faq = $this->faq->delete($id);

        if($faq) {

            \LogActivity::addToLog('Faq Deleted successfully.');

            return redirect()->route('faq.index')->with(['success' => 'Faq Deleted successfully.']);

        }

        return redirect()->back()->with(['fail' => 'Unable to delete Faq.']);

    }

}
