<?php

namespace App\Http\Controllers;
use App\Models\user as Users;
use App\Models\employee;

use Illuminate\Http\Request;

class moderator extends Controller
{

    function moderator(Request $req){

        //return $req->all();
             $req->validate([
                 'name'=>'required',
                 'surname'=>'required',
                 'email'=>'required|email|unique:users',
                 'password'=>'required|min:5|max:12',
                 'contact'=>'required',
                 'address'=>'required',
                 'department'=>'required',
                 'cnic'=>'required|unique:users|max:13',
                 'emp_no'=>'required'
             ]);        
             $users = new Users;
            $employee = new employee;
            
             $users->name = $req->name;
             $users->surname = $req->surname;
             $users->email = $req->email;
             $users->password = $req->password;
             $users->contact = $req->contact;
             $users->address = $req->address;
             $users->department = $req->department;
             $users->cnic = $req->cnic;
             $users->role = 'moderator';
             $save = $users->save();
         
             $employee->emp_no = $req->emp_no;
             $employee->emp_id = $users->id;
             $employee->save();
             return redirect('viewdata_moderator');
     
            }
            function count_mod(){
                $student = Users::where('role','student')->count();
                return view ('moderator',['student' => $student]);
            }
            function moderatorshow(){
                $data= Users::all();
                    foreach ($data as $key => $value) {
                        $data[$key]->emp_no = employee::where('emp_id',$value->id)->first();
                    }
                // return $data;
                return view('admin.moderator.viewdata',['Users'=>$data]);    
            }
            function delete_moderator($id){
                    $data = Users::find($id);
                $data->delete();
                return  redirect('viewdata_moderator');
            }
            function showdata_moderator($id){
            $data=Users::find($id);
            return view('admin.edit',['data'=>$data]);
            }
            function update_moderator(Request $req){
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
            return redirect('viewdata_moderator');
            }

            function Student_data(){
                
            }





}
