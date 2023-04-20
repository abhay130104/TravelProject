<?php

$con = mysqli_connect('localhost', 'root',"","travel" );
if(!($con)){
	echo "no connection";
}
else{

if(isset($_POST['adminBt'])){
    $id = $_POST['id'];
	$username = $_POST['user'];
	$password = $_POST['pass'];

	$sql = " select * from  admin_detail where ID='$id' and name = '$username' and password='$password' ";
	$query = mysqli_query($con,$sql);

	$row = mysqli_num_rows($query);
		if($row == 1){
			echo "login successful";
			header('location:adminpage.php');
		}else{
			echo "login failed";
			header('location:Admin.php');
		}
    }
}
?>