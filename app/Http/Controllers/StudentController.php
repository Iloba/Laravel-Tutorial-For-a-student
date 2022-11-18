<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
    //Save Student Date
    public function saveStudent(Request $request){
    
    //Validate Request
    $request->validate([
        'name' => 'required',
        'email' => 'required',
        'phone' => 'required',
        'jamb_score' => 'required',
        'password' => 'required'
    ]);

    

    
    $student = new Student;
    $student->name = $request->name;
    $student->email = $request->email;
    $student->phone = $request->phone;
    $student->jamb_score = $request->jamb_score;
    $student->password = Hash::make($request->password);
    $student->save();

  

  



    }

  
   
}
