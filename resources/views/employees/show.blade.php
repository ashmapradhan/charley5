@extends('employees.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Employees Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">First Name : {{ $employees->firstname }}</h5>
        <p class="card-text">Last Name : {{ $employees->lastname }}</p>
        <p class="card-text">Phone : {{ $employees->phone }}</p>
  </div>
       
    </hr>
  
  </div>
</div>