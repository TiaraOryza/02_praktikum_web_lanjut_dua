<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class PageController extends Controller
{
    public function hello(){
        return 'SELAMAT DATANG';
    }

    public function about(){
        return 'NAMA : TIARA ORYZA SATIVA <br> NIM : 2031710014';
    }

    public function id($id){
        return 'Halaman artikel dengan id : '.$id;
    }
}


