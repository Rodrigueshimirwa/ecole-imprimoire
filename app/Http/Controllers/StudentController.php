<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Session;
use App\Models\StudentModel;
use App\Models\studentrecordModel;

class StudentController extends Controller
{
    //

    public function register(Request $request)
    {
        //Validate information

        $request->validate(
            [
                'sname'=>'required',
                'username'=>'required|unique:studentdata',
                'password'=>'required|min:5|max:10'
            ]
        );

        //Defining table table to receive data from form

        $insert = new StudentModel(); //we define table to accepts data

        $insert->studentfullname = $request->sname;
        $insert->username = $request->username;
        $insert->password = $request->password;
        $results = $insert->save();

        if($results)//true
        {
            return redirect('/')->with('success',"Successfully Student Created😍");
        } else{ //false
            return redirect('/')->with('fail',"Fail to Create student😪");
        }

    }

    public function studentlogin(Request $request)
    {
         //Validate information

         $request->validate(
            [
                'username'=>'required',
                'password'=>'required|min:5|max:10'
            ]
        );
    
      //Checking if username is found for first
      
      $select = StudentModel::where('username','=',$request->username)->first();

      if($select)
      {
        if($request->password==$select->password)
        {
            //Set Session
            session()->put('l4sod',$select->id);
            //Successfull
            return redirect('dashboard');
        }else{
            return redirect('login')->with('fail',"Incorrect username or password!😁");
        }

      }else{
        return redirect('login')->with('fail',"Username not found!😆");
      }

    }


public function recordstudent(Request $request)
{
    $records = new studentrecordModel();

    $records->studentfullnames = $request->sname;
    $records->subject1 = $request->course1;
    $records->marksforsubject1 = $request->cmarks1;
    $records->subject2 = $request->course2;
    $records->marksforsubject2 = $request->cmarks2;
    $records->subject3 = $request->course3;
    $records->marksforsubject3 = $request->cmarks3;
    $records->Class = "L4 SOD";
    $records->Total = ($request->cmarks1+$request->cmarks2+$request->cmarks3)*100/300;

    if($records->Total>=70)
    {
        $records->Decision = "C";
    }else{
        
        $records->Decision = "NYC";
    }

    $savedata = $records->save();
    return redirect('viewstudentrecords');
}

public function delete($id)
{
    $delete = studentrecordModel::findOrFail($id);
    $delete->delete();
    return redirect('viewstudentrecords');
}


public function logout()
{
    Session::flush();
    return redirect('login');
}































































}

