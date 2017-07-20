<?php
session_start();
if(!$_SESSION["username"]){
header("location: log.php");
}
$db_hostname = 'localhost';
$db_username = 'root';
$db_password = '';
$db_database = 'sih';
$row1="sno";
$row2="name";
$row3="email-id";
$row4="password";
// Database Connection String
$con = mysqli_connect($db_hostname,$db_username,$db_password);
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysqli_select_db($con,$db_database);
?>


<?php
if (!empty($_REQUEST['term'])) {

$term = mysqli_real_escape_string($con,$_REQUEST['term']);     

$sql = "SELECT * FROM emp WHERE name LIKE '%".$term."%'"; 
$r_query = mysqli_query($con,$sql); 
echo "<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>";
echo "<center>";

echo "<table border=1>";
echo "<tr><td>" .$row1 . "</td><td>" . $row2. "</td><td>" . $row3. "</td><td>" .$row4. "</td></tr>";
while ($row = mysqli_fetch_array($r_query)){  
	
	echo "<tr><td>" .$row['empno'] . "</td><td>" . $row['name']. "</td><td>" . $row['desig']. "</td><td>" .$row['salary']. "</td></tr>";
  echo "<br />";

 
}  
echo "</table>";
echo "</center>";
}
?>

<html>
    <head>
        <title></title>
    </head>
    <body>
		<center>
<form action="" method="post">  
Search: <input type="text" name="term"><br>  
<input type="submit" value="Submit">  
</form>  

<button onclick="location.href='index2.php'">Back</button>
<button onclick="location.href='logout.php'">logout</button>
</center>
	<script>
	onkeydown = function(e){
  if(e.ctrlKey && e.keyCode == 'C'.charCodeAt(0)){
    e.preventDefault();  
  }
  else if(e.ctrlKey && e.keyCode == 'S'.charCodeAt(0)){
    e.preventDefault();  
  }
    else if(e.ctrlKey && e.keyCode == 'A'.charCodeAt(0)){
    e.preventDefault(); 
}
  }
document.oncontextmenu = document.body.oncontextmenu = function() {return false;}
    document.onkeypress = function (event) {
        event = (event || window.event);
        if (event.keyCode == 123) {
           //alert('No F-12');
            return false;
        }
    }
    document.onmousedown = function (event) {
        event = (event || window.event);
        if (event.keyCode == 123) {
            //alert('No F-keys');
            return false;
        }
    }
document.onkeydown = function (event) {
        event = (event || window.event);
        if (event.keyCode == 123) {
            //alert('No F-keys');
            return false;
        }
    }
</script>
    </body>
</html>
