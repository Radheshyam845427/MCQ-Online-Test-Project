<html>
 <head>
  <title> User Login</title>
  <link rel="stylesheet" type="text/css" href="./css/layout1.css" />
  <link rel="stylesheet" type="text/css" href="./css/theme.css" />
  <!--<link rel="stylesheet" type="text/css" href="./css/login.css" />-->
  <script type="text/javascript" src="./js/login.js"></script>
 </head>
 <body>
  <div id="header">
   <h1>Online Testing</h1>
   <h2 id="hello"></h2>
  <!-- </div>
  <div id="nav"> -->
   <ul>
<li>   <a href="adminlogin.php">Admin Login</a></li>
<!-- <li>  <a href="userlogin.php">User Login</a></li> -->
<li>   <a href="registration.php">New User Registration</a></li>
</ul>
  </div>
  <div style="text-align: center; background-color: lightgrey; width: 1200px;
    border: 15px solid green; padding: 50px; margin: 20px;"><!-- id="section"  style="text-align: center;"-->
  <h1>User Login</h1>
   <form action="uservalidation.php" method="post">
    <table>
	 <tr>
	  <td>Username</td>
	  <td><input type="text" name="username" placeholder="username"/></td>
	 </tr>
	 <tr>
	  <td>Password</td>
	  <td><input type="password" name="password" placeholder="password"/></td>
	 </tr>
	 <tr>
	  <td><a href="registration.php">new user</a></td>
	  <td><input type="submit" value="Login" onclick="return adminvalidate()"/><input type="reset"/></td>
	 </tr>
	</table>
   </form>
   <style>
     </style>   
   <div id="errormsg"></div>
  </div>
 </body>
</html>