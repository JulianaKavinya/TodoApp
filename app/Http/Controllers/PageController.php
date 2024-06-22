<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        return 'this is the home page';
    }

    public function about(){
        return 'this is the about page';
    }

    public function contact(){
        return 'this is the contact page';
    }
}
