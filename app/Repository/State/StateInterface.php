<?php

namespace App\Repository\State;

use App\Models\State;

interface StateInterface{
    public function getAll();
    public function store($data);
    public function find($id);
    public function update($data, $id);
    public function delete($id);
}