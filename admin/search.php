
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

 include("connect.php");
include("header.php");

if (isset($_GET['name'])) {
$keyword = ucwords($_GET['name']);	
$sql = "SELECT * FROM studenttbl WHERE fname LIKE '%$keyword%' or lname LIKE '%$keyword%'";
}
 ?>

	<ol class="breadcrumb">
	             <li class="breadcrumb-item text-white" ><h4 ><a href="addstudent.php" class=" btn btn-primary hvr-icon-float-away col-9">Add Student </a></h4></li>
                <center><li class="breadcrumb-item"><h4><a href="">Student List</a></h4></li></center>
            </ol>
<!--grid
 	<div class="validation-system">
 		
 		<div class="validation-form">
 	-->
  	    
<?php

include("connect.php");
//$sql="select studid,fname,lname,gender,mobile,dob,address,deptname,catname,file,status from studenttbl ";
$result = mysql_query($sql);
?>
<div class="agile-grids">
<div class="agile-tables">
<div class="w3l-table-info">
<h2>List of Students</h2>
<table width="100%" id="table">
<thead>
<tr>
               <th align="left">Id</th>
			   <th align="left">First Name</th>
			   <th align="left">Last Name</th>
			   <!--<th align="left">Gender</th>
			   <th align="left">Blood Group</th>
			   <th align="left">Email</th>-->
			   <th align="left">Mobile</th>
			   <!--<th align="left">Date of birth</th>
			   <th align="left">Address</th>-->
			   <th align="left">Department</th>
			   <th align="left">Category</th>
			   <th align="left">File</th>
			   
			   <th align="left">Action</th>
			    
</tr>
</thead>
<tbody>
<?php while($rows=mysql_fetch_array($result))
{
	extract($rows);
	?>

    <tr>
    <td><?php echo $rows['studid'];?></td>
	<td><?php echo $rows['fname'];?></td>
    <td><?php echo $rows['lname'];?></td>
	<!--<td><?php //echo $rows['gender'];?></td>
	<<td><?php// echo $rows['blood'];?></td>
	<td><?php //echo $rows['email'];?></td>-->
	<td><?php echo $rows['mobile'];?></td>
	<!--<td><?php// echo $rows['dob'];?></td>
	<td><?php //echo $rows['address'];?></td>-->
	<td><?php echo $rows['deptname'];?></td>
	<td><?php echo $rows['catname'];?></td>
	<td><?php echo($rows['file']!=NULL)?'<img src="../student/uploaded/'.$rows['file'].'" width="50" height="50">' :'' ;?></td>
	
	<td>
	

    <?php
$status=$rows['status'];
if(($status)=='0')
{
?>
<button class="btn bg-danger">
<a href="studaction.php?status=<?php echo $rows['studid'];?>" 
  onclick="return confirm('Activate <?php echo $rows['fname'];?>');"> Inactivate </a></button>
<?php
}
if(($status)=='1')
{
?>
<button class="btn bg-success text-white ">
<a href="studaction.php?status=<?php echo $rows['studid'];?>" 
 onclick="return confirm('In-activate <?php echo $rows['fname'];?>');"> Activate</a></button><?php
}
?>

	<button class="btn btn-dark text-white "><a href="deletestudent.php?id=<?php echo $rows['studid']; ?>" 
    onclick="return confirm('Are you sure you wish to delete this Record?');">Delete </a> </button>
 
	<button class="btn bg-alert dark text-white "><a href="editstudent.php?id=<?php echo $rows['studid']; ?>"> Edit </a></button>
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