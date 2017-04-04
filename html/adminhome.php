<script src="../javascript/adminhome.js"></script>


		<div class="container-fluid">	

			<div class="row mid_portion">

           		<div class="col-md-2 nav">   
                	<ul id="option">
                		<li class="active"><a href="#"><span class="glyphicon glyphicon-home"></span> Home</a></li>
						<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
					</ul>
				</div>
				<div class="col-md-10 content">   
					<div class="row">
						<div class="welcome  col-md-3">Welcome Admin!</div>
					</div>
					<div class="container">

                    
						 
                    <div class="col-md-4">
						<form action=../php/addcollege.php method="POST">					
							<button type="submit" class="btn btn-primary btn-lg add" name="newsubmit">Add new College</button>
						</form> 	
                    </div>

					                       	

                    
                    <div class="col-md-8"> 
                        <form action=../php/modifycollege.php method="POST">  
				            <input type="text" onKeyUp="fx(this.value)" autocomplete="off" name="search" id="search" class="textbox" placeholder="Search by College Name/Code" >
				

							<button type="submit" id="modifysubmit" class="btn btn-primary  btn-lg modify " name="modifysubmit">Modify College Info</button><br>				
							<div id="livesearch" class="sirdard" ></div>
						</form>	 
					</div>
					
					</div>

           		</div>

           	</div>

		</div>	


