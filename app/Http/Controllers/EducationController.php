<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EducationController extends Controller
{
    function myEducation(){
        // echo "Welcome to education page";
        return view('education-page');
    }
}
