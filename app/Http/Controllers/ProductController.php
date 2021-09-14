<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class ProductController extends Controller
{
    public function product(){
        return '<h3>ini adalah halaman product <br><br> 
        daftar product <br>
        https://www.educastudio.com/category/marbel-edu-games<br>
        https://www.educastudio.com/category/marbel-and-friends-kids-games<br>
        https://www.educastudio.com/category/riri-story-books<br>
        https://www.educastudio.com/category/kolak-kids-songs<br>
         ';
    }
}
