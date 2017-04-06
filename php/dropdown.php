	
<?php
include('connect.php');

$query = "SELECT Trade_Name FROM courseinfo";
$result = mysql_query ($query);
echo "<select name='dropdown' value=''><option>Select Courses Here</option>";
while($r = mysql_fetch_array($result)) {
  echo "<option name=".$r['Trade_Name'].">".$r['Trade_Name']."</option>"; 
}
echo "</select>";



?>