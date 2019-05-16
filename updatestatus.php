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
$conn=new mysqli($servername,$user,$pass,$dbname);
session_start();
$name=$_SESSION['name'];
$status=$_POST["status"];
$sql="UPDATE projects SET status='$status' where dname='$name'";
$result=$conn->query($sql);
if($result>0)
echo "Status updated successfully go back to <a href=\"developer.php\">developer page</a>";
else {
  echo "You have no access on other project";
}
 ?>
