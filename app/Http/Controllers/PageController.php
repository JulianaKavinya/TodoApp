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
    public function blog(){
        return 'this is the blog page';
    }

    public function services(){
        return 'this is the services page';
    }

    public function products(){
        return 'this is the products page';
    }

    public function gallery(){
        return 'this is the gallery page';
    }
}
