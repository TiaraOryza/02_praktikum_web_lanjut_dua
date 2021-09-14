<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class ContactUsController extends Controller
{
    public function contact(){
        return 'NO HP : 085784094504 <br>
                email : tiaraoryza111@gmail.com';
    }
}
