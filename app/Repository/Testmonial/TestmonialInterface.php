<?php

namespace App\Repository\Testmonial;

use App\Models\Testimonial;

interface TestmonialInterface{
    public function getAll();
    public function store($data);
    public function find($id);
    public function update($data, $id);
    public function statusChange($id);
    public function delete($id);
}