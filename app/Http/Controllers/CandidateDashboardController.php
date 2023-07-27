<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\CandidateProfile;
use Auth;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use DB;
class CandidateDashboardController extends Controller
{
    //
    function dashboard()
    {
        $id=Auth::user()->id;
        $data=CandidateProfile::where('candidate_id',$id)->first();
        if(!$data)
        {
            return view('Candidate.profile.add');
        }
        return view('Candidate.dashboard',);
    }
    function registerUserDetails()
    {

    }
    function addprofile(Request $request)
    {
       // return $request->all();
        $data=new CandidateProfile();
        $data->candidate_id=Auth::user()->id;
        $data->fullname	=$request->fullname;
        $data->phone = $request->phone ;
        $data->address = $request->address ;
        $data->industry_expertise = $request->industry_expertise ;
        $data->aboutme= $request->aboutme ;
        $data->save();
        return back();

    }
    function updateprofile(Request $request)
    {
        if($request->isMethod("GET")) {
            $id=Auth::User()->id;
            $data['candidate']=CandidateProfile::where('candidate_id',$id)->first() ;
            return view('Candidate.profile.update',$data);
        }
        $id=Auth::user()->id;
        $data = CandidateProfile::where('candidate_id',$id)->first();
        $data->fullname	=$request->fullname;
        $data->phone = $request->phone ;
        $data->address = $request->address ;
        $data->industry_expertise = $request->industry_expertise ;
        $data->aboutme= $request->aboutme ;
        $data->save();
        return redirect()->intended('candidate-dashboard');

    }

    function applyJob(Request $request)
    {

    }
    function addresume(Request $request)
    {
        if($request->isMethod('GET'))
        {
            return view('Candidate.resume.add');
        }


    }
    function updateresume(Request $request)
    {
        if($request->isMethod('GET'))
        {
            return view('Candidate.resume.add');
        }

    }
    function deleteaccount(Request $request)
    {

    }

    function changepassword(Request $request)
    {

    }
}
