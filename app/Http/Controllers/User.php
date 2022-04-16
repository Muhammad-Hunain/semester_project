<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\user as Users;
use Illuminate\Support\Facades\DB;

// use Illuminate\Support\Facades\Hash;


class User extends Controller
{
    public function login(Request $re)
    {
     //   return $re->all();
      $user = Users::where('email',$re->email)->first();
  
        if ($user != '') {
        
        if ($user->password == $re->pass) {
        
            if ($user->status == 1) {
               
            if ($user->role == 'admin') {
                session()->put('user',$user);
                 return redirect('admin');
            }
            if ($user->role == 'moderator') {
                session()->put('user',$user);
                return redirect('moderator');
            }
            if ($user->role == 'student') {
                session()->put('user',$user);
                return redirect('student');
            }
            if ($user->role == 'teacher') {
                session()->put('user',$user);
                return redirect('teacher');
            }
            } 
            else {
                session()->flash('msg','Status Deactivated');
                return redirect('login');
            }
    }else{
        session()->flash('msg','Wrong Password');
        return redirect('login');

    }
} else {
    session()->flash('msg','Wrong Email address');
    return redirect('login');
}


}
function count(){

    // $ethnicityAndCountArray = Users::select(DB::Raw('id, COUNT(*) as count'))->groupBy('id');    
    // $total = 0;
    // foreach($ethnicityAndCountArray as $id)
    // $total =$total +  $id->count;    
    // // return $total;
 
    $student = Users::where('role','student')->count();
    $moderator= Users::where('role','moderator')->count();
    $teacher= Users::where('role','teacher')->count();

    return view ('master',['student'=> $student,'moderator' => $moderator,'teacher' => $teacher]);

    
}
   //return $req->all();
      
    //     if($save){
    //     //    return redirect('login');
    //     //     return view('admin.student.adddata');
    //        return view('admin.student.adddata')->with('success','New user  has been Successfully added to datbase');
    //    }   
    //     else{
    //         // return view('Not data');
    //         return view('admin.student.adddata')->with('fail','Something went wrong , try again later');
    //     }
    }

