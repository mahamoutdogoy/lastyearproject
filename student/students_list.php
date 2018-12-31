
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
 //include("connect.php");
include("header.php"); 
include("checkstud.php");?>
	<ol class="breadcrumb">
	             
                <center><li class="breadcrumb-item"><h4><a href="">Student List</a></h4></li></center>
            </ol>
<!--grid
 	<div class="validation-system">
 		
 		<div class="validation-form">
 	-->
  	    
<?php

include("connect.php");
$sql="select * from studenttbl where deptname='$my_department' and catname = '$my_category'";
$result = mysql_query($sql);
?>
<div class="mailbox-content">
<div class="inbox-right">
         	
            
<h4><b> Students In My Class</b></h4>
<table width="100%" class="table">

<tbody>
<?php while($rows=mysql_fetch_array($result))
{
	 extract($rows);
	?>

    <tr class="table-row">
	<td class="table-img"><?php echo($rows['file']!=NULL)?'<img src="uploaded/'.$rows['file'].'" width="100" height="100">' :'' ;?></td>
    <td class="table-text">
                <h6> <?php echo $rows['fname']." ".$rows['lname'];?></h6>
                <p><?php echo $rows['email'];?></p>
				<p><?php echo $rows['gender'];?></p>
    </td>
	
	<tr>
	
<?php }?>
    

</tbody>
</table>
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