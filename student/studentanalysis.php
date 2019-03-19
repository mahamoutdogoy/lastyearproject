
<!DOCTYPE HTML>
<html>
<head>
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Pooled Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

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
	                  <center><li class="breadcrumb-item"><h4><a href="">My Results</a></h4></li></center>
            </ol>
<!--grid
 	<div class="validation-system">
 		
 		<div class="validation-form">
 	-->
  	    
<?php




include("connect.php");
//$get = mysql_query("SELECT score from assesmenttbl WHERE studid = '$my_id'");
$previous = mysql_query("SELECT score from assesmenttbl WHERE studid = '$my_id' and examid =18" );
$current = mysql_query("SELECT  score  from assesmenttbl WHERE studid = '$my_id' and examid = 19");
  $a = mysql_fetch_row($previous);


  $b = mysql_fetch_row($current);

 

  if ( $b > $a )
  {

  	echo ' <div class="alert alert-success">
    <strong>Success!</strong> good to see you improving
  </div><br>';

  echo '<center><div class="p-3 mb-2 bg-success text-white">good to see you improving</div></center>';

  	
  }
  else if  ( $b < $a )
  {
  	echo ' <div class="alert alert-warning">
    <strong>Worsen!</strong> you can do it better
  </div><br>';

  echo '<center><div class="p-3 mb-2 bg-warning text-light">YOU ARE WORSEN BUT YOU CAN DO IT BETTER</div></center>';

  }

  else if ( $b == $a)
  {
  
    echo ' <center><div class="alert alert-primary"> you have got the same marks in both test </div></center>';

  }
  else
  {
  	echo ' <center><div class="alert alert-danger"something is wrong </div></center>';
  }




$sql="SELECT * FROM assesmenttbl WHERE studid = '$my_id'";
$result = mysql_query($sql);
?>
<div class="agile-grids">
<div class="agile-tables">
<div class="w3l-table-info">

<table width="100%" id="table">
<thead>
<tr>
               
               <th align="left">Exam</th>
			   <th align="left">Student ID</th>
			   <th align="left">Student Name</th>
			   <th align="left">Score</th>
			   <th align="left">Rank</th>
			   <th align="left">Date</th>
               <th align="left">Status</th>
			   <th align="left">Next Retake</th>
			   
</tr>
</thead>
<tbody>
<?php while($rows=mysql_fetch_assoc($result))
{
	extract($rows);
	
	?>
 
    <tr>
    <td><?php echo $rows['examname'];?></td>
    <td><?php echo $rows['studid'];?></td>
	<td><?php echo $rows['studname'];?></td>
	<td><?php echo $rows['score'];?><b>%</b></td>
	<td><?php ?></td>
	<td><?php echo $rows['date'];?></td>
	<td><?php echo $rows['status'];?></td>
	<td><?php echo $rows['nextretake'];?></td>
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
