
<!DOCTYPE HTML>
<html>
<head>
<title>
</title>
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
	                  <center><li class="breadcrumb-item"><h4><a href="">My Subjects</a></h4></li></center>
            </ol>
<!--grid
 	<div class="validation-system">
 		
 		<div class="validation-form">
 	-->
  	    
<?php

include("connect.php");
$sql="SELECT * FROM subjecttbl WHERE deptname = '$my_department' AND catname = '$my_category'";;
$result = mysql_query($sql);
?>
<div class="agile-grids">
<div class="agile-tables">
<div class="w3l-table-info">
<h2>List of Subjects</h2>
<table width="100%" id="table">
<thead>
<tr>
               <th align="left">Subject</th>
			   <th align="left">Department</th>
			   <th align="left">Category</th>
			   <th align="left">Status</th>
			   
</tr>
</thead>
<tbody>
<?php while($rows=mysql_fetch_assoc($result))
{
	extract($rows);
	?>
   <?php
    $status=$rows['status'];
    if(($status)=='1')
    {
     $st = '<p class="btn bg-success">ACTIVE</p>';
    // $stl = '<a href="pages/make_sb_in.php?id='.$rows['sid'].'">Make Inactive</a>';
     }else{
     $st = '<p class="btn bg-danger">INACTIVE</p>'; 
    // $stl = '<a href="pages/make_sb_ac.php?id='.$rows['sid'].'">Make Active</a>';											   
	}
   ?>
    <tr>
    <td><?php echo $rows['subname'];?></td>
    <td><?php echo $rows['deptname'];?></td>
	<td><?php echo $rows['catname'];?></td>
	<td><?php echo $st;?></td>
	
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