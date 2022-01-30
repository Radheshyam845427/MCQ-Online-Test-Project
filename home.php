<?php
 session_start();
 if(!isset($_SESSION['username']))
   header('location:adminlogin.php');
 if($_SESSION['username']=='admin')
   header('location:adminhome.php');
?>
<html>
 <head>
  <title>Home</title>
  <link rel="stylesheet" type="text/css" href="./css/layout1.css" />
  <link rel="stylesheet" type="text/css" href="./css/theme.css" />
 </head>
 <body>
  <div id="header">
   <h1>Online Testing</h1>
   <h2 id="hello"> Hello,<?php echo $_SESSION['username']; ?>!</h2>
  <!-- </div>
  <div id="nav"> -->
    <ul>
  <li> <a href="logout.php">Logout</a></li>  
  <li> <a href="myaccount.php">My Account</a></li>
  <li> <a href="testlist.php">List of Test Papers</a></li>
</ul>
  </div>
  <div style="text-align: center; background-color: lightgrey; width: 1200px;
    border: 15px solid green; padding: 50px; margin: 20px;"><!-- id="section"  style="text-align: center;"-->
  <h1>Home</h1>
  <table cellspacing="50px">
	 <tr>
   <td><a href="myaccount.php"><img id="myaccountimage" src="./images/myaccountimage.jpg" style="object-fit:cover; border:2px solid olive;width:100px;height:100px;"/><br/>My Account</a></td>
	  <td><a href="testlist.php"><img id="testpaperslistimage" src="./images/testpaperslistimage.webp" style="object-fit:cover; border:2px solid olive;height:100px;width:100px;"/><br/>Test Papers List</a></td>
	 </tr>
   </table>
    </div>  
 </body>
</html>