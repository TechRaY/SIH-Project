<?php
include('header.php');
session_start();
$id = $_GET['var'];
$q = mysql_query("select * from collegerating where College_Code = '$id'");
$row = mysql_fetch_array($q);

if(isset($_POST['editrating']))
{
 echo "hello"; 
$A25 = $_POST['A25'];
$C110 = $_POST['C110'];
$B215 = $_POST['B215'];
$A20 = $_POST['A20'];
$C25 = $_POST['C25'];
$B210 = $_POST['B210'];
$C110_2 = $_POST['C110_2'];
$query = "update collegerating set 'A_25'='$A25','C1_10'='$C110','B2_15' = '$B215',
'A_20' = '$A20','C2_5' = '$C25','B2_10' = '$B210','C1_10(1)' = '$C110_2' where College_Code = '$id'";
if(mysql_query($query)){
echo "<script>alert('Changes Saved');
         	window.location='edit.php'
	        </script>";
}
}
?>

<html>
<head>

<body>



<form class="form-horizontal">
<br>
          <div class="form-group">
            <label class="col-sm-3 control-label" for="A25">Qualified Full Time Principal A(25):</label>
              <div class="col-sm-3"><input type="text" required value="<?php echo $row ['A_25']; ?>" id="A25" name="A25">
          </div></div>

          <div class="form-group">
            <label class="col-sm-3 control-label" for="C110">Overall Upkeep and Hygienic-C1(10):</label>
              <div class="col-sm-3"><input type="text" required value="<?php echo $row ['C1_10']; ?>" id="C110" name = "C110">
          </div> </div>

          <div class="form-group">
            <label class="col-sm-3 control-label" for="B215">Safety equipment B2-(15):</label>
              <div class="col-sm-3"><input type="text" required value="<?php echo $row ['B2_15']; ?>" id="B215" name = "B215">
          </div> </div>

          <div class="form-group">
            <label class="col-sm-3 control-label" for="A20">Power-A(20):</label>
              <div class="col-sm-3"><input type="text" required value="<?php echo $row ['A_20']; ?>" id="A20" name = "A20">
          </div> </div>

          <div class="form-group">
            <label class="col-sm-3 control-label" for="C25">Generator Power Back-C2(5):</label>
              <div class="col-sm-3"><input type="text" required value="<?php echo $row ['C2_5']; ?>" id="C25" name=  "C25">
          </div> </div>

          <div class="form-group">
            <label class="col-sm-3 control-label" for="B210">Timely Record Maintenance-B2(10):</label>
              <div class="col-sm-3"><input type="text" required value="<?php echo $row ['B2_10']; ?>" id="B210" name = "B210">
          </div> </div>

          <div class="form-group">
            <label class="col-sm-3 control-label" for="C110_2">No. of total womens trainees-C1(10):</label>
              <div class="col-sm-3"><input type="text" required value="<?php echo $row ['C1_10(1)']; ?>" id="C110_2" name = "C110_2">
          </div> </div>

          <div class="form-group">
     <label class="col-sm-3 control-label">&nbsp;</label>
        <div class="col-sm-6">
             <input type="submit" name="editrating" class="btn btn-sm btn-primary" value="Submit">
        </div>
  </div>
        </form>

</body>
</head>
</html>