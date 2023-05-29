<?php

namespace App\Repository\State;
use App\Models\State;
use function is;
use function is_null;
use Auth;

class StateRepository implements StateInterface{

    public function getAll()
    {
        return State::orderBy('name', 'asc')->get();
    }

    public function store($data)
    {
        $store = State::create($data);
        
        return $store;
    }

    public function find($id)
    {
        $edit = State::find($id);
        
        return $edit;
    }

    public function update($data, $id)
    {
        $update = State::where('id', $id)->first();
        $update = $update->update($data);
        return $update;
    }

    public function delete($id)
    {
        $delete = State::find($id);
        $delete = $delete->delete();
        return $delete;
    }

}