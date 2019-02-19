<!doctype html>
<html>
<head>
<title> Login</title>
</head>
<body> 
    
   <form class="form-horizontal" method="POST" action="{{ action('User@loginPost') }}"> 
  {{ csrf_field() }}<h1>Login</h1><br>email
  <input id="email" type="text" name="email" value="admin@gmail.com" required autofocus><br>passwird
  <input id="password" type="password" name="password" value="admin" required  > <br>
  <input id="submit" type="submit"  value="submit"    > 
  
     </form> 