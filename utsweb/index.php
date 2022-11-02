<?php
require 'function.php' ;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

  <style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}


.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body >
<h2 align="center ">WELLCOME TO MOOIFILM</h2>
<h2 align="center" style="margin-top: 8%" >Login Form</h2>

<form method="post">


  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Password" name="psw" required>
        
    <button type="submit" name="login">Login</button>

  </div>

</body>
</html>


</head>
<body>

<div class="jumbotron text-center">
  <h2>ENJOY THE BEST MOVIE AND ENTERTAINMENT, KEEP UP TO DATE WITH THE LATEST NEWS, AND GET ATTRACTIVE DEALS AND PROMOS!</h2>
  <p>Resize this responsive page to see the effect!</p> 
</div>
  
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h2>MOOIFILM</h2>
      <p>Best App For Movie Lovers In Indonesia! Movie</p>
      <p>Entertainment Platform From Cinema To Online Movie Streaming Selections.</p>
    </div>
    <div class="col-sm-4">
      <h3></h3>
      <p>NOW SHOWING</p>
      <p>TIX NOW</p>
      <P>SPOTLIGHT</P>
      <P>VIDEO & TRAILER</P>
    </div>
    <div class="col-sm-4">
      <h3></h3>        
      <p>CAREERS</p>
      <p>CONTACT US</p>
      <P>PRIVACY POLICY</P>
      <P>TERMS & CONDITIONS</P>
    </div>
  </div>
</div>

</body>
</html>