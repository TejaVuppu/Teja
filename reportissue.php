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
$issue=$_POST["issue"];
session_start();
$name=$_SESSION['name'];
$sql="UPDATE Client set reportissue='$issue' where name='$name'";
$result=$conn->query($sql);
if($result>0)
echo "Reported successfully";
else {
    echo "error";
}
?>
