<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" type="text/css" href="../css/global.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" ></script>

</head>

<body id="loginbody">



<form action="../php/logincheck.php">
   <div class="imgcontainer">
    <img src="http://www.aspirehire.co.uk/aspirehire-co-uk/_img/profile.svg" alt="Avatar" class="avatar" width=100px height=100px>
   </div>

  <div class="container">
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
    <button id="loginsubmit" type="submit">Login</button>
   
  </div>


</form>

</body>
</html>