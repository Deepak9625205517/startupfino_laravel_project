<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repository\State\StateInterface;
use Illuminate\Http\Request;
use App\Services\StateService;

class StateController extends Controller
{
    protected $stateservice;
    public function __construct(StateInterface $stateservice)
    {
       $this->stateservice = $stateservice;

        $this->middleware('permission:state-list|state-create|state-edit|state-delete|state-show', ['only' => ['index']]);
        $this->middleware('permission:state-create', ['only' => ['create','store']]);
        $this->middleware('permission:state-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:state-delete', ['only' => ['destroy']]);
    }

    public function index(){
        $records = $this->stateservice->getAll();
        return view('admin.state.index', compact('records'));
    }

    public function create()
    {
        return view('admin.state.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $this->validate($request, [
                    'name' => 'required',
        ]);

        $state = $this->stateservice->store($data);

        if($state) {
            \LogActivity::addToLog('State added successfully.');
            return redirect()->route('states.index')->with(['success' => 'State added successfully.']);
        }

        return redirect()->back()->with(['fail' => 'Unable to add State.']);
    }

    public function edit($id)
    {
        $edit = $this->stateservice->find($id);
        return view('admin.state.edit', compact('edit'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
    
        $this->validate($request, [
                    'name' => 'required',
        ]);
        $State = $this->stateservice->update($data, $id);
        

        if($State) {
            \LogActivity::addToLog('State updated successfully.');
            return redirect()->route('states.index')->with(['success' => 'State updated successfully.']);
        }

        return redirect()->back()->with(['fail' => 'Unable to update State.']);
    }

    public function destroy($id)
    {
        $state = $this->stateservice->delete($id);
        if($state) {
            \LogActivity::addToLog('State Deleted successfully.');
            return redirect()->route('states.index')->with(['success' => 'State Deleted successfully.']);
        }

        return redirect()->back()->with(['fail' => 'Unable to delete State.']);
    }
}
