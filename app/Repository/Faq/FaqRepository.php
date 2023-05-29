<?php

namespace App\Repository\Faq;
use App\Models\FAQ;
use function is;
use function is_null;

class FaqRepository implements FaqInterface{

    public function getAll()
    {
        return FAQ::where('status', 1)->orderBy('id', 'desc')->get();
    }

    public function store($data)
    {
        $store = FAQ::create($data);
        
        return $store;
    }

    public function find($id)
    {
        $edit = FAQ::find($id);
        
        return $edit;
    }

    public function update($data, $id)
    {
        $update = FAQ::find($id);
        $update = $update->update($data);
        return $update;
    }

    public function statusChange($id)
    {
        $FAQ    = FAQ::where('id', $id)->first();
        if($FAQ->status == '1'){
            $status = '0';
        }else{
            $status = '1';
        }
        $value     = array('status' => $status);
        $change    = FAQ::where('id', $id)->update($value);
        return $change;
    }

    public function delete($id)
    {
        $delete = FAQ::find($id);
        $delete = $delete->delete();
        return $delete;
    }
}