<?php
 session_start();
 if(!isset($_SESSION['username']))
     header('location:adminlogin.php');
 if($_SESSION['username']!='admin')
     header('location:index.html');
 
 
?>
<html>
 <head>
  <title> Create Question</title>
  <link rel="stylesheet" type="text/css" href="./css/layout1.css" />
  <link rel="stylesheet" type="text/css" href="./css/theme.css" />
  <script type="text/javascript" src="./js/questionform.js"></script>
 </head>
 <body>
  <div id="header">
   <h1>Online Testing</h1>
   <h2 id="hello"> Hello,<?php echo $_SESSION['username']; ?>!</h2>
  <!-- </div>
  <div id="nav"> -->
	<ul>    
    <li><a href="logout.php">Logout</a></li>  
   <li> <a href="adminhome.php">Back to Control Pannel</a></li>
   <li> <a href="managequestions.php">Back to Manage Questions</a></li>
</ul> 
   </div>
   <div style="text-align: center; background-color: lightgrey; width: 1200px;
    border: 15px solid green; padding: 50px; margin: 20px;"><!-- id="section"  style="text-align: center;"-->
  <h1>Control Pannel:Manage Questions:Create Question</h1>
  <form action="doCreateQuestion.php" method="post" >
  <table cellspacing="50px">
	 <tr>
	  <td>Question Statement:</td>
	  <td><textarea style="width:450px" name="que"></textarea></td>
	 </tr>
	 <tr>
	  <td>Option a</td>
	  <td><textarea style="width:450px" name="optiona"></textarea></td>
	 </tr>
	 <tr>
	  <td>Option b</td>
	  <td><textarea style="width:450px" name="optionb"></textarea></td>
	 </tr>
	 <tr>
	  <td>Option c</td>
	  <td><textarea style="width:450px" name="optionc"></textarea></td>
	 </tr>
	 <tr>
	  <td>Option d</td>
	  <td><textarea style="width:450px" name="optiond"></textarea></td>
	 </tr>
	 <tr>
	  <td>Correct Answer</td>
	  <td><input type="radio" name="ans" value="a" />a
	      <input type="radio" name="ans" value="b" />b
		  <input type="radio" name="ans" value="c" />c
		  <input type="radio" name="ans" value="d" />d</td>
	 </tr>
	 <tr>
	  <td>Subject</td>
	  <td><input type="text" name="subject" /></td>
	 </tr>
	 <tr>
	  <td></td>
	  <td><input type="submit" value="Create" onclick="return validateform()"/></td>
	 </tr>
   </table>
   <div id="errormsg"></div>
   </form>
    </div>  
 </body>
</html>