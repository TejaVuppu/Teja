<html>
<body>
    <form action="login.html">
      <input type="submit" value="Logout"/>
    </form>
  <form action='addproject.php' method="post">
    <b>Project Name:</b>  <input type="text" name="pname"/><br/>
    <b>Developer Name:</b><input type="text" name="dname"/><br/>
    <b>Status:</b>        <select name="status">
      <option name="stable">Stable</option>
      <option name="release">Release</option>
      <option name="Development">Development</option>
      <option name="Obselete">Obselete</option>
      </select><br/>
      <input type="submit" value="done"/>
  </form>
  </body>
  </html>
