<?php

  if(isset($_POST["loginsubmit"]))
  {
	  
 require_once("db.php");

 $username=$_POST["username"]; 
 //$salt=crypt($_POST["pwd"]);

 $password=$_POST["pwd"];
 
 echo $username;
 
 
 //echo $salt;
 
 /*                                                                                for entry into database
 $sql="Insert into login values('$username','$salt')";
 
 $result=mysqli_query($con,$sql);
 
  if($result==1)
  {
	  echo "success";
  }
  else
  {
	  echo "shit";
  }
 
 */
 
  $sql="Select salt from login where username=".$username;
  $result=mysqli_query($con,$sql);
  
  $password = crypt($password, $result["salt"]);
 
 
    if(hash_equals($result["salt"], $password))
	{
			echo "hi";
	}
    else
    {
		  echo "Incorrect password" ;
	}
 
 }
 else
 {
	 header("Location:../html/404.html");
 }	 
	 
	 

?>