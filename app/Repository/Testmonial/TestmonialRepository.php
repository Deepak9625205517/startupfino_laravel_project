<?php

namespace App\Repository\Testmonial;
use App\Models\Testimonial;
use function is;
use function is_null;

class TestmonialRepository implements TestmonialInterface{

    public function getAll()
    {
        return Testimonial::orderBy('id', 'desc')->get();
    }

    public function store($data)
    {
        $store = Testimonial::create($data);
        
        return $store;
    }

    public function find($id)
    {
        $edit = Testimonial::find($id);
        
        return $edit;
    }

    public function update($data, $id)
    {
        $update = Testimonial::where('id', $id)->first();
        $update = $update->update($data);
        return $update;
    }

    public function statusChange($id)
    {
        $page    = Testimonial::where('id', $id)->first();
        if($page->status == '1'){
            $status = '0';
        }else{
            $status = '1';
        }
        $value     = array('status' => $status);
        $change    = Testimonial::where('id', $id)->update($value);
        return $change;
    }

    public function delete($id)
    {
        $delete = Testimonial::find($id);
        $delete = $delete->delete();
        return $delete;
    }
}