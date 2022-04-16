<?php

namespace App\Http\Controllers;
use App\Models\Student;

use Illuminate\Http\Request;

use App\Models\user as Users;
class mod_stu extends Controller
{
    function Student_mod(Request $req){
    $req->validate([
        'name'=>'required',
        'surname'=>'required',
        'email'=>'required|email|unique:users',
        'password'=>'required|min:5|max:12',
        'contact'=>'required',
        'address'=>'required',
        'department'=>'required',
        'cnic'=>'required|max:13',
        'Roll_no' => 'required',
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
    $users->save();
  
    $student->roll_no = $req->Roll_no;
    $student->CGPA = $req->CGPA;
    $student->stu_id = $users->id;
    
    $student->save();

    return  redirect('viewdata_student');
   
   }
       function studentshow_mod(){

           
           $data = Users::all();
            foreach ($data as $key => $value) {
                $data[$key]->roll_no = Student::where('stu_id',$value->id)->first();
                $data[$key]->CGPA = Student::where('stu_id',$value->id)->first();
            //    return $data; 
        }
           return view('moderator.student.viewdata', ['Users' => $data]);    
       }

       function delete_student_mod($id){
           $data = Users::find($id);
           $data->delete();
           return  redirect('viewdata_student');
       }
       function showdata_student_mod($id){
       $data=Users::find($id);
       return view('admin.edit',['data'=>$data]);
       }

       function update_student_mod(Request $req){
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
   function count_mod(){

    // $ethnicityAndCountArray = Users::select(DB::Raw('id, COUNT(*) as count'))->groupBy('id');    
    // $total = 0;
    // foreach($ethnicityAndCountArray as $id)
    // $total =$total +  $id->count;    
    // // return $total;
 
    $student = Users::where('role','student')->count();
    // return $student;
   
    return view ('moderator.moderatoradminpanel',['student'=> $student]);

    
}


}
