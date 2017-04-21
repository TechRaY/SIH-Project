<?php
include('header.php');
session_start();
if(isset($_GET['info']))
{
$code=$_GET['info'];
$query=mysql_query("select * from collegeinfo where ITI_COde='$code'");
if($query)
{
$row = mysql_fetch_array($query);
$iticode = $row['ITI_Code'];
$itiname = $row['ITI_Name'];
$institutetype = $row['Institute_Type'];
$weburl = $row['Web_URL'];
$address = $row['Address'];
$district = $row['District'];
$pincode = $row['Pin_Code'];
$contactemail = $row['Contact_Email'];
$displayname = $row['Display_Name'];
$location = $row['Location'];
$dateofestablish = $row['Date_of_Establishment'];
$lastdate = $row['Last_Date_Update_Date'];
$state = $row['State'];
$contactno = $row['Contact_Ph_No'];
$spiuname = $row['SPIU_Name'];
$status = $row['Affiliation_Status'];
$rating = $row['Institute_Rating'];
}
$query1 = mysql_query("select Trade_Name from courseinfo where ITI_Code ='$code'");
if($query1){
$row1 = mysql_fetch_assoc($query1);
}
$query2 = mysql_query("select * from collegerating where College_Code ='$code'");
if($query2){
$row2 = mysql_fetch_array($query2);
$A_25 = $row2['A_25'];
$C1_10 = $row2['C1_10'];
$B2_15 = $row2['B2_15'];
$A_20 = $row2['A_20'];
$C2_5 = $row2['C2_5'];
$B2_10 = $row2['B2_10'];
$C1_10_1 = $row2['C1_10(1)'];
}
}
?>

<html>
<head>
<div class="container">
  <h3><?php echo"$itiname"?></h3><br>
  <h4>College Info</h4><br>

  <table class="table">
    <tbody>
      <tr><td>ITI_Code: <?php echo"$iticode"?></td> 
          <td>ITI_Name: <?php echo"$itiname"?></td>
      </tr>
      <tr><td>Institute_Type: <?php echo"$institutetype"?></td>
          <td>Web_URL: <?php echo"$weburl"?></td>
      </tr>
      <tr><td>Address: <?php echo"$address"?></td>
          <td>District: <?php echo"$district"?></td>
      </tr>
      <tr><td>Pin_Code: <?php echo"$pincode"?></td>
          <td>Contact_Email: <?php echo"$contactemail"?></td>
      </tr>
      <tr><td>Display_Name: <?php echo"$displayname"?></td>
          <td>Location: <?php echo"$location"?></td>
      </tr>
      <tr><td>Date_of_Establishment: <?php echo"$dateofestablish"?></td>
          <td>Last_Date_Update_Date: <?php echo"$lastdate"?></td>
      </tr>
      <tr><td>State: <?php echo"$state"?></td>
          <td>Contact_Ph_No: <?php echo"$contactno"?></td>
      </tr>
      <tr><td>SPIU_Name: <?php echo"$spiuname"?></td>
          <td>Affiliation_Status: <?php echo"$status"?></td>
      </tr>
      <tr><td>Rating: <?php echo"$rating"?></td>
      </tr>
    </tbody>
  </table>

  <h4>Courses Available</h4><br>
   <table class="table">
    <tbody>
      <tr>
   <?php
    while ($row1 = mysql_fetch_assoc($query1)) {
    echo "<td>";  
    echo $row1["Trade_Name"];
    echo "</td>";
    echo "</tr>";
    }?>
    </tbody>
  </table>
  

  
  <h4>Rating Info</h4><br>
  <table class="table">
    <tbody>
      <tr><td>Qualified Full Time Principal A(25):<?php echo"$A_25"?></td>
          <td>Overall Upkeep and Hygienic-C1(10):<?php echo"$C1_10"?></td>
      </tr>
      <tr><td>Safety equipment B2-(15):<?php echo"$B2_15"?></td>
          <td>Power-A(20):<?php echo"$A_20"?></td>
      </tr>
      <tr><td>Generator Power Back-C2(5):<?php echo"$C2_5"?></td>
          <td>Timely Record Maintenance-B2(10):<?php echo"$B2_10"?></td>
      </tr>
      <tr><td>No. of total womens trainees-C1(10):<?php echo"$C1_10_1"?></td>
      </tr>
    </tbody>
  </table>

</div>

</body>
</head>
</html>


