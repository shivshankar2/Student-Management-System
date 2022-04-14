<!DOCTYPE html>
<html lang="en">
   
<head>
  <style>
    .body{
      background-color: pink;
      background-image: url("abc.jpj");
    }
    .accont{
    border: solid;
    border-color: #333;
    height: 500;
    width: 450;
}
  </style>
<script src="{{asset('js/app.js')}}">
   </script>
   <link rel="stylesheet" href="{{asset('css/app.css')}}">
   <link rel="stylesheet" href="{{asset('css/custom.css')}}">
   
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<link href="{{ asset('css/background.css') }}" rel="stylesheet">
  
     <div class="header">
         @section('header')
         <nav class="navbar navbar-expand-md bg-dark navbar-dark" display="inline">
  <!-- Brand -->
 <span> <h1><a class="navbar-brand" href="">Student Management System</a></h1></span>

  <!-- Toggler/collapsibe Button -->
  <!--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <h3><a class="nav-link" href="list">Student Info</a></h3>
      </li>
      <li class="nav-item">
        <h3><a class="nav-link" href="/">Login</a></h3>
      </li>
      <li class="nav-item">
        <h3><a class="nav-link" href="Create">Create Account</a></h3>
      </li>
    </ul>
  </div>
</nav>
     </div>

     <div class="content">
     @section('content')
     <h1>Content part</h1>
         @show
     </div>

     <div class="footer">
     @section('footer')
     <h1>University Rules and Regulation</h1>
     <p>Students are expected to come to the college in neat, clean and simple clothes. They
must conform to the high standards of modesty maintained by the institutions. They
should not wear gaudy dresses.</p>

<p>All men students are expected to wear pants and shirts-bush shirts or slack shirts. Tshirts are not allowed. Women students are strictly not permitted to wear skirts,
leggings, jeans, frocks and high tops.</p>

<p>Students should not bring discredit to the college or to themselves. Insubordination and
rude behavior of any kind inside or outside the college will be severely dealt with.</p>

<p>Students should be regular and punctual in attending the classes and all activities
connected with the college. No student is allowed to enter the classroom or leave the
class room during class hours without the permission of the principal. They are not
permitted to go out during lunch break.</p>

<p>The students should stand up and wish the teacher when he/she enters the class. They
should take their seats only after the teacher takes his/her seat or instructs the students
to do so</p>

<p>Strict silence should be maintained during class hours in the Classrooms, Library,
Laboratory, Examination halls and in the College premises.
</p>

<p>Students are expected to take care of the college property and help in keeping the
premises neat and clean. Disfiguring of walls, doors or breaking the furniture is a
breach of discipline and will not be tolerated.</p>
     @show
     </div>

</body>
</html>