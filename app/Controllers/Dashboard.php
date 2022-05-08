<?php

namespace App\Controllers;

use App\Models\ShortModel;

class Dashboard extends BaseController
{
    public function index()
    {
        $session = session();
        $Short_db = new ShortModel();
        $query = $Short_db->findAll();

        $data = [
            'title' => 'login',
            'short' => $query
        ];

        echo view('dashboard', $data);
    }
}
