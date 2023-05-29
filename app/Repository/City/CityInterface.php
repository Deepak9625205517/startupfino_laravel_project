<?php

namespace App\Repository\City;

use App\Models\City;

interface CityInterface{
    public function getAll();
    public function store($data);
    public function find($id);
    public function update($data, $id);
    public function delete($id);
}