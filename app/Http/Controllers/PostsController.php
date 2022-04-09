<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Database\Query\Builder;
use App\Models\Cm_employee;
use App\Models\Work_request;

class PostsController extends Controller
{

    public function home() {
    return view('Jobs.dashboard');
    }

    public function insertform() {
        return view('Jobs.index');
     }
    public function insert(Request $request){
        if(!empty($_POST['Job_Name']) && !empty($_POST['Employee']) && !empty($_POST['Description']) && !empty($_POST['Materials']) && !empty($_POST['Start_Date']) && !empty($_POST['End_Date'])){
        $Job_Name = $request->input('Job_Name');
        $Employee = $request->input('Employee');
        $Description = $request->input('Description');
        $Materials = $request->input('Materials');
        $Start_Date = $request->input('Start_Date');
        $End_Date = $request->input('End_Date');
        
        
        if($Start_Date>$End_Date){
            return view('Jobs.incorrectdates');
        }
        
        $data=array('Job_Name'=>$Job_Name,'Employee'=>$Employee,'Description'=>$Description,'Materials'=>$Materials, 'Start_Date'=>$Start_Date, 'End_Date'=>$End_Date, 'Status'=>'Requested');
        Work_request::insert($data);
        //DB::table('newjobform')->insert($data);
        return view('Jobs.submissioncomplete');
        }
        else{
            return view('Jobs.submissionerror');
        }
    }
    public function edit(){

            if(isset($_POST['activate'])){
                $Id = ($_POST['activate']);
                $var = 'Active';
                //DB::table('newjobform')->where('Submission_Id', $Id)->update(['Status'=>'Active']);
                Work_request::where('Submission_Id', $Id)->update(array('Status'=>'Active'));
                return view('Jobs.activatecomp');
            }
            
            elseif(isset($_POST['delete'])){
                $Id = ($_POST['delete']);
                //DB::table('newjobform')->where('Submission_Id', $Id)->delete();
                Work_request::where('Submission_Id', $Id)->delete();
                return view('Jobs.selectioncomplete');
            }
        //}
        else{
            return view('Jobs.selectionerror');
        }
    }

}

