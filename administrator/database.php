<?php
  define('HOST','localhost');
  define('USER','root');
  define('PASS','');
  define('DB','microdevice');
  $con = mysqli_connect(HOST,USER,PASS,DB);
     if(!$con){
 	  die('Could not connect: ');
    }

  
 //if(mysqli_connect_errno($con))
//{
//		echo 'Failed to connect';
//}
?>