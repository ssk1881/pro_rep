<?php
session_start();
if(!$_SESSION["username"]){
header("location: log.php");
}
$row1="empno";
$row2="name";
$row3="desig";
$id=$_SESSION["username"];
require "dbconn.php";


// Perform queries 
//mysqli_query($con,"INSERT INTO login (sno,name,email-id,password) 
//VALUES (anything,'anything','anything',anything)");
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
echo "<tr><td>" .$row1 . "</td><td>" . $row2. "</td><td>" . $row3. "</td></td>";
$result = mysqli_query($con,"SELECT * FROM emp where name='".$id."'");

while($row = mysqli_fetch_array($result))
{
  echo "<tr><td>" .$row['empno'] . "</td><td>" . $row['name']. "</td><td>" . $row['desig']. "</td></td>";
  echo "<br />";
  }
  
echo "</table>";
echo "</center>";
mysqli_close($con);

?>

<html>
<body>
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
	<center>
<button onclick="location.href='backend.php'">Search</button>
<button onclick="location.href='index2.php'">Back</button>
<button onclick="location.href='logout.php'">logout</button>
</center>
</body>
</html>
