<?php

namespace App\Http\Controllers\Admin;

use App\Repository\City\CityInterface;
use App\Http\Controllers\Controller;
use App\Services\StateService;
use Illuminate\Http\Request;

class CityController extends Controller
{
    protected $cityservice;
    protected $stateservice;
    public function __construct(CityInterface $cityservice, StateService $stateservice)
    {
       $this->cityservice = $cityservice;
       $this->stateservice = $stateservice;

        $this->middleware('permission:city-list|city-create|city-edit|city-delete|city-show', ['only' => ['index']]);
        $this->middleware('permission:city-create', ['only' => ['create','store']]);
        $this->middleware('permission:city-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:city-delete', ['only' => ['destroy']]);
    }

    public function index(){
        $records = $this->cityservice->getAll();
        return view('admin.city.index', compact('records'));
    }

    public function create()
    {
        $states = $this->stateservice->getAll();
        return view('admin.city.create', compact('states'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $this->validate($request, [
                    'name' => 'required',
                    'state_id' => 'required',
        ]);

        $city = $this->cityservice->store($data);

        if($city) {
            \LogActivity::addToLog('City added successfully.');
            return redirect()->route('cities.index')->with(['success' => 'City added successfully.']);
        }

        return redirect()->back()->with(['fail' => 'Unable to add City.']);
    }

    public function edit($id)
    {
        $states = $this->stateservice->getAll();
        $edit = $this->cityservice->find($id);
        return view('admin.city.edit', compact('edit', 'states'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
    
        $this->validate($request, [
                    'name' => 'required',
                    'state_id' => 'required',
        ]);
        $city = $this->cityservice->update($data, $id);
        
        if($city) {
            \LogActivity::addToLog('City updated successfully.');
            return redirect()->route('cities.index')->with(['success' => 'City updated successfully.']);
        }

        return redirect()->back()->with(['fail' => 'Unable to update City.']);
    }

    public function destroy($id)
    {
        $city = $this->cityservice->delete($id);
        if($city) {
            \LogActivity::addToLog('City Deleted successfully.');
            return redirect()->route('cities.index')->with(['success' => 'City Deleted successfully.']);
        }

        return redirect()->back()->with(['fail' => 'Unable to delete City.']);
    }
}
