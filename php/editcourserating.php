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


    <div id="ratinginfo" class="tab-pane fade">
	  <form class="form-horizontal">

			<h2>Trade Rating</h3>
<div class="form-group">
	
		<?php 
			include('dropdown.php')
		?>
</div>
		<div class="form-group">
			<label class="control-label col-sm-2" for="c110">Space-C1(10)</label>
			<div class="col-sm-3">
			  <input type="text" class="form-control" id="C110" name="C110">
			</div>
		  </div>

		  <div class="form-group">
			<label class="control-label col-sm-2" for="C25">Tools and Equipment-C2(5)</label>
			<div class="col-sm-3"> 
			  <input type="text" class="form-control" id="C25" name="C25">
			</div>
		  </div>

		  <div class="form-group">
			<label class="control-label col-sm-2" for="B120">Machnies-B1(20)</label>
			<div class="col-sm-3"> 
			  <input type="text" class="form-control" id="B120">
			</div>
		  </div>

		  <div class="form-group">
			<label class="control-label col-sm-2" for="A25">Adequacy of Qualified Staff-A(25)</label>
			<div class="col-sm-3"> 
			  <input type="text" class="form-control" id="A25">
			</div>
		  </div>

		  <div class="form-group">
			<label class="control-label col-sm-2" for="C25">Generator Power Back-C2(5)</label>
			<div class="col-sm-3"> 
			  <input type="text" class="form-control" id="C25">
			</div>
		  </div>

		  <div class="form-group">
			<label class="control-label col-sm-2" for="B215">Practical Conducted for Students-B2(15)</label>
			<div class="col-sm-3"> 
			  <input type="text" class="form-control" id="B215" name="B215">
			</div>
		  </div>

		  <div class="form-group">
			<label class="control-label col-sm-2" for="C110_1">Students pass out-C1(10)</label>
			<div class="col-sm-3"> 
			  <input type="text" class="form-control" id="C110_1">
			</div>
		  </div>
			
			<div class="form-group">
			<label class="control-label col-sm-2" for="B215_1">Students' employability-B2(15)</label>
			<div class="col-sm-3"> 
			  <input type="text" class="form-control" id="B215_1">
			</div>
		  </div>



		  <div class="form-group"> 
			<div class="col-sm-offset-2 col-sm-10">
			  <button type="Submit" class="btn btn-default">Submit Details:</button>
			</div>
		
			<div class="container">                 
  				<ul class="pagination">
    				<li><a data-toggle="pill" href="#ratinginfo">1</a></li>
   				 <li><a href="#traderatinginfo">2</a></li>  
				</ul>
				</div>
			</form></div>