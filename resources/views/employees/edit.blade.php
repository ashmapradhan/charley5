@extends('employees.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
      
      <form action="{{ url('employee/' .$employees->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$employees->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="firstnamename" id="firstname" value="{{$employees->firstname}}" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="lastname" id="lastname" value="{{$employees->lastname}}" class="form-control"></br>
        <label>Mobile</label></br>
        <input type="text" name="phone" id="phone" value="{{$employees->phone}}" class="form-control"></br>
        <label>Email</label></br>
        <input type="text" name="email" id="email" value="{{$employees->email}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop