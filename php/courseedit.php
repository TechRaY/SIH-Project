<html lang="en">
<head>
  <title>SIH</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>


<div class="container">
  <ul class="nav nav-pills">
    <li class="active"><a data-toggle="pill" href="#collegeinfo">College Info</a></li>
    <li><a data-toggle="pill" href="#courseinfo">Course Info</a></li>
    <li><a data-toggle="pill" href="#ratinginfo">Rating Info</a></li>
  </ul><br><br>
  
  <div class="tab-content">    
   
	   
    <div id="courseinfo" class="tab-pane fade">
		<form class="form-horizontal">
		<div class="btn-group btn-group-justified">
    <a href="#" class="btn btn-primary">Edit Course</a>
    <a href="addcourse.php" class="btn btn-primary">Add Course</a>
    <a href="#" class="btn btn-primary">Delete Course</a>
  </div>

		<br>
		<?php
		include 'dd.php';
		?>
		  <div class="form-group">
			<label class="control-label col-sm-2" for="tradecode">Trade Code:</label>
			<div class="col-sm-3">
			  <input type="text" class="form-control" id="tradecode">
			</div>
		  </div>

		  <div class="form-group">
			<label class="control-label col-sm-2" for="tradename">Trade Name:</label>
			<div class="col-sm-3"> 
			  <input type="text" class="form-control" id="tradename">
			</div>
		  </div>

		  <div class="form-group">
			<label class="control-label col-sm-2" for="duration">Duration:</label>
			<div class="col-sm-3"> 
			  <input type="text" class="form-control" id="duration">
			</div>
		  </div>

		  <div class="form-group">
			<label class="control-label col-sm-2" for="shift">Shift:</label>
			<div class="col-sm-3"> 
			  <input type="text" class="form-control" id="shift">
			</div>
		  </div>

		  <div class="form-group">
			<label class="control-label col-sm-2" for="seatscount">Seats Count:</label>
			<div class="col-sm-3"> 
			  <input type="text" class="form-control" id="seatscount">
			</div>
		  </div>
		  
		  <div class="form-group"> 
			<div class="col-sm-offset-2 col-sm-10">
			  <button type="Submit" class="btn btn-default">Submit </button>
			</div>
		  </div>
		</form>
    </div>
	

    </div>
    
    
  </div>
</body>
</html>
