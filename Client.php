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
$dbname="Login";
$conn=new mysqli($servername,$user,$pass,$dbname);
session_start();
$name=$_SESSION['name'];
$sql="SELECT pname from Client where name='$name'";
$result=$conn->query($sql);
if($result->num_rows>0)
{
  echo "Project :";
  while($row=$result->fetch_assoc())
  {
    $pname=$row["pname"];
    echo $row["pname"]."\n";
  }
}
$sql="SELECT status FROM projects where pname='$pname'";
$result=$conn->query($sql);
if($result->num_rows>0)
{
  while($row=$result->fetch_assoc())
  {
    if($row['status']=="Release")
    {
      echo "\n<pre>Your Project is completed <a href=\"reportissue.html\">click here</a> to report issues with project</pre>";
    }
    else {
      print "\nYour project is not completed.";
    }
  }
}
 ?>
