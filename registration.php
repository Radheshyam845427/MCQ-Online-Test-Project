<html>
 <head>
  <title> User Registration</title>
  <link rel="stylesheet" type="text/css" href="./css/layout1.css" />
  <script type="text/javascript" src="./js/registration.js" ></script>
 </head>
 <body>
  <div id="header">
   <h1>Online Testing</h1>
  <!-- </div>
  <div id="nav">   -->
     <ul>
  <li>  <a href="adminlogin.php">Admin Login</a></li>
  <li>  <a href="userlogin.php">User Login</a></li>
  <!-- <li>  <a href="registration.php">New User Registration</a></li> -->
</ul>
  </div>
  <div style="text-align: center; background-color: lightgrey; width: 1200px;
    border: 15px solid green; padding: 50px; margin: 20px;"><!-- id="section"  style="text-align: center;"-->
  <h1>New User Registration Form</h1>
  <form action="doRegistration.php" method="post">
   <table>
    <tr>
	 <td>Username</td>
	 <td><input type="text" name="username" onkeyup="checkname(this.value)"/><span id="spanmsg"></span></td>
	</tr>
	<tr>
	 <td>Password</td>
	 <td><input type="password" name="password" /></td>
	</tr>
	<tr>
	 <td></td>
	 <td><input id="submit" type="submit" value="Register" onclick="return uservalidate()"/></td>
	</tr>
   </table>
  </form>
   <div id="errormsg"></div>
  </div>
 </body>
</html>