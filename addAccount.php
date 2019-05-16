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
$username=$_POST["uname"];
$password=$_POST["pass"];
$role=$_POST["role"];
$email=$_POST["email"];
$conn=new mysqli($servername,$user,$pass,$dbname);
$sql="SELECT emailid from log1 where emailid='$email'";
$result=$conn->query($sql);
if($result->num_rows>0)
{
  echo "Your account is already created.";
}
else {
$sql="INSERT INTO log1(Username,Password,role,emailid) VALUES('$username','$password','$role','$email')";
$result=$conn->query($sql);
if($result>0)
echo "Account added successfully";
else
echo "Insertion error";
}
?>
