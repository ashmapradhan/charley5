<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work_request extends Model
{
    public $timestamps = false;
    protected $table = 'newjobform';
    protected $primaryKey = 'Submission_Id';
    protected $fillable = ['Job_Name','Employee','Description','Materials','Start_Date','End_Date','Status'];
}
