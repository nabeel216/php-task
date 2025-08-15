<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    function add(Request $request){
        $student=new student();
        $student->name=$request->name;
        $student->email=$request->email;
        $student->phone=$request->phone;-
        $student->save();
        if($student){
            echo"new student added";
        }else {
            echo"no added";
        } 

    }
    //for read data from data base 
    function list(){
        $studentData=Student::all();
        return view ('list-student',['students'=>$studentData]); 
    }
//for delete data//
    function delete($id){
        $isDeleted=Student::destroy($id);
        if($isDeleted)
        return  redirect ('list');
    }

     function edit($id){  
        $student= Student::find($id);  
        return view('edit',["data"=>$student]);  
    }  
        function editStudent(Request $request, $id){ 
            $student=Student ::find($id); 
            $student->name = $request->name;
            $student->email = $request->email;
            $student->phone = $request->phone;
        
            if ($student->save()) {
                return redirect('list');
            } else {
                return "Update operation failed";
            }
        }
}

