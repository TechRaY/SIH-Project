<?php
include('header.php');
session_start();
?>

<html>
<head>

                                   <!-- Edit College details-->


<?php
     $id=$_GET['id'];
     $query = mysql_query("Select * from collegeinfo where ITI_Code = '$id'");
     $row = mysql_fetch_array($query);
     if(isset($_POST['savechanges']))
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

$query1 = "update collegeinfo set ITI_Code = '$iticode',ITI_Name = '$itiname',Institute_Type = '$institutetype',Web_URL = '$weburl',Address = '$address',District = '$district',Pin_Code = '$pincode',Contact_Email = '$contactemail',Display_Name = '$displayname',Location = '$location',Date_of_Establishment = '$dateofestablish',
Last_Date_Update_Date = '$lastdate',State = '$state',Contact_Email = '$contactemail',SPIU_Name = '$spiuname',ITI_Code = '$iticode', Affiliation_Status = '$status' where ITI_Code = '$id' ";

	if(mysql_query($query1)){
echo "<script>alert('Changes Saved');
         	window.location='index.php'
	        </script>";
	}	
	else{
		echo"Not Inserted";
	}
}

?>
                                      <!-- Edit Form-->


<a href = "coursesinfo.php?var=<?php echo "$id" ?>"><input type="submit" class="btn btn-sm btn-primary" name="courses" value = "Courses"></a>
<a href = "ratinginfo.php?var=<?php echo "$id" ?>"><input type="submit" class="btn btn-sm btn-primary" name="editrating" value = "Rating Info"></a>
<br><br>
<form action="" method="POST" id="addpage" >

                	<div class="col-md-5">  

                		<table>
                			<tr>
                				<td><label for="iticode">ITI Code:</label></td>
                				<td>
                					<div class="form-inline manageleft">
						  				<div class="form-group" align="left">
											<input type="text" required  class="form-control" value="<?php echo $row ['ITI_Code']; ?>" id="iticode" name="iticode">
						  				</div>
					  				</div>
					  			</td>

                				<td style="padding-left:50px"><label align="right" for="displayname">Display Name:</label></td>
                				<td>
                					<div class="form-inline manageright">
		  								<div class="form-group">
											<input type="text" required  class="form-control" value="<?php echo $row ['Display_Name']; ?>" id="displayname" name="displayname">
	 									</div>		  
     								</div>
     							</td>
                			</tr>

                			<tr>
                				<td><label for="itiname">ITI Name:</label></td>
                				<td>	
                					<div class="form-inline manageleft">
			  							<div class="form-group">	
											<input type="text" required class="form-control" value="<?php echo $row ['ITI_Name']; ?>" id="itiname" name="itiname">
			  							</div>
		  							</div>
		  						</td>
                				<td style="padding-left:50px" ><label for="location">Location:</label></td>
                				<td>					
                					<div class="form-inline manageright">
		  								<div class="form-group">
											<input type="text" required  class="form-control" value="<?php echo $row ['Location']; ?>" id="location" name="location">
		  								</div>		  
	   								</div>
                       			</td>
                			</tr>

                			<tr>
                				<td><label for="institutetype">Institute Type:</label></td>
                				<td>
                					<div class="form-inline manageleft">
			  							<div class="form-group">
											<input type="text" required  class="form-control" value="<?php echo $row ['Institute_Type']; ?>" id="institutetype" name="institutetype">
			  							</div>
									</div>	  
								</td>

                				<td style="padding-left:50px"><label for="dateofestablish">Date of Establishment:</label></td>
                				<td>
                					<div class="form-inline manageright">
		  								<div class="form-group">
											<input type="text" required  class="form-control" value="<?php echo $row ['Date_of_Establishment']; ?>" id="dateofestablish" name="dateofestablish">
		  								</div>		  
	   								</div>
	   							</td>
                			</tr>

                			<tr>
                				<td><label for="weburl">Web URL:</label></td>
                				<td>
                					<div class="form-inline manageleft">
		  								<div class="form-group">
											<input type="text" required  class="form-control" value="<?php echo $row ['Web_URL']; ?>" id="weburl" name="weburl">
		  								</div>
		  							</div>
		  						</td>

                				<td style="padding-left:50px"><label for="lastdate">Last Date Update Date:</label></td>
                				<td>
                					<div class="form-inline manageright">
  										<div class="form-group">
											<input type="text" required  class="form-control" value="<?php echo $row ['Last_Date_Update_Date']; ?>" id="lastdate" name="lastdate">
		  								</div>		  
	   								</div>
	   							</td>
                			</tr>

                			<tr>
                				<td><label for="address">Address:</label></td>
                				<td>
									<div class="form-inline manageleft">
						  				<div class="form-group">
											<input type="text"required  class="form-control" value="<?php echo $row ['Address']; ?>" id="address" name="address">
						  				</div>
							    	</div>
							    </td>

                				<td style="padding-left:50px" ><label for="state">State:</label></td>
                				<td>
	   								<div class="form-inline manageright">
	     								<div class="form-group">
											<input type="text" required  class="form-control" value="<?php echo $row ['State']; ?>" id="state" name="state">
		  								</div>		  
	   								</div>
								</td>
                			</tr>

                			<tr>
                				<td><label for="district">District:</label></td>
                				<td>
				   					<div class="form-inline manageleft">
					  					<div class="form-group">
											<input type="text" required  class="form-control" value="<?php echo $row ['District']; ?>" id="district" name="district">
					  					</div>
		  							</div>
		  						</td>

                				<td style="padding-left:50px" ><label for="contactno">Contact No:</label></td>
                				<td>
                					<div class="form-inline manageright">
		  								<div class="form-group">
											<input type="text" required  class="form-control" value="<?php echo $row ['Contact_Ph_No']; ?>" id="contactno" name="contactno">
		  								</div>		  
	   								</div>	
	   							</td>
                			</tr>

                			<tr>
                				<td><label for="pincode">PIN Code:</label></td>
                				<td>			
                					<div class="form-inline manageleft">
		  								<div class="form-group">
											<input type="text" required  class="form-control" value="<?php echo $row ['Pin_Code']; ?>" id="pincode" name="pincode">
		  								</div>
		  							</div>
		  						</td>

                				<td style="padding-left:50px" ><label for="spiuname">SPIU Name:</label></td>
                				<td>		
                					<div class="form-inline manageright">	
	   									<div class="form-group">
											<input type="text" required  class="form-control" value="<?php echo $row ['SPIU_Name']; ?>" id="spiuname" name="spiuname">
		  								</div>		  
	   								</div>	
	   							</td>
                			</tr>

                			<tr>
                				<td><label for="contactemail">Contact Email:</label></td>
                				<td>
	   								<div class="form-inline manageleft">
		  								<div class="form-group">
											<input type="text" required class="form-control" value="<?php echo $row ['Contact_Email']; ?>" id="contactemail" name="contactemail">
		  								</div>
		  							</div>
		  						</td>
                				<td style="padding-left:50px"><label for="status">Affiliation Status:</label></td>
                				<td>				
	    							<div class="form-inline manageright">	
	    								<div class="form-group">
											<input type="text" required  class="form-control" value="<?php echo $row ['Affiliation_Status']; ?>" id="status" name="status">
		  								</div>		  
	   								</div>	
                          		</td>
                			</tr>
                  </table>





                                        	<input type="submit" class="btn btn-sm btn-primary" name="savechanges" value = "Update College Info">
					</div>
                                        </form>
</body>
</html>