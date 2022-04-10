<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Database\Query\Builder;
use App\Models\Employee;
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
        return view('Jobs.submissioncomplete');
        }
        else{
            return view('Jobs.submissionerror');
        }
    }
    public function edit(){

            if(isset($_POST['activate'])){
                $Id = ($_POST['activate']);
                Work_request::where('Submission_Id', $Id)->update(array('Status'=>'Active'));
               
                $work = Work_request::where('Submission_Id', $Id)->pluck('Employee');
                $empl_email = Employee::where('name', $work)->pluck('email');
                
                $email = str_replace( array('["','"]'),'',$empl_email );
                //Recipient of email
                
                $to = $email; //enter database emails are being pulled from
                //Subject of email
                $subject = 'You have been assigned a new job!';

                    //Body of email
                    $title = '<h3> You have been assigned a new job!</h3><br>';
                    $Job_name = Work_request::where('Submission_Id', $Id)->pluck('Job_Name');
                    $Job_Sdate = Work_request::where('Submission_Id', $Id)->pluck('Start_Date');
                    $Job_Edate = Work_request::where('Submission_Id', $Id)->pluck('End_Date');
                    $Job_Desc = Work_request::where('Submission_Id', $Id)->pluck('Description');
                    $Job_Mat = Work_request::where('Submission_Id', $Id)->pluck('Materials');   
                    
                
                $message = '<p>'.$title.'<br>Job name: '.$Job_name.'<br>Job Start date: '.$Job_Sdate.'<br>Job End date: '.$Job_Edate.'<br>Job Description: '.$Job_Desc.'<br>Job Materials: '.$Job_Mat.'</p>';
                
                //Headers
                $headers = "From: Hague Electric <shaque1368@gmail.com>\r\n";
                $headers .= "Content-type: text/html\r\n";

                //Sending email
                if(mail($to, $subject, $message, $headers))
                    echo "Email sent";
                else
                    echo "Email failed to send";

                return view('Jobs.activatecomp');
            }
            
            elseif(isset($_POST['delete'])){
                $Id = ($_POST['delete']);
                Work_request::where('Submission_Id', $Id)->delete();
                return view('Jobs.selectioncomplete');
            }
        else{
            return view('Jobs.selectionerror');
        }
    }

}

