<?php
include('header.php');
session_start();
$id = $_GET['num'];
$coursename = $_GET['course'];
$query = mysql_query("select * from courseinfo where Trade_Name = '$coursename' and ITI_Code='$id'");
$q = "select Trade_Code from courseinfo where Trade_Name = '$coursename'";
$ans = mysql_query($q);
$ansrow = mysql_fetch_assoc($ans);
$courseid = $ansrow['Trade_Code'];
$query3 = mysql_query("select * form courserating where College_Id= '$id' and Course_Id='$courseid'");
$row = mysql_fetch_array($query);
$row3 = @mysql_fetch_array($query3);
echo "$row3";
if(isset($_POST['editcourse']))
{
$tradecode = $_POST['tradecode'];
$duration = $_POST['duration'];
$seatscount = $_POST['seatscount'];
$tradename = $_POST['tradename'];
$shift = $_POST['shift'];
$C1_10 = $_POST['C1(10)'];
$C2_5 = $_POST['C2(5)'];
$B1_20 = $_POST['B1(20)'];
$A_20 = $_POST['A20'];
$A_25 = $_POST['A(25)'];
$B2_15 = $_POST['B2(15)'];
$C1_10_1 = $_POST['C1(10)_1'];
$B2_15_1 = $_POST['B2(15)_1'];

$query1 = "update courseinfo set Trade_Code = '$tradecode',
  Duration = '$duration', Shift = '$shift', Seats_Count= '$seatscount' where Trade_Name = '$tradename'"  ;
$query2 = "update courserating set College_Id = '$id' ,TC1_10 = '$C1_10',TC2_5 = '$C2_5'
       TB1_20 = '$B1_20',TA_25 = '$A_25',TB2_15 = '$B2_15',TC1_10(1) = '$C1_10_1',TB2_15(1) = '$B2_15_1' where Course_Id = '$tradename'" ;
 if(mysql_query($query1) && mysql($query2)){
  echo "<script>alert('Changes Saved');
         	window.location='coursesinfo.php'
	        </script>";

 }else"Not Inserted" ;
}
?>
 <html>
<body>
<form class="form-horizontal" action="" method="post">
  <div class="form-group">
						<label class="col-sm-3 control-label" for="tradecode">Trade Code:</label>
				<div class="col-sm-3"> <input type="text" required  class="form-control" value="<?php echo $row ['Trade_Code']; ?>" id="tradecode" name="tradecode">
						</div></div>

  <div class="form-group">
						<label class="col-sm-3 control-label" for="duration">Duration:</label>
			  	<div class="col-sm-3"><input type="text" required  class="form-control" value="<?php echo $row ['Duration']; ?>" id="duration" name="duration">
						</div></div>
				
  <div class="form-group">
						<label class="col-sm-3 control-label" for="seatscount">Seats Count:</label>
				<div class="col-sm-3"><input type="text" required  class="form-control" value="<?php echo $row ['Seats_Count']; ?>" id="seatscount" name="seatscount">
						</div></div>

  <div class="form-group">
						<label class="col-sm-3 control-label" for="tradename">Trade Name:</label>
				<div class="col-sm-3"><input type= "text" required  class="form-control" value="<?php echo $row ['Trade_Name']; ?>" id="tradename" name="tradename">
						</div> </div>

  <div class="form-group">
			<label  class="col-sm-3 control-label" for="shift">Shift:</label>
			<div class="col-sm-3">		    <input type="text" required  class="form-control" value="<?php echo $row ['Shift']; ?>" id="shift" name="shift">
						</div></div>
						
<h3>Rating Info</h3>
<div class="form-group">
            <label class="col-sm-3 control-label" for="C1(10)">Space-C1(10):</label>
              <div class="col-sm-3"><input type="text" required value="<?php echo $row3 ['TC1_10']; ?>" id="C1(10)" name="C1(10)" >
          </div></div>

          <div class="form-group">
            <label class="col-sm-3 control-label" for="C2(5)">Tools and equipments-C2(5):</label>
              <div class="col-sm-3"><input type="text" required value="<?php echo $row3 ['TC2_5']; ?>" id="C2(5)" name = "C2(5)">
          </div></div>

          <div class="form-group">
            <label class="col-sm-3 control-label" for="B1(20)">Machines-B1(20):</label>
              <div class="col-sm-3"><input type="text" required value="<?php echo $row3 ['TB1_20']; ?>" id="B1(20)" name = "B1(20)">
          </div></div>

          <div class="form-group">
            <label class="col-sm-3 control-label" for="A20">Power-A(20):</label>
              <div class="col-sm-3"><input type="text" required value="<?php echo $row3 ['TA_20']; ?>" id="A20" name = "A20">
          </div></div>

          <div class="form-group">
            <label class="col-sm-3 control-label" for="A(25)">Adequecy of qualified staff-A(25):</label>
              <div class="col-sm-3"><input type="text" required value="<?php echo $row3 ['TA_25']; ?>" id="A(25)" name=  "A(25)">
          </div></div>

          <div class="form-group">
            <label class="col-sm-3 control-label" for="B2(15)">Practical conductor for students B2(15):</label>
              <div class="col-sm-3"><input type="text" required value="<?php echo $row3 ['TB2_15']; ?>" id="B2(15)" name = "B2(15)">
          </div></div>

          <div class="form-group">
            <label class="col-sm-3 control-label" for="C1(10)_1">Students Pass out-C1(10):</label>
              <div class="col-sm-3"><input type="text" required value="<?php echo $row3 ['TC1_10(1)']; ?>" id="C1(10)_1" name = "C1(10)_1">
          </div></div>

          <div class="form-group">
            <label class="col-sm-3 control-label" for="B2(15)_1">Students Employability-B2(15):</label>
              <div class="col-sm-3"><input type="text" required value="<?php echo $row3 ['TB2_15(1)']; ?>" id="B2(15)_1" name = "B2(15)_1">
          </div></div>


  <div class="form-group">
     <label class="col-sm-3 control-label">&nbsp;</label>
        <div class="col-sm-6">
             <input type="submit" name="editcourse" class="btn btn-sm btn-primary" value="Submit">
        </div>
  </div>
</form>
</body>
</html>