<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Detail extends BaseController
{
    public function index()
    {
        $data['page'] = 'shop';

        $data['content'] = view('product-detail');
        return view('template/index', $data);
    }
}
