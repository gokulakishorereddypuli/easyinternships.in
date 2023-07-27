<?php

namespace App\Http\Controllers;
use Auth;
use App\Models\User;
use Illuminate\Http\Request;
use Validator;
class CandidateController extends Controller
{
    //
    function login(Request $request)
    {
        $rules = array(
			'email' 		=> 'required|email',
			'password'		=> 'required|min:6',
		);

		$messages = array(
			'required'  => ':attribute '.trans('messages.home.field_is_required').'',
		);

		$attributes = array(
			'email' 		=> trans('messages.user.email'),
			'password' 		=> trans('messages.user.password'),
		);

		$validator = Validator::make($request->all(), $rules, $messages, $attributes);
        if ($validator->fails()) {
            return back()
                        ->withErrors($validator)
                        ->withInput();
        }
        /*
        if ($validator->fails()) {
            return back()
                        ->withErrors($validator)
                        ->withInput();
        }
        $request->validate([
            'email'=>'required',
            'password'=>'required',

        ]);
        */
        $guard =Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password]);
        /*
        if (Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password]))
        {
			return redirect('/candidate-profile');
		}
        else
        {
            return "failed" ;
        }
        */
    }
}
