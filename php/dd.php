<?php      
            
  include 'connect.php';          
$query="SELECT Trade_Name FROM courseinfo where ITI_Code='PU27000192'";

$result = mysql_query ($query);
echo "<select name=trade_name value=' '><option>Select Course</option>";


while($drop=mysql_fetch_array($result)){

//data stored in $drop
echo "<option value=$drop[Trade_Name]>$drop[Trade_Name] </option>";

}
echo "</select>";
// Close list box 
?>