<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return '<br><br><br><h1><center>SELAMAT DATANG <br><br><h1>INI ADALAH HALAMAN HOME';
        
    }   
}
