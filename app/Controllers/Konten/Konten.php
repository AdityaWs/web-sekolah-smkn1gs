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

    public function sejarah(): string
    {
        return view("konten/sejarah.php");
    }

    // Jurusan
    public function tkro(): string
    {
        return view("jurusan/TKRO.php");
    }

    public function tjkt(): string
    {
        return view("jurusan/tjkt.php");
    }

    public function pemesinan(): string
    {
        return view("jurusan/pemesinan.php");
    }

    public function elektronika(): string
    {
        return view("jurusan/elektronika.php");
    }

    public function broadcast(): string
    {
        return view("jurusan/broadcast.php");
    }
}
