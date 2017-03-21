<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\SoftDeletes;   
use App\Student;


class StudentFormCont extends Controller
{
 public function RegisterWindow()
 {
    return view('Register');

 }

 public function RegisterProcess(Request $request)
 {
    $first_name = $request-> first_name;
    $last_name = $request-> last_name;
    $middle_initial = $request-> middle_initial;
    $student_id = $request-> student_id;
    $course = $request-> course;
    $address = $request-> address;
    $guardian = $request-> guardian;



    $student = new Student;
        $student->first_name = $first_name;
        $student->last_name = $last_name;
        $student->middle_initial = $middle_initial;
        $student->student_id = $student_id;
        $student->course = $course;
        $student->address = $address;
        $student->guardian = $guardian;
        $student->save();

         $students = Student::all();
        return view('WelcomeStudent',compact('students'));


}

public function SetValue(Request $request,$id)
{
    $students = Student::find($id);
    return view('Update',compact('students'));
}

public function UpdateProcess(Request $request)
{
    $id= $request-> id;
    $first_name = $request-> first_name;
    $last_name = $request-> last_name;
    $middle_initial = $request-> middle_initial;
    $student_id = $request-> student_id;
    $course = $request-> course;
    $address = $request-> address;
    $guardian = $request-> guardian;



    $student = Student::find($id);
        $student_id = $request-> student_id;
        $student->first_name = $first_name;
        $student->last_name = $last_name;
        $student->middle_initial = $middle_initial;
        $student->student_id = $student_id;
        $student->course = $course;
        $student->address = $address;
        $student->guardian = $guardian;
        $student->save();

         $students = Student::all();

        return view('WelcomeStudent',compact('students'));
}
 public function DeleteProcess(Request $request,$id)
 {
     

        $students = Student::find($id);
        $students->delete();

        

         $students = Student::all();
        return view('WelcomeStudent',compact('students'));



 }



}
