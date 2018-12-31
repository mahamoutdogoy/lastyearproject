
<!DOCTYPE HTML>
<html>
<head>
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Pooled Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

</head> 
<body>
<div class="page-container">
   <!--/content-inner-->
<div class="left-content">
<div class="mother-grid-inner">
<?php 
 session_start();
 if($_SESSION["studentid"]==true)
{
 include("connect.php");
 include("checkstud.php");
 include("header.php"); ?>

	<ol class="breadcrumb">
	                  <center><li class="breadcrumb-item"><h4><a href="">My Exam</a></h4></li></center>
            </ol>
<!--grid
 	<div class="validation-system">
 		
 		<div class="validation-form">
 	-->
  	    
<?php

include("connect.php");
$sql="SELECT * FROM examtbl WHERE deptname = '$my_department' AND catname = '$my_category'";;
$result = mysql_query($sql);
?>
<div class="agile-grids">
<div class="agile-tables">
<div class="w3l-table-info">
<h2>List of Examination</h2>
<table width="100%" id="table">
<thead>
<tr>
               <th align="left">Exam Name</th>
               <th align="left">Subject</th>
			   <th align="left">Deadline</th>
			   <th align="left">Status</th>
			   <th align="left">Action</th>
			   
</tr>
</thead>
<tbody>
<?php while($rows=mysql_fetch_assoc($result))
{
	extract($rows);
	
	$_SESSION['current_examid']=$rows['examid'];
	
	?>
   <?php
    $status=$rows['status'];
    if(($status)==1)
    {
     $st = '<p class="btn bg-success">ACTIVE</p>';
     $st1 = '<a class="btn bg-success" href="take-assessment.php?id='.$rows['examid'].'">Take Assessment</a>';
     }else{
     $st = '<p class="btn bg-danger">INACTIVE</p>'; 
     $st1 = '<a class="btn bg-danger" href="">Take Assessment</a>';											   
	}
   ?>
    <tr>
    <td><?php echo $rows['examname'];?></td>
    <td><?php echo $rows['subname'];?></td>
	<td><?php echo $rows['deadline'];?></td>
	<td><?php echo $st;?></td>
	<td><?php echo $st1;?></td>
	<td></td>
	
    </tr>
<?php }?>
</tbody>
</table>
</div>
</div>
</div>
	
<?php include("footer.php"); ?>
</div></div>

	<?php include("sidebar.php"); ?>
	<?php }
else
	header('location:login.php');
?>
	
	</div>
</body>
</html>