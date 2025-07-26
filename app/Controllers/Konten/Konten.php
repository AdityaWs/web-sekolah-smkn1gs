<?php

namespace App\Controllers\Konten;

use App\Controllers\BaseController;

class Konten extends BaseController
{
    
    public function about(): string
    {
        return view("konten/about.php");
    }

    public function visi_misi(): string
    {
        return view("konten/visi_misi.php");
    }

}
