<?php include 'database.php'; 
// create a variable
$adm_id=$_POST['adm_id'];
$adm_name=$_POST['adm_name'];
$adm_mob=$_POST['adm_mob'];
$adm_mail_id=$_POST['adm_mail_id'];
$adm_pass=$_POST['adm_pass'];

$regname="/^[a-zA-Z ]*$/";
$regmob="/^\d{10}$/";

//Execute the query
if(empty($adm_name) || empty($adm_mob) || empty($adm_mail_id) || empty($adm_pass))
	{
		$status = "Empty field are not allowed";
        header("location: add_administrator.php?status=".$status);
	}	
	elseif(!preg_match($regname,$adm_name)){
		$status = "Only letters and white space allowed";
        header("location: add_administrator.php?status=".$status);
	}
	elseif(!preg_match($regmob,$adm_mob)){
		$status = "Enter valid Mobile Number";
        header("location: add_administrator.php?status=".$status);
	}
	elseif(!preg_match('/^[_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/',$adm_mail_id)){
		$status = "Enter valid Email Id.";
        header("location: add_administrator.php?status=".$status);
	}
	else{
		mysqli_query($con,"INSERT INTO admin (adm_id,adm_name,adm_mob,adm_mail_id,adm_pass) VALUES ('$adm_id','$adm_name','$adm_mob','$adm_mail_id','$adm_pass')");
		if(mysqli_affected_rows($con) > 0){
	$status = "New Admin added Sucessfully";	
    header("location: add_administrator.php?status=".$status);
	} else {
	$status = "Error in adding New Admin";
    header("location: add_administrator.php?status=".$status);
	}
}
?>


