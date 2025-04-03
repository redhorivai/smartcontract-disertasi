<?php

namespace App\Controllers\Backend;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {
        $data = [
            'title'  => 'Dashboard',
            'active' => 'dashboard'
        ];
        return view('dashboard', $data);
    }
}
