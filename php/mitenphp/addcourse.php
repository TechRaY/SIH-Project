<?php
include('header.php');
session_start();
$id = $_GET['var'];
if(isset($_POST['addcourse'])){
$tradecode = $_POST['tradecode'];
$duration = $_POST['duration'];
$seatscount = $_POST['seatscount'];
$tradename = $_POST['tradename'];
$shift = $_POST['shift'];   
 
 
$query = "insert into  courseinfo values('$tradecode','$id','$tradename','$duration','$shift','$seatscount')";
if(mysql_query($query)){
echo "<script>alert('Course Added');
         	window.location='addcourse.php'
	        </script>";

}

}
?>



<html>
<body>
<form class="form-horizontal" action="" method="post">
  <div class="form-group">
						<label class="col-sm-3 control-label" for="tradecode">Trade Code:</label>
				<div class="col-sm-3"> <input type="text" required  class="form-control" id="tradecode" name="tradecode">
						</div></div>

  <div class="form-group">
						<label class="col-sm-3 control-label" for="duration">Duration:</label>
			  	<div class="col-sm-3"><input type="text" required  class="form-control" id="duration" name="duration">
						</div></div>
				
  <div class="form-group">
						<label class="col-sm-3 control-label" for="seatscount">Seats Count:</label>
				<div class="col-sm-3"><input type="text" required  class="form-control" id="seatscount" name="seatscount">
						</div></div>

  <div class="form-group">
						<label class="col-sm-3 control-label" for="tradename">Trade Name:</label>
				<div class="col-sm-3"><input type= "text" required  class="form-control" id="tradename" name="tradename">
						</div> </div>

  <div class="form-group">
			<label  class="col-sm-3 control-label" for="shift">Shift:</label>
			<div class="col-sm-3">		    <input type="text" required  class="form-control" id="shift" name="shift">
						</div></div>


  <div class="form-group">
     <label class="col-sm-3 control-label">&nbsp;</label>
        <div class="col-sm-6">
             <input type="submit" name="addcourse" class="btn btn-sm btn-primary" value="Submit">
        </div>
  </div>
</form>
</body>
</html>