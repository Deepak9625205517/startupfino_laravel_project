<?php 
namespace App\Services;
use App\Models\LoginHistory;

Class LoginHistoryService{

    public function getAllLoginHistory()
    {
        return LoginHistory::orderBy('id', 'desc')->get();
    }
}