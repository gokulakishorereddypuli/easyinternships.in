<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobController extends Controller
{
    function postJob(Request $req)
    {
        $req->validate([
            'JobTitle'=>'required',
            'JobSummery'=>'required',
            'Location'=>'required',
            'JobType'=>'required',
            'Experience'=>'required',
            'SalaryRange'=>'required',
            'Qualification'=>'required',
            'Vacancy'=>'required',
            'StartDate'=>'required',
            'EndDate'=>'required',
            'Job Description'=>'required',
            'Responsibilities'=>'required',
            'Education'=>'required',
            'OtherBenefits'=>'required',
            'CompanyName'=>'required',
            'WebAddress'=>'required',
            'CompanyProfile'=>'required',
        ]);
    }
}
