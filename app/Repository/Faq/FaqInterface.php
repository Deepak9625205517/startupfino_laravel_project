<?php
namespace App\Repository\Faq;

use App\Models\FAQ;

interface FaqInterface{
    public function getAll();
    public function store($data);
    public function find($id);
    public function update($data, $id);
    public function statusChange($id);
    public function delete($id);
}