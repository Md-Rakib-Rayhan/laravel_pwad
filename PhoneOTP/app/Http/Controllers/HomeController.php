<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //AddToLog, LogList
    
    public function AddToLog(Request $request)
    {
        \LogActivities::addToLog('My Testing Add To Log.');
        dd('log insert successfully.');
        // \LogActivity::addToLog('Added to log');
        // return redirect()->back();
    }

    public function LogList(Request $request)
    {
        // $logs = \LogActivity::logList();
        // return view('logActivity', compact('logs'));
    }
}
