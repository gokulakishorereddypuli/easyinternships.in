<?php




namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Validator;
use Socialite;
use Hash;
use Illuminate\Support\Str;
Use Illuminate\Support\Facades\Auth;
use Session;
class UserController extends Controller
{

    function register(Request $request)
    {
        if($request->isMethod("GET"))
        {
            return view('user.register');
        }
        /*
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'body' => 'required',
        ]);
        $validator = Validator::make($request->all(), [
            'username' 	=> 'required',
			'email' 		=> 'required|email',
			'password'		=> 'required',

        ]);

        if ($validator->fails()) {
            return response()->json([
                        'error' => $validator->errors()->all()
                    ]);
        }
        */
        //return $request->all();

        $rules = array(
			'username' 	=> 'required',
			'email' 		=> 'required|email',
			'password'		=> 'required',
		);

		$messages = array(
			'required'              => ':attribute '.trans('messages.home.field_is_required').'',
		);

		$attributes = array(
			'username' 	=> trans('messages.user.username'),
			'email' 		=> trans('messages.user.email'),
			'password' 		=> trans('messages.user.password'),
		);

		$validator = Validator::make($request->all(), $rules, $messages, $attributes);

        if ($validator->fails()) {
            return response()->json([
                'error' => $validator->errors()->all()
            ]);
        }
        /*
        $check=User::where('email',$request->email)->first();
        if(!$check)
        {
            Session::put('message','already existing email');
            return back;
        }
        */
        $data=new User();
        $data->username=$request->username;
        $data->email=$request->email;
        $data->password=\Hash::make($request->password);
        //return $request->employer;
        /*if($request->idRegisterEmp=='')
        {
            $data->user_type='Candidate';
        }
        if($request->idRegisterCan==''){
            $data->user_type='Employer';
        }*/

        $data->save();
        return response()->json(['success' => 'Registration successfully Completed.'.$request->idRegisterEmp.'.'.$request->idRegisterCan]);

        return redirect()->intended('/login');

    }


    public function googleredirect()
    {
        return Socialite::driver('google')->redirect();
    }
    public function googlecallback()
    {
        $userdata = Socialite::driver('google')->user();
        //dd($userdata);
        /*$user=User::where('email',$userdata->email)->where('UserId',$userdata->id)->first();
        if($user)
        {
                Auth::login($user);
                return redirect('/dashboard');
        }
        else{
            */
        $type="google";
        $user=User::create([
        'google_id'=>$userdata->id,
        'username' => $userdata->name,
        'email' => $userdata->email,
        'authtype'=>$type
        ]);
        return redirect('/candidate-profile');
  }


  // login
  function login(Request $request)
    {
        if($request->isMethod('GET'))
        {
            return view('user.login');
        }
        //return $request->all();
         $rules = array(
			'email' 		=> 'required|email',
			'password'		=> 'required',
            'user_type' =>'required',
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
        if (Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password, 'user_type' => 'Candidate'])) {

            return redirect()->intended('/candidate-dashboard');
		}
        if (Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password, 'user_type' => 'Employer'])) {

            return redirect()->intended('/employer-dashboard');
		}
        else
        {
            Session::put('message','Invalid Creadentials');
            return back();
        }
        //$guard =Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password,'user_type'=>$request->user_type]);



    }
}
