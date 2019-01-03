
<!DOCTYPE HTML>
<html>
<head>
<title>OES</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Pooled Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

<link rel="stylesheet" href="css/style5.css">
<link rel="shortcut icon" href="http://bit.ly/ghfavicon" width=32px>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css" />
	
	
	<link rel="prefetch" href="play1.svg">
	<script src="js/script1.js" defer></script>
</head> 
<body >
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
 
 
date_default_timezone_set('Asia/Kolkata');

if (isset($_SESSION['current_examid'])) {

$exam_id = $_SESSION['current_examid'];	
$retake_status = $_SESSION['student_retake'];

if ($retake_status == 1) {
$sql = "DELETE FROM assesmenttbl WHERE studid = '$my_id' AND examid = '$exam_id'";

if (mysql_query($sql) === TRUE) {

} else {

}	
}


$sql = "SELECT * FROM examtbl WHERE examid = '$exam_id' AND catname = '$my_category' AND status = '1'";
$result = mysql_query($sql);

if (mysql_num_rows($result)>0 ) {

    while($row = mysql_fetch_assoc($result)) {
    $exam_name =$row['examname'];
	$subject = $row['subname'];
	$deadline = $row['deadline'];
	$duration = $row['duration'];
	$passmark = $row['percentage'];
	$reexam = $row['reexam'];
	$terms = $row['instruction'];
	$status = $row['status'];
	$todaydate = date('Y/m/d');
    $next_retake = date('m/d/Y', strtotime($todaydate. ' + '.$reexam.' days'));
	
	$today_date = date('m/d/Y');
    }
} else {
header("location:./");	
}
}else{
header("location:./");	
}


$sql = "SELECT * FROM assesmenttbl WHERE studid = '$my_id' AND examid = '$exam_id'";
$result = mysql_query($sql);

if (mysql_num_rows($result)>0 ) {

    while($row = mysql_fetch_assoc($result)) {
		$recid=$row['recordid'];
		
    //header("location:take-assessment.php?id=$exam_id");
    }
} else {
	
$myname = $my_fname." ". $my_lname;
//$recid = $row['recordid'];
$recid = "";
$sql = "INSERT INTO assesmenttbl(recordid, studid, studname, examname, examid, score, status, nextretake, date)
VALUES ('$recid', '$my_id', '$myname', '$exam_name', '$exam_id', '0', 'FAIL', '$next_retake', '$today_date')";

$result=mysql_query($sql);
if (($result) === TRUE) {
	$recid=mysql_insert_id();

} else {

}

}

?>
 
 <div>
<input type="hidden" id="set-time" value="<?php echo $duration; ?>"/>
<div id="countdown">
  
  <div id='tiles' class="color-full"></div>
  <div class="countdown-label">Time Remaining</div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://code.responsivevoice.org/responsivevoice.js'></script>
	</div>

 	<div class="validation-system">
 		
 		<div class="validation-form">
  	    
         
                 <form action="submit_assessment.php" method="POST" name="quiz" id="quiz_form" >
                                            <div class="tab-content">
											<?php 
											include("connect.php");
											$sql = "SELECT * FROM questiontbl WHERE examid = '$exam_id'";
                                            $result =mysql_query($sql);

                                            if (mysql_num_rows($result) > 0) {
                                            $qno = 1;
											
                                            while($row = mysql_fetch_array($result)) {
												$qsid = $row['qid'];
												$qs = $row['questionname'];

												$type = $row['questiontype'];
												$op1 = $row['op1'];
												$op2 = $row['op2'];
												$op3 = $row['op3'];
												$op4 = $row['op4'];
												$ans = $row['correctop'];
												$enan =$row['correctop'];
                                          $i=0;
										  if($type=='landwt')
										  {
											  $qs1 = "Listen and Write<br>";
											  
											  $b='
													<a id=play class="btn bg-success">Listen</a> 
													<a id=pause></a> 
													<a id=stop></a>';
												  $qs ='<article><b style="color:white;">'.$qs.'</b></article>';
												
										    }
										   else
										   {
											  $qs1="";
											  $b="";
											  $qs = $row['questionname'];
										   }
										  
											
											if ($qno == 1) {
                                             if($type !='fill' && $type !='wtword'&& $type !='landwt') {
											print '
											<div role="tabpanel" class="tab-pane active fade in" id="tab'.$qno.'">
                                             <p><b>'.$qno.'.</b> '.$qs.'</p>
											 <p><input type="radio" name="an'.$qno.'"  class="form-control" value="'.$op1.'"> '.$op1.'</p>
											 <p><input type="radio" name="an'.$qno.'"  class="form-control" value="'.$op2.'"> '.$op2.'</p>
											 <p><input type="radio" name="an'.$qno.'"  class="form-control" value="'.$op3.'"> '.$op3.'</p>
											 <p><input type="radio" name="an'.$qno.'"  class="form-control" value="'.$op4.'"> '.$op4.'</p>
											 <input type="hidden" name="qst'.$qno.'" value="'.base64_encode($qs).'">
											 <input type="hidden" name="ran'.$qno.'" value="'.base64_encode($enan).'">
                                             </div>
											';	
											}
											else
											print '
											<div role="tabpanel" class="tab-pane active fade in" id="tab'.$qno.'">
                                             <p><b>'.$qno.'</b>'.$qs1.$qs.$b.'</p>
											
											 <p><input type="text" name="an'.$qno.'"  class="form-control" onkeyup="this.value = this.value.toUpperCase();" value=" " > </p>
											
											 <input type="hidden" name="qst'.$qno.'" value="'.base64_encode($qs).'">
											 <input type="hidden" name="ran'.$qno.'" value="'.base64_encode($enan).'">
                                             </div>
											';	
											}
											
											
											else{
											if($type !='fill' && $type !='wtword'&& $type !='landwt') {
											print '
											<div role="tabpanel" class="tab-pane fade in" id="tab'.$qno.'">
                                             <p><b>'.$qno.'.</b> '.$qs.'</p>
											 <p><input type="radio" name="an'.$qno.'"  class="form-control" value="'.$op1.'"> '.$op1.'</p>
											 <p><input type="radio" name="an'.$qno.'"  class="form-control" value="'.$op2.'"> '.$op2.'</p>
											 <p><input type="radio" name="an'.$qno.'"  class="form-control" value="'.$op3.'"> '.$op3.'</p>
											 <p><input type="radio" name="an'.$qno.'"  class="form-control" value="'.$op4.'"> '.$op4.'</p>
											 <input type="hidden" name="qst'.$qno.'" value="'.base64_encode($qs).'">
											 <input type="hidden" name="ran'.$qno.'" value="'.base64_encode($enan).'">
                                             </div>
											';		
											}
											else
													print '
											<div role="tabpanel" class="tab-pane fade in" id="tab'.$qno.'">
                                             <p><b>'.$qno.'</b>'.$qs1.$qs.$b.'</p>
											
											
											 <p><input type="text" name="an'.$qno.'"  class="form-control" onkeyup="this.value = this.value.toUpperCase();" value=" "> </p>
											
											 <input type="hidden" name="qst'.$qno.'" value="'.base64_encode($qs).'">
											 <input type="hidden" name="ran'.$qno.'" value="'.base64_encode($enan).'">
                                             </div>
											';	
											}

											$qno = $qno + 1;	

											
											

                                            }
                                            } else {
 
                                            }
											
											?>

                                            </div>
                 
											
                                            <ul class="nav nav-tabs" role="tablist">
											<?php 
											include("connect.php");
											$sql = "SELECT * FROM questiontbl WHERE examid = '$exam_id'";
                                            $result = mysql_query($sql);

                                            if (mysql_num_rows($result) > 0) {
                                            $qno = 1;
											$total_questions = 0;
                                            while($row = mysql_fetch_assoc($result)) {
											$total_questions++;
											if ($qno == 1) {
											print '<li role="presentation" class="active"><a href="#tab'.$qno.'" role="tab" data-toggle="tab">'.$qno.'</a></li>';	
											}else{
											print '<li role="presentation"><a href="#tab'.$qno.'" role="tab" data-toggle="tab">'.$qno.'</a></li>';		
											}

											$qno = $qno + 1;
                                            }
											
                                            } else {
 
                                            }
											
											?>
                                            <input type="hidden" name="tq" value="<?php echo $total_questions; ?>">
											<input type="hidden" name="eid" value="<?php echo $exam_id; ?>">
											<input type="hidden" name="pm" value="<?php echo $passmark; ?>">
											<input type="hidden" name="ri" value="<?php echo $recid; ?>">
											
                                            </ul>
											

                                        </div>
								<br><input onclick="return confirm('Are you sure you want to submit your assessment ?')" class="btn bg-success" type="submit" value="Submit Assessment">
						</form>  
     

				
				
			
            

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
	
	
	
	

 <script  src="js/index.js"></script>
</body>
</html>