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
$pname=$_POST["pname"];
$dname=$_POST["dname"];
$status=$_POST["status"];
//echo "pname is $pname  dname is $dname status is $status";
$sql="CREATE TABLE projects(pname VARCHAR(40),dname VARCHAR(20),status VARCHAR(20))";
if($conn->query($sql)===TRUE)
echo "Tabe created successfully";
$sql="SELECT dname FROM projects where pname='$pname'";
$result=$conn->query($sql);
if($result->num_rows>0)
echo "<br>Project is already created.</br>";
else{
$insert="INSERT INTO projects(pname,dname,status) VALUES('$pname','$dname','$status')";
$result=$conn->query($insert);
if($result>0)
{
  echo "project added successfully";
}
}
 ?>
