<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CompanyProfile;
use App\Models\CompanySocialNetworks;
use App\Models\PostJobs;
use App\Models\User;
use Auth;
use DB;
class EmployerDashboardController extends Controller
{
    function dashboard()
    {
        $id=Auth::user()->id;
        $data=CompanyProfile::where('company_id',$id)->first();
        //return $data;
        if(!$data)
        {
            return view('employer.profile.add');
        }
        $postjobs=DB::table('postjobs');
        $data['jobcount']=with(clone $postjobs)->where('company_id',$id)->count('postjob_id');
        return view("employer.dashboard",$data);
    }
    function addprofile(Request $request)
    {
        if(Auth::user()->user_type=='Employer')
        {
            if(!CompanyProfile::where('company_id',Auth::user()->id)->first())
            {
                $data=new CompanyProfile();
                $data->company_id =Auth::user()->id;
                $data->company_name=$request->company_name;
                $data->support_email=$request->email;
                $data->phone=$request->phone;
                $data->address=$request->address;
                $data->category=$request->category;
                $data->aboutus= $request->aboutus;
                $data->save();

            }
            if(! CompanySocialNetworks::where('company_id',Auth::user()->id)->first())
            {
                    $data1=new CompanySocialNetworks();
                    $data1->company_id=Auth::user()->id;
                    $data1->fb=$request->fb;
                    $data1->twitter=$request->twitter;
                    $data1->google=$request->google;
                    $data1->save();
            }
            if($data && $data1)
            {
                return redirect()->intended('employer-dashboard');
            }

        }
        else{
            return redirect()->intended('/');
        }
        /*
        $data=CompanyProfile::create([
            'company_id'=>Auth::user()->id,
            'company_name'=>$request->company_name,
            'support_email'=>$request->email,
            'phone'=>$request->phone,
            'address'=>$request->address,
            'category'=>$request->category,
            'aboutus'=>$request->aboutus,
        ]);
        $data1=CompanySocialNetworks::create([
            'company_id'=>Auth::user()->id,
            'fb'=>$request->fb,
            'twitter'=>$request->twitter,
            'google'=>$request->google,
        ]);
        */
    }
    function updateprofile(Request $request)
    {

        if($request->isMethod('GET') && Auth::user()->user_type=='Employer')
        {
            $id=Auth::user()->id;
            $data['company']=CompanyProfile::where('company_id',$id)->first();
            $data['social']=CompanySocialNetworks::where('company_id',$id)->first();

            return view('employer.profile.update',$data);
        }
        if($request->img)
        {
            $id=Auth::user()->id;
            $file=$request->img;
            $filename="logo".$id.'.'.$file->getClientOriginalExtension();
            $request->img->move('images/users/employer',$filename);

        }

        $user=User::find(Auth::user()->id);
        $data = CompanyProfile::where('company_id',$user->id)->first();

        $data->company_name=$request->company_name ?? '';
        $data->support_email=$request->email ?? '';
        $data->phone=$request->phone ?? '';
        $data->address=$request->address ?? '';
        $data->category=$request->category ?? '';
        $data->aboutus= $request->aboutus ?? '';
        $data->save();

        $data1=CompanySocialNetworks::where('company_id',$user->id)->first();

        $data1->fb=$request->fb ?? '';
        $data1->twitter=$request->twitter ?? '';
        $data1->google=$request->google ?? '';
        $data1->save();

        return redirect()->intended('employer-dashboard');

    }
    function postjob(Request $request)
    {
        if($request->isMethod('GET'))
        {

            return view('employer.postjobs.new');

        }
        
        elseif($request->isMethod('POST'))
        {
            return $request->all();
            $data=new PostJobs();
            $data->company_id=Auth::user()->id;
            $data->job_title =$request->job_title;
            $data->category =$request->category;
            $data->job_location =$request->job_location;
            $data->job_type =$request->job_type;
            $data->experience =$request->experience;
            $data->salary_range =$request->salary_range;
            $data->qualification =$request->qualification;
            $data->vacancy =$request->vacancy;
            $data->start_date =$request->start_date;
            $data->end_date =$request->end_date;
            $data->job_description =$request->job_description;
            $data->responsibilities =$request->responsibilities;
            $data->benefits=$request->benefits;
            $data->country =$request->country;
            $data->city =$request->city;
            $data->zip_code =$request->zip_code;
            $data->your_location =$request->your_location;
            $data->Tc=$request->Tc;
            $data->save();

            return redirect()->intended('employer-dashboard');
        }

    }


    function deleteaccount(Request $request)
    {

    }
    function managejobs(Request $request)
    {
        if($request->isMethod('GET'))
        {
            return view('employer.postjobs.managejobs');
        }
    }
}
