<?php
 session_start();
 if(!isset($_SESSION['username']))
     header('location:adminlogin.php');
 if($_SESSION['username']!='admin')
     header('location:index.html');
   $con=mysqli_connect('localhost','root');
 mysqli_select_db($con,'onlinetestdb');
 $q="select * from question";
 $result=mysqli_query($con,$q);
 $row_count=mysqli_num_rows($result);
 
 
?>
<html>
 <head>
  <title> View Questions</title>
  <link rel="stylesheet" type="text/css" href="./css/layout1.css" />
  <link rel="stylesheet" type="text/css" href="./css/theme.css" />
  <!-- <link rel="stylesheet" type="text/css" href="./css/table.css" /> -->
  <link rel="stylesheet" type="text/css" href="./css/tablestyle.css" />
 </head>
 <body>
  <div id="header">
   <h1>Online Testing</h1>
   <h2 id="hello"> Hello,<?php echo $_SESSION['username']; ?>!</h2>
  <!-- </div>
  <div id="nav">  -->
     <ul>
  <li>  <a href="logout.php">Logout</a></li>  
  <li>  <a href="adminhome.php">Back to Control Pannel</a></li>
  <li>  <a href="managequestions.php">Back to Manage Questions</a></li>
</ul>
  </div>
  <div style="text-align: center;"> <!--id="section"  style="text-align: center;"-->
  <h1>All Questions</h1>
  <div id="tablediv"> 
  <table id="questiontable">
	 <tr id="headrow">
	  <th>S.No.</th>
	  <th>Question</th>
	  <th>option a</th>
	  <th>option b</th>
	  <th>option c</th>
	  <th>option d</th>
	  <th>Answer</th>
	  <th>Subject</th>
	 </tr>
<?php
	for($i=1;$i<=$row_count;$i++)
	{
	  $row=mysqli_fetch_array($result);
?>
	 <tr class="<?php if($i%2==0) echo "odd"; ?>">
	  <td><?php echo $row['queid']; ?></th>
	  <td><?php echo $row['que']; ?></td>
	  <td><?php echo $row['optiona']; ?></td>
	  <td><?php echo $row['optionb']; ?></td>
	  <td><?php echo $row['optionc']; ?></td>
	  <td><?php echo $row['optiond']; ?></td>
	  <td><?php echo $row['ans']; ?></td>
	  <td><?php echo $row['subject'];?></td>
	 </tr>
<?php } ?>
   </table>
   </div>
    </div>  
 </body>
</html>