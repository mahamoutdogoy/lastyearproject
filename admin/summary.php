
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

include("header.php");

include("checkuser.php");
include("connect.php");

if (isset($_GET['eid'])) {
$exam_id = $_GET['eid'];
$sql = "SELECT * FROM examtbl WHERE examid = '$exam_id'";
$result = mysql_query($sql);

if (mysql_num_rows($result) > 0) {

    while($row = mysql_fetch_assoc($result)) {
     $excate = $row['catname'];
	 $exsubject = $row['subname'];
	 $exname = $row['examname'];
	 $exdate = $row['deadline'];
	 $exduration = $row['duration'];
	 $expassmark = $row['percentage'];
	 $exreex = $row['reexam'];
	 $exterms = $row['instruction'];
    }
} else {
    header("location:./");
}

$stdpass = 0;
$stdfail = 0;

$sql = "SELECT * FROM assesmenttbl WHERE examid = '$exam_id'";
$result = mysql_query($sql);

if (mysql_num_rows($result)) {
   
    while($row = mysql_fetch_assoc($result)) {
     $status = $row['status'];
	 if ($status == "PASS"){
		 $stdpass++;
	 }else{
		$stdfail++; 
		 
	 }
	 
    }
} else {

}
mysql_close($con);	
}else{
	header("location:./");
}
 

?>

	<ol class="breadcrumb">
	            
                <center><li class="breadcrumb-item"><h4><a href="">Results Summary </a></h4></li></center>
            </ol>
<!--grid
 	<div class="validation-system">
 		
 		<div class="validation-form">
 	-->
  	    

<div class="agile-grids">
<div class="agile-tables">
<div class="w3l-table-info">
      <div class="grid_3 grid_5 ">
      <h3>Results Summary - <?php echo "$exname"; ?> </h3>
				<div class="col-md-6 agileits-w3layouts">
					
					<table class="table table-bordered">
						<thead>
							<tr>
								<th><b>Title</b></th>
								<th><b>Information</b></th>
							</tr>
						</thead>
						<tbody>
							<tr>

								<span><b><td>Exam Name</td></b></span>
								<td><span class=" "><b><?php echo "$exname"; ?></b></span></td>
							</tr>
							<tr>
								<b><td>Subject</td></b>
								<td><span class=""><b><?php echo "$exsubject"; ?> </b></span></td>
							</tr>
							<tr>
								<b><td>Deadline</td></b>
								<td><span class=""><b><?php echo "$exdate"; ?></b></span></td>
							</tr>
							<tr>
								<b><td>Duration</td></b>
								<td><span class=""><b><?php echo "$exduration"; ?></b> <b>min.</b></span></td>
							</tr>
							<tr>
								<b><td>Passmark</td></b>
								<td><span><b><?php echo "$expassmark"; ?><b>%</b></span></td>
							</tr>
							
								
							
						</tbody>
					</table>                    
				</div>
				
				<div class="col-md-6 agileits-w3layouts">
				<table class="table table-bordered">
						<thead>
							<tr>
								<th><center><b>Passed Students</b></center></th>
								<th><center><b>Failed Students</b></center></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><center><h4><?php echo "$stdpass"; ?></h4></center></td>
								<td><center><h4><?php echo "$stdfail"; ?></h4></center></td>
							</tr>
						</tbody>
				</table>   
				
				</div>
			
				
            <div class="clearfix"> </div>
			
            </div>
			
			   

</div>
</div>
</div>


<?php include("footer.php"); ?>
</div></div>

	<?php include("sidebar.php"); 

	?>
	<?php }
else
	header('location:login.php');
?>
	</div>
	
	
</body>
</html>