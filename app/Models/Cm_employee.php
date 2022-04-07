<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cm_employee extends Model
{
    protected $table = 'cm_emp';
    protected $primaryKey = 'id';
    protected $fillable = ['firstname','lastname','phone','email'];
}
