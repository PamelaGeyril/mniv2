<?php

namespace App\Http\Controllers;

use App\Imports\DataImport;
use App\Models\NrMniData;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Reader;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Facades\Excel;

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

    public function importdata()
    {
        return view('admin.import');
    }

    public function importCsv(Request $request)
    {
        Excel::import(new DataImport, $request->file);

        return back()->with('success', 'Successfully uploaded data.');        
    }
}
