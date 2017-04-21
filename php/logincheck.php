<?php

require_once '../include/user.php';

$username = "";
$password = "";


if(isset($_POST['submit']))
{

if(isset($_POST['uname'])){
	$username = $_POST['uname'];
}
if(isset($_POST['psw'])){
    $password = $_POST['psw'];
}



$userObject = new User();


if(!empty($username) && !empty($password)){

  	$hashed_password = md5($password);
    $json_array = $userObject->loginUsers($username, $hashed_password);

    if($json_array['success']==1)
    {
        header("Location:../html/adminindex.php");
    }
    else
    {
        echo "<script>alert('Invalid Username Or Password');
        window.location = '../html/login.php';
        </script>";

    }

}

}
else{
  header("Location:../html/login.php");
}


?>
