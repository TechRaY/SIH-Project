<?php
include('conn.php');
session_start();
if(isset($_GET['num']))
{
$id=$_GET['num'];
$coursename = $_GET['course'];
$query=mysql_query("delete from courseinfo where Trade_Name = '$coursename' and ITI_Code='$id' ");
if($query)
{
header('location:coursesinfo.php');
}
else{
echo "Not Inserted";

}
}
?>