<?php
include('header.php');
session_start();
         $search = $_POST['search'];
         if(isset($_POST['searchquery'])){
         $sql = "select * from collegeinfo where ITI_Name like '%$search%'";
         }
         else{
         $sql = "select * from collegeinfo";
         }
?>
<html>
<head>

                                      <!-- College Details -->

<div class="container">
  <h2>College List</h2><br><br>

  <table class="table">
    <tbody>
      <tr>
      <?php
         $result = mysql_query($sql);
         $number = 1;
         while($fet = mysql_fetch_array($result)) {
            echo"<td>".$number."</td>";
            echo'<td><a href ="collegeinfo.php?info='.$fet['ITI_Code'].'">'.$fet['ITI_Name'].'</td>';
            echo '<td>
                  <a href="edit.php?id='.$fet['ITI_Code'].'" class="btn btn-primary btn-sm" ><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
                  <a href="delete.php?id='.$fet['ITI_Code'].'" onclick="return confirm(\'Are you sure you want to delete '.$fet['ITI_Code'].'?\')" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
                  </td>';
            echo"</tr>";
         $number++;
           }
        ?>

    </tbody>
  </table>
</div>


</body>
</html>