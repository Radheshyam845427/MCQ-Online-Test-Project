<?php
 session_start();
 if(!isset($_SESSION['username']))
   header('location:adminlogin.php');
 if($_SESSION['username']!='admin')
     header('location:index.html');
?>
<html>
 <head>
  <title> Admin Home</title>
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
   <li> <a href="managetests.php">Manage Tests</a></li>
   <li><a href="managequestions.php">Manage Questions</a></li>
</ul>
  </div>
  <div style="text-align: center; background-color: lightgrey; width: 1200px;
    border: 15px solid green; padding: 50px; margin: 20px;"><!-- id="section"  style="text-align: center;"-->
  <h1>Control Pannel</h1>
   <table cellspacing="50px">
	 <tr>
   <td><a href="managetests.php"><img id="testimage" src="./images/testimage.png" style="object-fit:cover; border:2px solid olive;width:100px;height:100px;"/><br/>Manage Test</a></td>
	  <td><a href="managequestions.php"><img id="questionsimage" src="./images/questionsimage.jpg" style="object-fit:cover; border:2px solid olive;height:100px;width:100px;"/><br/>Manage Questions</a></td>
	 </tr>
   </table>
    </div>  
 </body>
</html>