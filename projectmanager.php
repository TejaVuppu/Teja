<html>
<style>
.button{
  background-color: white;
  border: 2px solid #008CBA;
  color: black;
  width: 15%;
  padding: 16px 42px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  border-radius: 12px;
}

.button:hover {
  background-color: #008CBA;
  color: white;
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}

</style>
<body>
    <form action="login.html">
      <input type="submit" value="Logout"/>
    </form>
  <form  method="post">
  <pre>
    <input type="submit"  class="button" value="Create Project" formaction='createproject.html'/><br/>
    <input type="submit"  class="button" value="Assign Project" formaction='assignproject.php'/><br/>
    <input type="submit"  class="button" value="Monitor Project" formaction='monitorproject.html'/><br/>
    <input type="submit"   class="button" value="Create Account"  formaction='option.html'/><br/>
    <input type="submit"   class="button" value="View  Issues" formaction="viewissue.php"/><br/>
	</pre>
  </form>
</body>
