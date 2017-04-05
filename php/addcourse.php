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

  <div class="tab-content">    
    
   <br><br>
   
		<form class="form-horizontal" action="insert.php" method="POST">
		
		  <div class="form-group">
			<label class="control-label col-sm-2" for="tradecode">Trade Code:</label>
			<div class="col-sm-3">
			  <input type="text" class="form-control" id="tradecode" required>
			</div>
		  </div>

		  <div class="form-group">
			<label class="control-label col-sm-2" for="tradename">Trade Name:</label>
			<div class="col-sm-3"> 
			  <input type="text" class="form-control" id="tradename" required>
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
  
</body>
</html>
