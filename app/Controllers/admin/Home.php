<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Contact extends BaseController
{
    public function index()
    {
        $data['page'] = 'contact';

        $data['content'] = view('contact');
        return view('template/index', $data);
    }
}
