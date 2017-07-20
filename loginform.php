<?php
session_start();

require "dbconn.php";
if(isset($_POST["login-submit"]))
{
	
	$id =$_POST["username"];
	$password=$_POST["password"];
	//echo "<script>alert($result)</script>";
		
$result=mysqli_query($con,"select name,password from login where name='".$id."' and password='".$password."'");
$res=mysqli_query($con,"select access from login where name='".$id."' and password='".$password."'");


// If the query completed without errors, fetch a result
if ($res) {
  $acc = mysqli_fetch_assoc($res);
 
}

	if (mysqli_num_rows($result)>0)

    	{	
    		$_SESSION["username"]=$_POST["username"];
    	if($acc['access']==3)
    	{	
		echo "<script>document.location='index5.php'</script>";	
		}
		else if($acc['access']==2)
		{
		echo "<script>document.location='index4.php'</script>";
	    }
	    else if($acc['access']==1)
	    {
			echo "<script>document.location='memdata.php'</script>";
		}
		
	}
	else
	echo "<script>alert('Invalid credentials!');document.location='log.php'</script>";


}
?>
