<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Home extends BaseController
{
    public function index()
    {
        $data['page'] = 'home';

        $data['content'] = view('index');
        return view('template/index', $data);
    }
}
