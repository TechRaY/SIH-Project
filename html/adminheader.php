<?php
include('conn.php');
session_start();
?>

<html>
<head>
  <title>SIH</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>


<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">Skill Course finder</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="add.php">Add College</a></li>
    </ul>

   <form class="form-horizontal" action="" method="post">
    <div class="form-group">
      <div class="col-sm-3"> 
         <input type="text" name="search" class="form-control"required>
      </div>

      <div class="col-sm-3">
           <input type="submit" name="searchquery" class="btn btn-sm btn-primary" value="Search">
      </div>
     </div>
   </form>
      <a href="logout.php">LOG OUT</a>
  </div>
 </div> 
</nav>
</body>
</head>
</html>
