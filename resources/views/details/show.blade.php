@extends('details.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Details Page</div>
  <div class="card-body">
        <div class="card-body">
            <h5 class="card-title">First Name : {{ $details->firstname }}</h5>
            <h5 class="card-title">Last Name : {{ $details->lastname }}</h5>
            <p class="card-text">Email : {{ $details->email }}</p>
            <p class="card-text">Mobile : {{ $details->mobile }}</p>
        </div>
       
    </hr>
  
  </div>
</div>