@extends('details.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Details Page</div>
  <div class="card-body">
      
      <form action="{{ url('detail') }}" method="post">
        {!! csrf_field() !!}
        <label>First Name</label></br>
        <input type="text" name="firstname" id="firstname" class="form-control"></br>
        <label>Last Name</label></br>
        <input type="text" name="lastname" id="lastname" class="form-control"></br>
        <label>Email</label></br>
        <input type="text" name="email" id="email" class="form-control"></br>
        <label>Mobile</label></br>
        <input type="text" name="mobile" id="mobile" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop