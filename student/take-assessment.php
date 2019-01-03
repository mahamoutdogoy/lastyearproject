
<!DOCTYPE HTML>
<html>
<head>
<title>	</title>
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

include("header.php");

include("checkstud.php");
include("connect.php");
 


if (isset($_GET['id'])) {

$exam_id =  $_GET['id'];
$record_found = 0;
$sql = "SELECT * FROM examtbl WHERE examid = '$exam_id' AND catname = '$my_category'";
$result = mysql_query($sql);


if (mysql_num_rows($result) > 0) {

    while($row =mysql_fetch_assoc($result)) {
	$subject = $row['subname'];
	$exam_name = $row['examname'];
	$deadline = $row['deadline'];
	$duration = $row['duration'];
	$passmark = $row['percentage'];
	$reexam = $row['reexam'];
	$terms = $row['instruction'];
	$status = $row['status'];
	$today_date = date('Y/m/d');
    $next_retake = date('m/d/Y', strtotime($today_date. ' + '.$reexam.' days'));
	$dcv = $deadline;
	
	if ($status == 0) {
	header("location:./");	
	}
    }
} 
$quest = 0;
$sql = "SELECT * FROM questiontbl WHERE examid = '$exam_id'";
$result = mysql_query($sql);

if (mysql_num_rows($result) > 0) {

    while($row = mysql_fetch_assoc($result)) {
    $quest++;
    }
} else {

}


$sql = "SELECT * FROM assesmenttbl WHERE studid = '$my_id' AND examid = '$exam_id'";
$result = mysql_query($sql);
if ($result){
//if (mysql_num_rows($result) > 0) {

    while($row = mysql_fetch_assoc($result)) {
    $record_found = 1;
	$score = $row['score'];
	$status = $row['status'];
	$take_date = $row['date'];
	$retake_date = $row['nextretake'];
	$today_date = date('Y/m/d');
	$retakeconv = date_format(date_create_from_format('m/d/Y',$retake_date),'Y/m/d');
    $tc = strtotime($today_date);
	$rc = strtotime($retakeconv);
	$dc = strtotime($dcv);
    $td = ($tc - $rc)/86400;
	$dcc = ($tc - $dc)/86400;
	
    }
} else {
    
}


mysql_close($con);
}

 ?>
 
 
 


	<ol class="breadcrumb">
	            
                <center><li class="breadcrumb-item"><h4><a href="">Assessment</a></h4></li></center>
            </ol>
<!--grid
 	<div class="validation-system">
 		
 		<div class="validation-form">
 	-->
  	    

<div class="agile-grids">
<div class="agile-tables">
<div class="w3l-table-info">
      <div class="grid_3 grid_5 ">
      <h4> Take Assessment</h4>
	  
	  <h5><a href="examination.php">Assessments</a></h5>
        <h5><?php echo $exam_name; ?></h5>
                       
	  
	  
	  
				<div class="col-md-6 agileits-w3layouts">
					
					<table class="table table-bordered">
						<thead>
                             <h4> Examination Properties</h4>
						</thead>
						
                              <tbody>
                                               <tr>
                                                   <th scope="row">1</th>
                                                   <td>Exam Name</td>
                                                   <td><?php echo $exam_name; ?></td>
                                               </tr>
											     <tr>
                                                   <th scope="row">2</th>
                                                   <td>Subject</td>
                                                   <td><?php echo $subject; ?></td>
                                               </tr>
											   <tr>
                                                   <th scope="row">3</th>
                                                   <td>Deadline</td>
                                                   <td><?php echo $deadline; ?></td>
                                               </tr>
											   
											    <tr>
                                                   <th scope="row">4</th>
                                                   <td>Duration</td>
                                                   <td><?php echo $duration; ?> <b>min.</b></td>
                                               </tr>
											   
											  <tr>
                                                   <th scope="row">5</th>
                                                   <td>Next Re-take</td>
                                                   <td><?php 
												   if ($record_found == 1) {
													 echo $retake_date;  
												   }else{
													 echo $next_retake;  
												   }
												   
												   ?></td>
                                               </tr>
											   
											   <tr>
                                                   <th scope="row">6</th>
                                                   <td>Passmark</td>
                                                   <td><?php echo $passmark; ?>%</td>
                                               </tr>
											   
											   	<tr>
                                                   <th scope="row">6</th>
                                                   <td>Questions</td>
                                                   <td><b><?php echo $quest; ?></b></td>
                                               </tr>
                                              
                                           </tbody>
                                        </table>                   
				</div>
				<br><br><br>
				<div class="col-md-6 agileits-w3layouts">
				<div class="col-md-12">
                            <div class="">
                                <div class="panel-heading">
                                    <h4 class="panel-title">Terms and conditions</h4>
                                </div>
                                <div class="panel-body ">

                                    
								
                                     <?php echo '<div class="alert alert-danger" role="alert">'  .$terms.
                                    '</div>';?>
                                </div>
                            </div>
                        </div>
						
						<div class="col-md-12">
                            <div class="">
                                <div class="panel-heading">
                                    <h4 class="panel-title">Take Assessment</h4>
                                </div>
                                <div class="panel-body">
								<?php
								if ($record_found == 1) {
									
								if ($td >= 0){
									
								if ($dcc > 1){
								print '
								<div class="alert alert-warning" role="alert">
                                The exam is already expired.
                                </div>';
								}else{
								$_SESSION['current_examid'] = $exam_id;
								$_SESSION['student_retake'] = 1;
								print '
                                 <div class="alert alert-success" role="alert">
                                  You are good to go.
                                    </div>

									'; ?>
									<a onclick="return confirm('Are you sure you want to begin ?')" class="btn btn-success" href="assessment.php">Retake Assessment</a>
									
									<?php	
								}
                                
								}else{
                                print '
								<div class="alert alert-warning" role="alert">
                                You will be able to retake this exam on '.$retake_date.'
                                </div>';
								}								
									
								}else{
								$_SESSION['current_examid'] = $exam_id;
								
								$_SESSION['student_retake'] = 0;
								print '
                                 <div class="alert alert-success" role="alert">
                                  You are good to go.
                                    </div>

									'; ?>
									<a onclick="return confirm('Are you sure you want to begin ?')" class="btn btn-success" href="assessment.php">Begin Assessment</a>
									
									<?php
                  									
									
								}
								
								?>

									
                                </div>
                            </div>
                        </div>
						
						<div class="col-md-12">
                            <div class="">
                                <div class="panel-heading">
                                    <h4 class="panel-title">Assessment History</h4>
                                </div>
                                <div class="panel-body">
                                <?php
								if ($record_found == "1") {
								print '
                                 <div class="alert alert-info" role="alert">
                                  You attend this exam on <strong>'.$take_date.'</strong> , your score was <strong>'.$score.'%</strong>
                                    </div>';		
								
								}else{
								print '
                                 <div class="alert alert-info" role="alert">
                                  No records found.
                                    </div>';								
									
								}
								
								?>

                                </div>
                            </div>
                        </div>
			
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