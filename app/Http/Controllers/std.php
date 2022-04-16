<?php

namespace App\Http\Controllers;

use App\Models\user as Users;
use App\Models\Student;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class std extends Controller
{
    function Student(Request $req)
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
            'roll_no' => 'required',
            'CGPA' => 'required',

        ]);
        //  $student = new Student;
        //  $student->Roll_no = $req->Roll_no;
        //  $student->save();

        // dd($users);
        $users = new Users;
        $student = new Student;

        $users->name = $req->name;
        $users->surname = $req->surname;
        $users->email = $req->email;
        $users->password = $req->password;
        $users->contact = $req->contact;
        $users->address = $req->address;
        $users->department = $req->department;
        $users->cnic = $req->cnic;
        $users->role = 'student';
        //  $users->join('student','stu_id','=','student.id');

        $users->save();

            $student->roll_no = $req->Roll_no;
            $student->CGPA = $req->CGPA;
            $student->stu_id = $users->id;
            $student->save();
        return  redirect('viewdata_student');
    }
    function studentshow()
    {
        $data = Users::all();
        foreach ($data as $key => $value) {
            $data[$key]->roll_no = Student::where('stu_id',$value->id)->first()->roll_no;
            $data[$key]->CGPA = Student::where('stu_id',$value->id)->first()->CGPA; 
        }
    //    return $data;
        return view('admin.student.viewdata', ['Users' => $data]);
    }
    
    // function count(){

    //     $ethnicityAndCountArray = Users::select(DB::Raw('id, COUNT(*) as count'))
    //     ->groupBy('name');
        
    //     $total = 0;
    //     foreach($ethnicityAndCountArray as $name)
    //     $total += $name->count;
        
    //     return $total;
    //     // return view('master', ['total' => $total]);
            
    //         }

    function delete_student($id)
    {
        $data = Users::find($id);
        $data->delete();
        return  redirect('viewdata_student');
    }
    function showdata_student($id)
    {
        $data = Users::find($id);
        return view('admin.edit', ['data' => $data]);
    }

    function update_student(Request $req)
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


        return  redirect('viewdata_student');
    }


    // function show(){
    //     return DB::table('users')

    //     ->select("users.*")
    //     ->get();
    // }
}
