<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Shop extends BaseController
{
    public function index()
    {
        $data['page'] = 'shop';

        $data['content'] = view('shop');
        return view('template/index', $data);
    }
}
