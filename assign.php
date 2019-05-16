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
$dname=$_POST["dname"];
$pname=$_POST["pname"];
$sql="SELECT role FROM log1 where Username='$dname'";
$result=$conn->query($sql);
try{
if($result->num_rows>0)
{
  $row=$result->fetch_assoc();
  if($row["role"]=='Developer')
  {
$sql="UPDATE projects SET dname='$dname' where pname='$pname'";
$result=$conn->query($sql);
if($result>0)
echo "Project Assigned successfully";
else
  echo "updation error or project not exists";
}
  else {
      echo "He is not a developer to assign the project";
  }
}
else
{
      echo "His account hasn't been created yet <br>";
      echo "To create <a href=\"addAccount.html\">click here</a>";
}
}
catch(Exception $e)
{}
?>
