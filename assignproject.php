<html>
<head>
<style>
.button{
  width:10%;
  background-color: #4CAF50;
  color: white;
  padding: 10px 25px;
  text-align: center;
  display: inline-block;
  font-size: 16px;
}
.button:hover{
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}

.text{
  width: 25%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
</style>
</head>
<body>
    <form action="login.html">
      <input type="submit" value="Logout"/>
    </form>
  <form action='assign.php' method="post">
    <h3>Project name:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" class="text" name="pname"/><br><br>
     Developer name:&nbsp&nbsp<input type="text" class="text" name="dname"/><br><br></h3>
     <input type="submit" class="button" value ="Assign"/>
   </form>
 </body>
 </html>
<?php
$servername="localhost";
$user="root";
$pass="";
$dbname="login";
$conn=new mysqli($servername,$user,$pass,$dbname);
$sql="select pname from projects where dname='NULL'";
$result=$conn->query($sql);
if($result->num_rows>0)
{
  while($row=$result->fetch_assoc())
  {
    echo "project :".$row["pname"]."<br>";
  }
}
 ?>
