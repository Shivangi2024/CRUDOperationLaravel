@extends('details.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Contact us Page</div>
  <div class="card-body">
      
      <form action="{{ url('detail/' .$details->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$details->id}}" id="id" />
        <label>First Name</label></br>
        <input type="text" name="firstname" id="firstname" value="{{$details->firstname}}" class="form-control"></br>
        <label>Last Name</label></br>
        <input type="text" name="lastname" id="lastname" value="{{$details->lastname}}" class="form-control"></br>
        <label>Email</label></br>
        <input type="text" name="email" id="email" value="{{$details->email}}" class="form-control"></br>
        <label>Mobile</label></br>
        <input type="text" name="mobile" id="mobile" value="{{$details->mobile}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop