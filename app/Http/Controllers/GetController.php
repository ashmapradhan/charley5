<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Employee;
use App\Models\Work_request;

class GetController extends Controller
{
    public function emplData(){
        $data = Employee::get();
        return view('Jobs.index', ['data'=>$data]);
    }
    public function curWrk(){
        $data = Work_request::get();
        return view('Jobs.currentjob_actions', ['data'=>$data]);
    }

    public function welcomeGet(){
        $status = 'Active';
        $data = Work_request::get()->where('Status', $status);
        return view('welcome', ['data'=>$data]);
    }
}
