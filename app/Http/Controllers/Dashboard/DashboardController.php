<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\event;

class DashboardController extends Controller
{

    public function _construct(){
        $this->middleware(['auth']);
    }

    public function index(){
        $alerts = event::latest()->with(['user'])->paginate(20);
        return view('Dashboard.index', [
            'alerts'=>$alerts
        ]);
    }

    public function add(){
        return view('Dashboard.add');
    }

    public function store(Request $request){
       $this->validate($request, [
           'event'=>'required',
           'severity'=>'required',
           'region'=>'required',
           'guidelines'=>'required'
       ]);

       $request->user()->alerts()->create([
          'event'=>$request->event,
          'severity'=>$request->severity,
          'region'=>$request->region,
          'guidelines'=>$request->guidelines
       ]);

       return redirect()->route('dashboard');
    }
}
