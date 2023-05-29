<?php

namespace App\Repository\Subscription;

use App\Models\Subscription;

interface SubscriptionInterface{
    public function getAll();
    public function store($data);
    public function find($id);
    public function update($data, $id);
    public function statusChange($id);
    public function delete($id);
    public function getDetials();
    public function SubscriptionUserStatusChange($id);
}