<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class ProgramController extends Controller
{
    public function program(){
        return '<h3>ini adalah halaman product <br><br> 
        daftar product <br> 
        https://www.educastudio.com/program/karir <br>
        https://www.educastudio.com/program/magang <br>
        https://www.educastudio.com/program/kunjungan-industri
        ';
    }
}
