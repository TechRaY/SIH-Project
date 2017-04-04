<?php


$con=mysqli_connect("localhost","root","","states") or die("could not connect to the database");



$s1=$_REQUEST["n"];



$select_query="select name from statename where name like '".$s1."%'";
$sql=mysqli_query($con,$select_query) or die (mysqli_error());
$s="";
$i=0;

while($row=mysqli_fetch_array($sql))
{
          
 

	$s=$s."<div class='live-outer'  id='".$i++."'>".$row['name']."</div>"	;

}


echo $s;



?>