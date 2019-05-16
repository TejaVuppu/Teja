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
$count=0;
$conn=new mysqli($servername,$user,$pass,$dbname);
$sql="SELECT name,pname,reportissue FROM Client";
$result=$conn->query($sql);
if($result->num_rows>0)
{
  while($row=$result->fetch_assoc())
  {
    if($row["reportissue"]!="NULL")
    {
    echo "Client Name: ".$row["name"]."<br>"."Project:".$row["pname"]."<br>Issue:".$row["reportissue"]."<br>";
    $pname=$row["pname"];
    $sql="SELECT dname from projects where pname='$pname'";
    $result=$conn->query($sql);
    if($result->num_rows>0)
    {
      while($row=$result->fetch_assoc())
      {
        echo "Developer for this Project is ".$row["dname"]."<br>";
      }
    }
    $count++;
    }
  }
}
if($count==0)
echo "No Issues Found";
 ?>
