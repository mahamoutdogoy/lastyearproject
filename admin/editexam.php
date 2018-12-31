
<!DOCTYPE HTML>
<html>
<head>
<title>
</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Pooled Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/morris.css" type="text/css"/>
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" href="css/jquery-ui.css"> 
<!-- jQuery -->
<script src="js/jquery-2.1.4.min.js"></script>
<!-- //jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
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
       ob_start();
       include("connect.php");
	   if(isset($_GET['id']))
       {
         $id=$_GET['id'];
		
	     if(isset($_POST['update']))
         {
		   $examnm=$_POST['examnm'];
           $duration=$_POST['duration'];
		   $percent=$_POST['per'];
           $reexam=$_POST['reexam'];
		   $deadline=$_POST['date'];
		   $subnm=$_POST['subnm'];
		   $deptnm=$_POST['deptnm'];
		   $catnm=$_POST['catnm'];
		   $terms=$_POST['instructions'];	
		   
		   $updated=mysql_query("UPDATE examtbl SET examname='$examnm',duration='$duration',percentage='$percent', reexam='$reexam',deadline='$deadline',subname='$subnm',deptname='$deptnm',catname='$catnm',instruction='$terms' WHERE examid='$id'") or die();
       
	       if($updated)
           {
           header("Location:examlist.php");
         }
	       
       }
	   }
	   ob_end_flush();
?>
<?php 
  

  if(isset($_GET['id']))
  {
  $id=$_GET['id'];
 
  $getselect=mysql_query("SELECT * from examtbl WHERE examid='$id'");
 
  while($exam = mysql_fetch_array($getselect))
  {  

     $ename=$exam['examname'];
	 $duration=$exam['duration'];
	 $per=$exam['percentage'];
	 $reexam=$exam['reexam'];
	 $deadline=$exam['deadline'];
	 $sname=$exam['subname'];
     $dname=$exam['deptname'];
	 $cname=$exam['catname'];
	 $rule=$exam['instruction'];
?>
   <?php include("header.php");?>
	<ol class="breadcrumb">
	            <li class="breadcrumb-item"><h4><a href="addexam.php">Add Exam</a></h4></li>
                <center><li class="breadcrumb-item"><h4><a href="">Edit Exam</a></h4></li></center>
            </ol>
<!--grid-->
 	<div class="validation-system">
 		
 		<div class="validation-form">
 	<!---->
  	   
        <form action="" method="post">
		    <div class="col-md-12 form-group1">
              <label class="control-label">Exam Name</label>
              <input type="text" class="form-control"  placeholder="Exam" name="examnm" value= "<?php echo $ename; ?>" required="" autocomplete="off">
            </div>
			<div class="clearfix"> </div>
			<div class="vali-form">
			<div class="col-md-6 form-group1 ">
              <label class="control-label">Duration(Minutes)</label>
              <input type="number" class="form-control"  placeholder="Enter exam duration" name="duration" value= "<?php echo $duration; ?>" required="" autocomplete="off">
            </div>
		    <div class="col-md-6 form-group1 form-last ">
              <label class="control-label">Pass Percentage(%)</label>
              <input type="number" class="form-control" placeholder="Pass Percentage" name="per" value= "<?php echo $per; ?>" required="" autocomplete="off">
            </div>
			<div class="clearfix"> </div>
			</div>
			<div class="col-md-12 form-group2 group-mail form-last">
              <label class="control-label">Reexam (if you take exam then show it again after some days)</label>
              <input type="number" class="form-control" placeholder="Enter days to attempt" name="reexam" value= "<?php echo $reexam; ?>" required="" autocomplete="off">
            </div>
			<div class="clearfix"> </div>
			
			<div class="col-md-12 form-group1 group-mail">
              <label class="control-label" >Deadline</label>
              <input type="date" class="form-control1 ng-invalid ng-invalid-required" ng-model="model.date" name="date" value= "<?php echo $deadline; ?>" required autocomplete="off" placeholder="Select deadline">
            </div>
			<div class="clearfix"> </div>
              <div class="col-md-12 form-group2 group-mail ">
              
            <?php $sql = "SELECT subname FROM subjecttbl where status='1'";
                $result = mysql_query($sql); ?>
            <label class="control-label">Select Subject</label>
            <select name="subnm" id="">
                <option value="<?php echo $sname;?>" <?php if(!isset($_POST['subname']) || (isset($_POST['subname']) && empty($_POST['subname']))) { ?>selected<?php } ?>><?php echo $sname;?></option>
                <?php 
                while($row =mysql_fetch_assoc($result)) {
                ?>
                <option value="<?php echo $row['subname']; ?>" <?php if(isset($_POST['subname']) && $_POST['subname'] == $row['subname']) { ?>selected<?php } ?>><?php echo $row['subname']; ?></option>
                <?php } ?>
            </select>
			</div>
			
			<div class="col-md-12 form-group2 group-mail">
              
            <?php $sql = "SELECT deptname FROM departmenttbl where status='1'";
                $result = mysql_query($sql); ?>
            <label class="control-label">Select Department </label>
            <select name="deptnm" id="">
                <option value="<?php echo $dname;?>" <?php if(!isset($_POST['deptname']) || (isset($_POST['deptname']) && empty($_POST['deptname']))) { ?>selected<?php } ?>><?php echo $dname;?></option>
                <?php 
                while($row =mysql_fetch_assoc($result)) {
                ?>
                <option value="<?php echo $row['deptname']; ?>" <?php if(isset($_POST['deptname']) && $_POST['deptname'] == $row['deptname']) { ?>selected<?php } ?>><?php echo $row['deptname']; ?></option>
                <?php } ?>
            </select>
			</div>
			
			<div class="clearfix"> </div>
            <div class="col-md-12 form-group2 group-mail">
              
            <?php $sql1 = "SELECT DISTINCT(catname) AS catname FROM categorytbl where cstatus='1'";
                $result1 = mysql_query($sql1); ?>
            <label class="control-label">Select Category </label>
            <select name="catnm" id="">
                <option value="<?php echo $cname;?>" <?php if(!isset($_POST['catname']) || (isset($_POST['catname']) && empty($_POST['catname']))) { ?>selected<?php } ?>><?php echo $cname;?></option>
                <?php 
                while($row =mysql_fetch_assoc($result1)) {
                ?>
                <option value="<?php echo $row['catname']; ?>" <?php if(isset($_POST['catname']) && $_POST['catname'] == $row['catname']) { ?>selected<?php } ?>><?php echo $row['catname']; ?></option>
                <?php } ?>
            </select>
  
           </div>
		   
		    <div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Terms and Condition</label>
			  
              <textarea  placeholder="Enter Terms and conditions" name="instructions"  required=""><?php echo $rule;?></textarea>
             </div>
		   
             <div class="clearfix"> </div>
            <div class="col-md-12 form-group">
              <button type="submit" class="btn btn-primary" name="update">Update</button>
              <button type="reset" class="btn btn-default" name="reset">Reset</button>
            </div>
		
          <div class="clearfix"> </div>
		  
		  
        
    
		</form>
  <?php }} 
    mysql_close($con);
	?>
 	<!---->
 </div>

</div>
 	<!--//grid-->
	
   
<?php include("footer.php"); ?>
</div></div></div>
<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		<!-- /script-for sticky-nav -->
		<script>
							var toggle = true;
										
							$(".sidebar-icon").click(function() {                
							  if (toggle)
							  {
								$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
								$("#menu span").css({"position":"absolute"});
							  }
							  else
							  {
								$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
								setTimeout(function() {
								  $("#menu span").css({"position":"relative"});
								}, 400);
							  }
											
											toggle = !toggle;
										});
							</script>
<!--js -->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
   <!-- /Bootstrap Core JavaScript -->	   
<!-- morris JavaScript -->	
<script src="js/raphael-min.js"></script>
<script src="js/morris.js"></script>
<script>
	$(document).ready(function() {
		//BOX BUTTON SHOW AND CLOSE
	   jQuery('.small-graph-box').hover(function() {
		  jQuery(this).find('.box-button').fadeIn('fast');
	   }, function() {
		  jQuery(this).find('.box-button').fadeOut('fast');
	   });
	   jQuery('.small-graph-box .box-close').click(function() {
		  jQuery(this).closest('.small-graph-box').fadeOut(200);
		  return false;
	   });
	   
	    //CHARTS
	    function gd(year, day, month) {
			return new Date(year, month - 1, day).getTime();
		}
		
		graphArea2 = Morris.Area({
			element: 'hero-area',
			padding: 10,
        behaveLikeLine: true,
        gridEnabled: false,
        gridLineColor: '#dddddd',
        axes: true,
        resize: true,
        smooth:true,
        pointSize: 0,
        lineWidth: 0,
        fillOpacity:0.85,
			data: [
				{period: '2014 Q1', iphone: 2668, ipad: null, itouch: 2649},
				{period: '2014 Q2', iphone: 15780, ipad: 13799, itouch: 12051},
				{period: '2014 Q3', iphone: 12920, ipad: 10975, itouch: 9910},
				{period: '2014 Q4', iphone: 8770, ipad: 6600, itouch: 6695},
				{period: '2015 Q1', iphone: 10820, ipad: 10924, itouch: 12300},
				{period: '2015 Q2', iphone: 9680, ipad: 9010, itouch: 7891},
				{period: '2015 Q3', iphone: 4830, ipad: 3805, itouch: 1598},
				{period: '2015 Q4', iphone: 15083, ipad: 8977, itouch: 5185},
				{period: '2016 Q1', iphone: 10697, ipad: 4470, itouch: 2038},
				{period: '2016 Q2', iphone: 8442, ipad: 5723, itouch: 1801}
			],
			lineColors:['#ff4a43','#a2d200','#22beef'],
			xkey: 'period',
            redraw: true,
            ykeys: ['iphone', 'ipad', 'itouch'],
            labels: ['All Visitors', 'Returning Visitors', 'Unique Visitors'],
			pointSize: 2,
			hideHover: 'auto',
			resize: true
		});
		
	   
	});
	</script>
	<?php include("sidebar.php"); ?>
	<?php }
else
	header('location:login.php');
?>
</body>
</html>