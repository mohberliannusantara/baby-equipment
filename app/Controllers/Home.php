<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Home extends BaseController
{
    public function index()
    {
        $data['content'] = view('index');
        return view('template/index', $data);
    }
}