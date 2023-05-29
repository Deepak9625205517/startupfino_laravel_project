<?php

namespace App\Repository\City;
use App\Models\City;
use function is;
use function is_null;
use Auth;

class CityRepository implements CityInterface{

    public function getAll()
    {
        return City::orderBy('id', 'desc')->get();
    }

    public function store($data)
    {
        $store = City::create($data);
        
        return $store;
    }

    public function find($id)
    {
        $edit = City::find($id);
        
        return $edit;
    }

    public function update($data, $id)
    {
        $update = City::where('id', $id)->first();
        $update = $update->update($data);
        return $update;
    }

    public function delete($id)
    {
        $delete = City::find($id);
        $delete = $delete->delete();
        return $delete;
    }

}