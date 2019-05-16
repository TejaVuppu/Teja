<html>
<head>
  <style>
  body{background-color: black;}
  p{
      font-size: 25px;
      color:white;
      font-family:Times New Roman;}
    </style>
</head>
<body>
    <form action="login.html">
      <input type="submit" value="Logout"/>
    </form>
  <p>
<?php
$servername="localhost";
$user="root";
$pass="";
$dbname="login";
$pname=$_POST["pname"];
$conn=new mysqli($servername,$user,$pass,$dbname);
$sql="SELECT status,dname FROM projects where pname='$pname'";
$result=$conn->query($sql);
if($result->num_rows>0)
{
  while($row=$result->fetch_assoc())
  {
    echo "$pname is under ";
    echo $row["status"]." state which is assigned to ".$row["dname"];
  }
}
 ?>
</p>
</body>
</html>
