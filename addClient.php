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
$cname=$_POST["cname"];
$pass1=$_POST["password"];
$pname=$_POST["pname"];
$report="NULL";
$conn=new mysqli($servername,$user,$pass,$dbname);
$conn=new mysqli($servername,$user,$pass,$dbname);
$sql="CREATE TABLE Client(name VARCHAR(20),pname VARCHAR(40),password VARCHAR(20),reportissue VARCHAR(60))";
$result=$conn->query($sql);
if($result>0)
{
  echo "Table created successfully";
}
$sql="SELECT name from client where name='$cname'";
$result=$conn->query($sql);
if($result->num_rows>0)
{
  echo "Your account is already created.";
}
else {
$sql="INSERT INTO Client(name,pname,password,reportissue) VALUES('$cname','$pname','$pass1','$report')";
$result=$conn->query($sql);
if($result>0)
echo "Account added successfully";
else
echo "Insertion error";
}
?>
