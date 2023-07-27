<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function index()
    {
        return view('Admin.adminhome');
    }

    /**
     * Load Login View
     *
     * @return view login
     */
    public function login()
    {
        return view('Admin.login');
    }
    public function authenticate(Request $request)
    {
        if($request->getmethod() == 'GET') {
            return redirect()->route('admin_login');
        }
    }
}
