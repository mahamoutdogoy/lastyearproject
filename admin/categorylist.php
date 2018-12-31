
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
                <center><li class="breadcrumb-item"><h4><a href="">Category List</a></h4></li></center>
            </ol>
<!--grid 
 	<div class="validation-system">
 		
 		<div class="validation-form">
 	<!---->
	
<?php

include("connect.php");
$sql="select cid,catname,deptname,cstatus from categorytbl ";
$result = mysql_query($sql);
?>
<div class="agile-grids">
<div class="agile-tables">
<div class="w3l-table-info">
<h2>Category</h2>
<table width="100%" id="table">
<thead>
<tr>
               <th align="left">Id</th>
			   <th align="left">Category Name</th>
			   <th align="left">Department Name</th>
			   <th align="left">Action</th>
			    
</tr>
</thead>
<tbody>
<?php while($rows=mysql_fetch_array($result))
{
	?>

    <tr>
    <td><?php echo $rows['cid'];?></td>
	<td><?php echo $rows['catname'];?></td>
    <td><?php echo $rows['deptname'];?></td>
	
	<td>
    <?php
	$status=$rows['cstatus'];
if(($status)=='0')
{
?>
<button class="btn bg-danger">
<a href="caction.php?status=<?php echo $rows['cid'];?>" 
  onclick="return confirm('Activate <?php echo $rows['catname'];?>');"> Inactivate </a></button>
<?php
}
if(($status)=='1')
{
?>
<button class="btn bg-success text-white ">
<a href="caction.php?status=<?php echo $rows['cid'];?>" 
 onclick="return confirm('In-activate <?php echo $rows['catname'];?>');"> Activate</a></button><?php
}
?>

	<button class="btn btn-dark text-white "><a href="deletecat.php?id=<?php echo $rows['cid']; ?>" 
    onclick="return confirm('Are you sure you wish to delete this Record?');">Delete </a> </button>
 
	<button class="btn bg-alert dark text-white "><a href="editcategory.php?id=<?php echo $rows['cid']; ?>"> Edit </a></button>
	</td>
    </tr>
<?php }?>
</tbody>
</table>
</div>
</div>
</div>

<!--<button><a href="logout.php">Logout</a></button>-->

<!--
 </div>

</div>
 	<!--//grid-->
	
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
<?php

mysql_close($con);
?>
