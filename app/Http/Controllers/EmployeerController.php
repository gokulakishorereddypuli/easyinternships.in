<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeerController extends Controller
{
    //
    function InsertEmployeeDetails(Request $req)
    {
        $req->validate([
            'CompanyName'=>'required',
            'Email'=>'required',
            'Phone'=>'required',
            'Address'=>'required',
            'Category'=>'required',
            'AboutUs'=>'required',
            'fb'=>'required',
            'twitter'=>'required',
            'google'=>'required',

        ]);
    }

    function changepassword(Request $request)
    {
            if($request->isMethod('GET'))
            {
                 
                return view('employer.password.changepassword');
            }
            // $x=strcmp($request->newpassword, $request->confirmpassword);
           
            if(strcmp($request->newpassword, $request->confirmpassword))
            {
                Session::put('message','Failure');
                Session::put('message1','Newpassword and Confirmpassword  doesnot matched');
                Session::put('alerttype','error'); 
                return redirect()->intended('/employer-change-password');
            }
            if (!(Hash::check($request->currentpassword, Auth::user()->password))) {
                Session::put('message','Failure');
                Session::put('message1','Invalid Current Password');
                Session::put('alerttype','error'); 
                return redirect()->intended('/employer-change-password');
            }
            else
            {
                $x=User::find(Auth::user()->id)->update(['password'=> Hash::make($request->newpassword)]);
                if($x)
                {
                    Session::put('message','Success');
                    Session::put('message1','Password Updated Successfully');
                    Session::put('alerttype','success');
                     return redirect()->intended('/employer-dashboard');
                }
                else
                {
                    Session::put('message','Failure');
                    Session::put('message1','Password Updation Failed');
                    Session::put('alerttype','error'); 
                    return redirect()->intended('/employer-dashboard');
                }
                
            }

    }
}
