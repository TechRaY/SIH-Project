<?php
include('header.php');
session_start();
?>

<html>
<head>


                                      <!-- ADD PHP SCRIPT -->
<?php
 if(isset($_POST['addcollegedata']))
{
$iticode = $_POST['iticode'];
$itiname = $_POST['itiname'];
$institutetype = $_POST['institutetype'];
$weburl = $_POST['weburl'];
$address = $_POST['address'];
$district = $_POST['district'];
$pincode = $_POST['pincode'];
$contactemail = $_POST['contactemail'];
$displayname = $_POST['displayname'];
$location = $_POST['location'];
$dateofestablish = $_POST['dateofestablish'];
$lastdate = $_POST['lastdate'];
$state = $_POST['state'];
$contactno = $_POST['contactno'];
$spiuname = $_POST['spiuname'];
$iticode = $_POST['iticode'];
$status = $_POST['status'];

$query = "insert into  collegeinfo values('$iticode','$itiname','$institutetype','$weburl','$address','$district','$pincode','$contactemail','$displayname','$location','$dateofestablish',
'$lastdate','$state','$contactemail','$spiuname','$iticode','$status')";

	if(mysql_query($query)){
echo "<script>alert('College Added');
         	window.location='index.php'
	        </script>";
	}	
	else{
		echo"Not Inserted";
	}
}
?>

                            <!-- Add Form -->
                            

<form action="" method="POST" id="addpage" >

                	<div class="col-md-5">  

                		<table>
                			<tr>
                				<td><label for="iticode">ITI Code:</label></td>
                				<td>
                					<div class="form-inline manageleft">
						  				<div class="form-group" align="left">
											<input type="text" required  class="form-control" id="iticode" name="iticode">
						  				</div>
					  				</div>
					  			</td>

                				<td style="padding-left:50px"><label align="right" for="displayname">Display Name:</label></td>
                				<td>
                					<div class="form-inline manageright">
		  								<div class="form-group">
											<input type="text" required  class="form-control" id="displayname" name="displayname">
	 									</div>		  
     								</div>
     							</td>
                			</tr>

                			<tr>
                				<td><label for="itiname">ITI Name:</label></td>
                				<td>	
                					<div class="form-inline manageleft">
			  							<div class="form-group">	
											<input type="text" required class="form-control" id="itiname" name="itiname">
			  							</div>
		  							</div>
		  						</td>
                				<td style="padding-left:50px" ><label for="location">Location:</label></td>
                				<td>					
                					<div class="form-inline manageright">
		  								<div class="form-group">
											<input type="text" required  class="form-control" id="location" name="location">
		  								</div>		  
	   								</div>
                       			</td>
                			</tr>

                			<tr>
                				<td><label for="institutetype">Institute Type:</label></td>
                				<td>
                					<div class="form-inline manageleft">
			  							<div class="form-group">
											<input type="text" required  class="form-control" id="institutetype" name="institutetype">
			  							</div>
									</div>	  
								</td>

                				<td style="padding-left:50px"><label for="dateofestablish">Date of Establishment:</label></td>
                				<td>
                					<div class="form-inline manageright">
		  								<div class="form-group">
											<input type="text" required  class="form-control" id="dateofestablish" name="dateofestablish">
		  								</div>		  
	   								</div>
	   							</td>
                			</tr>

                			<tr>
                				<td><label for="weburl">Web URL:</label></td>
                				<td>
                					<div class="form-inline manageleft">
		  								<div class="form-group">
											<input type="text" required  class="form-control" id="weburl" name="weburl">
		  								</div>
		  							</div>
		  						</td>

                				<td style="padding-left:50px"><label for="lastdate">Last Date Update Date:</label></td>
                				<td>
                					<div class="form-inline manageright">
  										<div class="form-group">
											<input type="text" required  class="form-control" id="lastdate" name="lastdate">
		  								</div>		  
	   								</div>
	   							</td>
                			</tr>

                			<tr>
                				<td><label for="address">Address:</label></td>
                				<td>
									<div class="form-inline manageleft">
						  				<div class="form-group">
											<input type="text"required  class="form-control" id="address" name="address">
						  				</div>
							    	</div>
							    </td>

                				<td style="padding-left:50px" ><label for="state">State:</label></td>
                				<td>
	   								<div class="form-inline manageright">
	     								<div class="form-group">
											<input type="text" required  class="form-control" id="state" name="state">
		  								</div>		  
	   								</div>
								</td>
                			</tr>

                			<tr>
                				<td><label for="district">District:</label></td>
                				<td>
				   					<div class="form-inline manageleft">
					  					<div class="form-group">
											<input type="text" required  class="form-control" id="district" name="district">
					  					</div>
		  							</div>
		  						</td>

                				<td style="padding-left:50px" ><label for="contactno">Contact No:</label></td>
                				<td>
                					<div class="form-inline manageright">
		  								<div class="form-group">
											<input type="text" required  class="form-control" id="contactno" name="contactno">
		  								</div>		  
	   								</div>	
	   							</td>
                			</tr>

                			<tr>
                				<td><label for="pincode">PIN Code:</label></td>
                				<td>			
                					<div class="form-inline manageleft">
		  								<div class="form-group">
											<input type="text" required  class="form-control" id="pincode" name="pincode">
		  								</div>
		  							</div>
		  						</td>

                				<td style="padding-left:50px" ><label for="spiuname">SPIU Name:</label></td>
                				<td>		
                					<div class="form-inline manageright">	
	   									<div class="form-group">
											<input type="text" required  class="form-control" id="spiuname" name="spiuname">
		  								</div>		  
	   								</div>	
	   							</td>
                			</tr>

                			<tr>
                				<td><label for="contactemail">Contact Email:</label></td>
                				<td>
	   								<div class="form-inline manageleft">
		  								<div class="form-group">
											<input type="text" required class="form-control" id="contactemail" name="contactemail">
		  								</div>
		  							</div>
		  						</td>
                				<td style="padding-left:50px"><label for="status">Affiliation Status:</label></td>
                				<td>				
	    							<div class="form-inline manageright">	
	    								<div class="form-group">
											<input type="text" required  class="form-control" id="status" name="status">
		  								</div>		  
	   								</div>	
                          		</td>
                			</tr>
                  </table>





                                        	<input type="submit" class="btn btn-sm btn-primary" name="addcollegedata" value = "Submit">
					</div>
                                        </form>


</body>
</html>