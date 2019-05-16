<html>
<body>
  <form action="login.html">
    <input type="submit" value="Logout"/>
  </form>
</body>
</html>
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="login";
$name=$_POST["name"];
$pass=$_POST["pass"];
$Role=$_POST["Role"];
//echo "$name ".$pass;
session_start();
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
  die("connection failed:".$conn->connect_error);
}
else {
  //echo "connect created successfully";
}
if($Role!="Client")
{
$sql="SELECT role from log1 where Username='$name' and Password='$pass'";
$result=$conn->query($sql);
if($result->num_rows>0)
{
  while($row=$result->fetch_assoc())
  {
    if($row["role"]=='Project Manager')
    {
      echo "<spam style=\"font-family:calibra\">Welcome,  </spam>";
      echo "<b>".$row["role"]."</b> <br><br><a href=\"projectmanager.php\">Click here access your page</a>";
    }
    else if($row["role"]=='Developer')
    {
      //session_start();
      $_SESSION['name']=$name;
      echo "<a href=\"developer.php\">Click here to Access your page</a>";
    }
  }
}
else {
  die(header("location:login.html?loginFailed=true&reason=password"));
}
}
else {
  $sql="SELECT pname FROM Client where name='$name'";
  $result=$conn->query($sql);
  if($result->num_rows>0)
  {
    $_SESSION['name']=$_POST['name'];
    echo "Welcome, Client <a href=\"Client.php\"> click here to access your page</a>";
  }
  else {
    $rname="Project Manager";
    $sql="SELECT emailid FROM log1 where role='$rname'";
    $result=$conn->query($sql);
    if($result->num_rows>0)
    {
      while($row=$result->fetch_assoc())
      {
      echo "Your hasn't been created yet Consult your Project Manager whose email is ".$row["emailid"];
      }
    }
  }
}
$conn->close();
?>
