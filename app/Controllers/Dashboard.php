<?php

namespace App\Controllers;

use App\Models\ShortModel;

class Dashboard extends BaseController
{
    public function index()
    {
        $user_id = session()->get('user_id');
        $Short_db = new ShortModel();
        if ($user_id != 0) $query = $Short_db->where('user_id', $user_id);
        $query = $Short_db->orderBy('created_at', 'ASC')->findAll();

        $data = [
            'title' => 'dashboard',
            'short' => $query
        ];

        echo view('dashboard', $data);
    }
}
