<?php

namespace App\Controllers\Beranda;

use App\Controllers\BaseController;

class Main extends BaseController
{
    public function index(): string
    {
        return view('beranda/index.php');
    }
}
