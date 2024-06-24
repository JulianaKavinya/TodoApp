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


public function student($adm){
    $students = [
        '123' => 'Dennis',
        '567' => 'Stacy',
        '456' => 'Lawrence',
        '679' => 'Jackline',
        '789' => 'Juliana'
    ];
    if(array_key_exists($adm, $students))
    return $students[$adm];
    else
        return 'student:'. $adm. 'not found';
}

public function grade($marks){
    $students = [
        '43' => 'Dennis',
        '50' => 'Stacy',
        '30' => 'Lawrence',
        '44' => 'Jackline',
        '30' => 'Juliana'
    ];

  #calculateGrade ($marks);

      if ($marks >= 46 && $marks <= 50) {
          return 'A+';
      } elseif ($marks >= 41 && $marks <= 45) {
          return 'A';
      } elseif ($marks >= 36 && $marks <= 40) {
          return 'B+';
      } elseif ($marks >= 31 && $marks <= 35) {
          return 'B';
      } elseif ($marks >= 26 && $marks <= 30) {
          return 'C+';
      } elseif ($marks >= 21 && $marks <= 25) {
          return 'C';
      } elseif ($marks >= 16 && $marks <= 20) {
          return 'D+';
      } elseif ($marks >= 11 && $marks <= 15) {
          return 'D';
      } elseif ($marks >= 6 && $marks <= 10) {
          return 'E';
      } else {
          return 'F';
      }
      if(array_key_exists($marks, $students))
      return $students[$marks];

}
}
