<?php 
	$db = "msd1";
	$user = "root";
	$password = "";
	$server = "localhost";

	$connection = mysqli_connect($server , $user , $password , $db);
	$query = "SELECT collegeinfo.*, courseinfo.Trade_Name, courseinfo.Trade_Code FROM collegeinfo join courseinfo  on collegeinfo.ITI_Code = courseinfo.ITI_Code ";


	$result = mysqli_query($connection,$query);
	$response = array();
	

	while(($row = mysqli_fetch_assoc($result))) {
		array_push($response,array("ITI_Code"=>$row["ITI_Code"],"Trade_Name"=>$row["Trade_Name"],"Display_Name"=> $row["Display_Name"],"ITI_Name"=>$row["ITI_Name"],"Location"=>$row["Location"],"Institute_Type"=>$row["Institute_Type"],"Date_of_Establishment"=>$row["Date_of_Establishment"],"Web_URL"=>$row["Web_URL"],"Last_Date_Update_Date"=>$row["Last_Date_Update_Date"],"Address"=>$row["Address"],"State"=>$row["State"],"District"=>$row["District"],"Contact_Ph_No"=>$row["Contact_Ph_No"],"Pin_Code"=>$row["Pin_Code"],"SPIU_Name"=>$row["SPIU_Name"],"Contact_Email"=>$row["Contact_Email"],"Affiliation_Status"=>$row["Affiliation_Status"],"Institute_Rating"=>$row["Institute_Rating"],));
	}
	echo (json_encode(array("server_response"=>$response)));
	mysqli_close($connection);
 ?>