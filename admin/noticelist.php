
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
	                  <center><li class="breadcrumb-item"><h4><a href="">List Of Notices</a></h4></li></center>
            </ol> 
<!--grid
 	<div class="validation-system">
 		
 		<div class="validation-form">
 	-->
  	    
<?php

include("connect.php");
$sql="select noteid,notice,description,postdate from noticetbl ";
$result = mysql_query($sql);
?>
<div class="agile-grids">
<div class="agile-tables">
<div class="w3l-table-info">
<h2>List of Notices</h2>
<table width="100%" id="table">
<thead>
<tr>
               <th align="left">Note Id</th>
			   <th align="left">Title</th>
			   <th align="left">Description</th>
			   <th align="left">Post Date</th>
			   <th align="left">Action</th>
			    
</tr>
</thead>
<tbody>
<?php while($rows=mysql_fetch_assoc($result))
{
	extract($rows);
	?>

    <tr>
    <td><?php echo $rows['noteid'];?></td>
	<td><?php echo $rows['notice'];?></td>
    <td><?php echo $rows['description'];?></td>
    <td><?php echo $rows['postdate'];?></td>
	
	<td>
	
    <button class="btn btn-dark text-white "><a href="deletenotice.php?id=<?php echo $rows['noteid']; ?>" 
    onclick="return confirm('Are you sure you wish to delete this Record?');">Delete </a> </button>
 
	<button class="btn bg-alert dark text-white "><a href="editnotice.php?id=<?php echo $rows['noteid']; ?>"> Edit </a></button>
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