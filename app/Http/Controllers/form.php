<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Controller\form as forms;

class form extends Controller
{
    function forms(Request $req)
    {
        //return $req->all();
        $req->validate([
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|max:12',
            'contact' => 'required',
            'address' => 'required',
            'department' => 'required',
            'cnic' => 'required|max:13',
            'Roll_no' => 'required',
            'CGPA' => 'required',

        ]);
        //  $student = new Student;
        //  $student->Roll_no = $req->Roll_no;
        //  $student->save();

        // dd($users);
        $forms = new forms;
    

        $users->name = $req->name;
        

      
        return  redirect('viewdata_student');
    }
    function formshow()
    {
        $data = Users::all();
        foreach ($data as $key => $value) {
            $data[$key]->roll_no = Student::where('stu_id',$value->id)->first()->roll_no;
            $data[$key]->CGPA = Student::where('stu_id',$value->id)->first()->CGPA; 
        }
    //    return $data;x`x
        return view('admin.student.viewdata', ['Users' => $data]);
    }
    
    /

    function delete_forms($id)
    {
        $data = Users::find($id);
        $data->delete();
        // return  redirect('viewdata_student');
    }
    function showdata_forms($id)
    {
        $data = forms::find($id);
        return view('admin.edit', ['data' => $data]);
    }

    function update_forms(Request $req)
    {
        $data = Users::find($req->id);
        $data->name = $req->name;
        $data->surname = $req->surname;
        $data->email = $req->email;
        $data->password = $req->password;
        $data->contact = $req->contact;
        $data->address = $req->address;
        $data->department = $req->department;
        $data->cnic = $req->cnic;
        $data->save();


        // return  redirect('viewdata_student');
    }
}
