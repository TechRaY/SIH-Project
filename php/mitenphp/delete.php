<?php
include('conn.php');
session_start();
if(isset($_GET['id']))
{
$id=$_GET['id'];
$query=mysql_query("delete from collegeinfo where ITI_Code='$id'");
if($query)
{
header('location:index.php');
}
}
?>
