
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
if($_SESSION["userid"]==true)
{
 include("connect.php");
include("header.php"); 

if (isset($_GET['eid'])) {

$exam_id = $_GET['eid'];
$sql = "SELECT * FROM assesmenttbl WHERE examid = '$exam_id'";
$result = mysql_query($sql);

if (mysql_num_rows($result) > 0) {

    while($row = mysql_fetch_assoc($result)) {
    $exam_name = $row['examname'];
    }
} else {

}
mysql_close($con);
	
}else{
	
header("location:./");	
}
?>

<ol class="breadcrumb">
	                  <center><li class="breadcrumb-item"><h4><a href="">Results </a></h4></li></center>
            </ol>
<!--grid
 	<div class="validation-system">
 		
 		<div class="validation-form">
 	-->
  	    
<?php

include("connect.php");
$sql="SELECT * FROM assesmenttbl WHERE examid = '$exam_id'";
$result = mysql_query($sql);
 while($rows=mysql_fetch_assoc($result))
{
	extract($rows);
	?>
    

<div class="agile-grids">
<div class="agile-tables">
<div class="w3l-table-info">
<h3><?php echo $exam_name; ?> Results</h3>
<table width="100%" id="table">
<thead>
<tr>
		   <th align="left">Student Name</th>
		   <th align="left">Student ID</th>
		   <th align="left">Exam Name</th>
           <th align="left">Score</th>
           <th align="left">Status</th>
		   <th align="left">Date</th>
		   <th align="left">RE Exam</th>
           <th align="left">Action</th>
</tr>
</thead>
<tbody>

    <tr>
    <td><?php echo $rows['studname'];?></td>
    <td><?php echo $rows['studid'];?></td>
    <td><?php echo $rows['examname'];?></td>
    <td><?php echo $rows['score'];?><b>%</b></td>
	<td><?php echo $rows['status'];?></td>
	<td><?php echo $rows['date'];?></td>
	<td><?php echo $rows['nextretake'];?></td>
	<td>
    <ul  style="list-style: none;" >
          <li class="dropdown ">
		  
		      <button href="#" class="dropdown-toggle btn bg-primary" data-toggle="dropdown" aria-expanded="false">
			       select
		      </button>
		   <ul class="dropdown-menu drp-mnu">                                      
		      <li><a onclick = "return confirm('Reactivate exam for <?php echo $rows['studname']; ?> ?')" href="re-activate.php?rid=<?php echo $rows['recordid'];?>&eid=<?php echo $exam_id;?>">Re-activate</a></li>  
		   </ul>
	      </li>
	</ul>
	</td>

    </tr>

</tbody>
</table>

</div>
</div>
</div>
	<?php }?>
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