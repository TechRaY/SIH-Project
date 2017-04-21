<?php
include('header.php');
session_start();
$id = $_GET['var'];

$query = mysql_query("select Trade_Name from courseinfo where ITI_Code ='$id'");
if($query){
$row = mysql_fetch_assoc($query);
}
?>

<html>
<head>
<body>
<a href = "addcourse.php?var=<?php echo "$id" ?>"><input type="submit" class="btn btn-sm btn-primary" name="courses" value = "Add Course"></a>
<br>
<br>
<table class="table">
<thead>
    <tbody>
      <tr>
   <?php
    while ($row = mysql_fetch_assoc($query)) {
    echo "<td>";  
    echo $row["Trade_Name"];
    echo "</td>";
    echo '<td>
                  <a href="editcourse.php?num='.$id.'&course='.$row["Trade_Name"].'" class="btn btn-primary btn-sm" ><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
                  <a href="deletecourse.php?num='.$id.'&course='.$row["Trade_Name"].'" onclick="return confirm(\'Are you sure you want to delete '.$row['ITI_Code'].'?\')" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
                  </td>';
    echo "</tr>";
    }?>
    </tbody>
   </thead>
  </table>
</body>
</head>
</html>

