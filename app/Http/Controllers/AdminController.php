<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function checkdata()
    {
        return view('admin.check-data');
    }

    public function eop()
    {
        return view('admin.eop');
    }

    public function completeReports()
    {
        return view('admin.complete-reports');
    }
    
    public function adminbutton()
    {
        return view('admin.admin-button');
    }
}
