<?php

namespace App\Repository\CompanyLogo;
use App\Models\CompanyLogo;
use function is;
use function is_null;

class CompanyLogoRepository implements CompanyLogoInterface{

    public function getAll()
    {
        return CompanyLogo::orderBy('id', 'desc')->get();
    }

    public function store($data)
    {
        $store = CompanyLogo::create($data);
        
        return $store;
    }

    public function find($id)
    {
        $edit = CompanyLogo::find($id);
        
        return $edit;
    }

    public function update($data, $id)
    {
        $update = CompanyLogo::find($id);
        // dd($data);
        $update = $update->update($data);
        return $update;
    }

    public function statusChange($id)
    {
        $page    = CompanyLogo::where('id', $id)->first();
        if($page->status == '1'){
            $status = '0';
        }else{
            $status = '1';
        }
        $value     = array('status' => $status);
        $change    = CompanyLogo::where('id', $id)->update($value);
        return $change;
    }

    public function delete($id)
    {
        $delete = CompanyLogo::find($id);
        $delete = $delete->delete();
        return $delete;
    }
}