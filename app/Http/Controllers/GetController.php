<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests;

class GetController extends Controller
{
    public function emplData(){
        $data = DB::table('empl_info')->get();
        return view('Jobs.index', ['data'=>$data]);
    }
    public function curWrk(){
        $data = DB::table('newjobform')->get();
        return view('Jobs.currentjob_actions', ['data'=>$data]);
    }
}
