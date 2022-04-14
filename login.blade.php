@extends('layout')
@section('content')
<h1>Login page</h1>

<form action="/loginsubmit" method="POST">
    @csrf
    
  <div class="form-group" >
    <label for="email">Email address:</label>
    <input type="text" class="form-control" name="email" placeholder="Enter email" id="email">
  </div> <br>
  <div class="form-group">
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label for="pwd">Password:</label>
    <input type="password" class="form-control" name="password" placeholder="Enter password" id="pwd">
  </div>
   <br>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" class="btn btn-primary" >Submit</button>
</form>
@endsection