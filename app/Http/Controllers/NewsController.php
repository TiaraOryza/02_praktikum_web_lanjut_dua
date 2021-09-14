<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;


    class NewsController extends Controller
    {
    public function news(){
        return '<h3>ini adalah halaman news : <br> <br>
        Daftar Berita :<br> https://www.educastudio.com/news
        <br> //www.educastudio.com/news/educa-studio-berbagi-untuk-warga-sekitar-terdampak-covid-19<br> ';
    }   

}
?>

