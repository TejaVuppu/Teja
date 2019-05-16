<html>
<body>
  <form action="login.html">
    <input type="submit" value="Logout"/>
  </form>
</body>
</html>
<?php
$servername="localhost";
$user="root";
$pass="";
$dbname="login";
//$name=$_COOKIE['name'];
session_start();
$name=$_SESSION['name'];
$conn=new mysqli($servername,$user,$pass,$dbname);
$sql="SELECT pname FROM projects where dname='$name'";
$result=$conn->query($sql);
if($result->num_rows>0)
{
  $row=$result->fetch_assoc();
  echo "Project :".$row["pname"];
}
else {
    echo "You haven't been assigned a project yet";
}
 ?>
<html>
<body>
  <form action="updatestatus.html" method="POST">
    <input type="submit" value="Update Status"/>
  </form>
</body>
</html>
