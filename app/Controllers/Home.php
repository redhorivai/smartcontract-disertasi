<?php

namespace App\Controllers;

class Home extends BaseController
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
