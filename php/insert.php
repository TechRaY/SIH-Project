
<?php
include 'connect.php';
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$Trade_Code = $_POST['tradecode'];
$Trade_Name = $_POST['tradename'];
$Duration = $_POST['duration'];
$Shift = $_POST['shift'];
$Seats_Count = $_POST['seatscount'];
if($tradecode !=''||$tradename !=''){
//Insert Query of SQL
$query = mysql_query("insert into courseinfo(Trade_Code, Trade_Name, Duration, Shift,Seats_Count) values ('$Trade_Code', '$Trade_Name', '$Duration', '$Shift', '$Seats_Count')");
echo "<br/><br/><span>Data Inserted successfully...!!</span>";
}
else{
echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
}
}
//mysql_close($connection); // Closing Connection with Server
?>

