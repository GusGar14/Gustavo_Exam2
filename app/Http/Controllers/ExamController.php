<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\exam;

class ExamController extends Controller
{
    public function index(){
        $page_title ="Exam 2"; 

        $Exam = Exam::all(); 


    return view('Exam', compact('page_title', 'Exam')); 
    }

    public function index(){
        $page_title ="Exam 2"; 

        $Exam = Exam::where('PH', '=', '80'); 


    return view('Exam1', compact('page_title', 'Exam')); 
    }
}
