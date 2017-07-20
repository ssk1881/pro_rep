<?php
session_start();
if(!$_SESSION["username"]){
header("location: log.php");
}
require "dbconn.php";
$id=$_SESSION["username"];
$res=mysqli_query($con,"select access from login where name='".$id."'");

if ($res) {
  $acc = mysqli_fetch_assoc($res);
 
		}	
		if($acc['access']==3)
    	{	
		echo "<script>document.location='ceodata.php'</script>";	
		}
		else if($acc['access']==2)
		{
		echo "<script>document.location='data.php'</script>";
	    }	
	    else if($acc['access']==1)
		{
		echo "<script>document.location='memdata.php'</script>";
	    }
	    else
	echo "<script>alert('not found');document.location='index2.php'</script>";		
	    
	    
	    ?>
