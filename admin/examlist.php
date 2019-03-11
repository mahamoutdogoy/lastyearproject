
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
if($_SESSION["userid"]==true)
{
include("header.php"); ?>

	<ol class="breadcrumb">
	                  <center><li class="breadcrumb-item"><h4><a href="">Examination List</a></h4></li></center>
            </ol>
<!--grid
 	<div class="validation-system">
 		
 		<div class="validation-form">
 	-->
  	    
<?php

include("connect.php");
$sql="select examid,examname,duration,percentage,reexam,deadline,subname,deptname,catname,instruction,status from examtbl ";
$result = mysql_query($sql);
?>
<div class="agile-grids">
<div class="agile-tables">
<div class="w3l-table-info">
<h2>List of Exams</h2>
<table width="100%" id="table">
<thead>
<tr>
               <th align="left">Exam Id</th>
			   <th align="left">Exam Name</th>
			   <th align="left">Subject</th>
			   <th align="left">Department</th>
			   <th align="left">Category</th>
			   <th align="left">Deadline</th>
			   <th align="left">Action</th>
			   <th align="left">Operation</th>
			    
</tr>
</thead>
<tbody>
<?php while($rows=mysql_fetch_assoc($result))
{
	extract($rows);
	?>

    <tr>
    <td><?php echo $rows['examid'];?></td>
	<td><?php echo $rows['examname'];?></td>
    <td><?php echo $rows['subname'];?></td>
    <td><?php echo $rows['deptname'];?></td>
	<td><?php echo $rows['catname'];?></td>
	<td><?php echo $rows['deadline'];?></td>
	
	<td>
	<?php
$status=$rows['status'];
if(($status)=='0')
{
?>
<button class="btn bg-danger">
<a href="examaction.php?status=<?php echo $rows['examid'];?>" 
  onclick="return confirm('Activate <?php echo $rows['examname'];?>');"> Inactivate </a></button>
<?php
}
if(($status)=='1')
{
?>
<button class="btn bg-success text-white ">
<a href="examaction.php?status=<?php echo $rows['examid'];?>" 
 onclick="return confirm('In-activate <?php echo $rows['examname'];?>');"> Activate</a></button><?php
}
?>

	<button class="btn btn-dark text-white "><a href="deleteexam.php?id=<?php echo $rows['examid']; ?>" 
    onclick="return confirm('Are you sure you wish to delete this Record?');">Delete </a> </button>
 
	<button class="btn bg-alert dark text-white "><a href="editexam.php?id=<?php echo $rows['examid']; ?>"> Edit </a></button>
	</td>
	
	<td>
									
	<ul  style="list-style: none;" >
          <li class="dropdown ">
		  
		  <button href="#" class="dropdown-toggle btn bg-primary" data-toggle="dropdown" aria-expanded="false">
			 select
		  </button>
		      <ul class="dropdown-menu drp-mnu">
		          <li> <a href="viewquestion.php?eid=<?php echo $rows['examid']; ?>"> View Question</a> </li> 
				  <li> <a href="addquestion.php?eid=<?php echo $rows['examid']; ?>"> Add Question</a> </li>
			      
			  </ul>
	      </li>
	</ul>
							    
	</td>

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