
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
           $fname=$_POST['fname'];
		   $lname=$_POST['lname'];
		   $gender=$_POST['gender'];
		   $blood=$_POST['blood'];
		   $email=$_POST['email'];
		   $phone=$_POST['phone'];
		   $mobile=$_POST['mobile'];
		   $password=$_POST['pass'];
		   $cpassword=$_POST['cpass'];
		   $dob=$_POST['dob'];
		   $address=$_POST['address'];
		   $deptname=$_POST['deptnm'];
		   $catname=$_POST['catnm'];
		  
		 $imgFile = $_FILES['ufile']['name'];
		$tmp_dir = $_FILES['ufile']['tmp_name'];
		$imgSize = $_FILES['ufile']['size'];
		if($imgFile)
		{
			$upload_dir = 'uploaded/';
			$imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION));
			$valid_extensions = array('jpeg', 'jpg', 'png', 'gif');
			$userprofile = rand(1000,1000000).".".$imgExt;
			if(in_array($imgExt, $valid_extensions))
			{			
				if($imgSize < 5000000)
				{
					unlink($upload_dir.$user['file']);
					move_uploaded_file($tmp_dir,$upload_dir.$userprofile);
				}
				else
				{
					$errMSG = "Sorry, Your File Is Too Large To Upload. It Should Be Less Than 5MB.";
				}
			}
			else
			{
				$errMSG = "Sorry, only JPG, JPEG, PNG & GIF Extension Files Are Allowed.";		
			}	
		}
		else
		{
			$userprofile=$_POST['old_slider'];
		}
		  
		   
		   $updated=mysql_query("UPDATE usertbl SET 
                fname='$fname',lname='$lname',gender='$gender',blood='$blood',email='$email',phone='$phone',mobile='$mobile',password='$password',cpassword='$cpassword',dob='$dob',address='$address',deptname='$deptname',catname='$catname',file='$userprofile' WHERE uid='$id'") or die();
       if($updated)
      {
         header("Location:userlist.php");
      }
	       
      }
	   }
	   ob_end_flush();
?>
<?php 
  

  if(isset($_GET['id']))
  {
  $id=$_GET['id'];
 
  $getselect=mysql_query("SELECT * from usertbl  WHERE uid='$id'");
 
  while($user = mysql_fetch_array($getselect))
  {
	  
	$fnm=$user['fname'];
    $lnm=$user['lname'];
	$sex=$user['gender'];
	$bld=$user['blood'];
	$uemail=$user['email'];
	$upass=$user['password'];
	$ucpass=$user['cpassword'];
	$uphone=$user['phone']; 
	$umobile=$user['mobile']; 
	$udob=$user['dob'];
	$uadd=$user['address'];
	$udept=$user['deptname'];
	$ucat=$user['catname'];
	$ufile=$user['file'];
  
	
?>
   <?php include("header.php");?>
	<ol class="breadcrumb">
                <center><li class="breadcrumb-item"><h4><a href="">Edit User</a></h4></li></center>
            </ol>
<!--grid-->
 	<div class="validation-system">
 		
 		<div class="validation-form">
 	<!---->
  	   
        <form method="post" action="" enctype="multipart/form-data">
         	<div class="vali-form">
            <div class="col-md-6 form-group1">
              <label class="control-label">Firstname</label>
              <input type="text" placeholder="Firstname" name="fname" value="<?php echo $fnm; ?>" required="">
            </div>
            <div class="col-md-6 form-group1 form-last">
              <label class="control-label">Lastname</label>
             <input type="text" placeholder="Firstname" name="lname" value="<?php echo $lnm; ?>" required="">
            </div>
			
            <div class="clearfix"> </div>
            </div>
            <div class="col-md-6 form-group2">
			<label class="control-label">Gender</label>
              <select name="gender">
            	<option value="Male"<?php if($sex == 'Male') { ?> selected="selected"<?php } ?>>Male</option>
            	<option value="Female"<?php if($sex == 'Female') { ?> selected="selected"<?php } ?>>Female</option>
            </select>
			</div>					
			<div class="col-md-6 form-group2 group-mail form-last">
			 <label class="control-label">Blood Group</label>
              <select name="blood">
            	<option value="A"<?php if($bld == 'A') { ?> selected="selected"<?php } ?>>A</option>
            	<option value="B"<?php if($bld == 'B') { ?> selected="selected"<?php } ?>>B</option>
            	<option value="A+"<?php if($bld == 'A+') { ?> selected="selected"<?php } ?>>A+</option>
            	<option value="A-"<?php if($bld == 'A-') { ?> selected="selected"<?php } ?>>A-</option>
            	<option value="B+"<?php if($bld == 'B+') { ?> selected="selected"<?php } ?>>B+</option>
				<option value="B-"<?php if($bld == 'B-') { ?> selected="selected"<?php } ?>>B-</option>
				<option value="AB+"<?php if($bld == 'AB+') { ?> selected="selected"<?php } ?>>AB+</option>
				<option value="AB-"<?php if($bld == 'AB-') { ?> selected="selected"<?php } ?>>AB-</option>
				<option value="O+"<?php if($bld == 'O+') { ?> selected="selected"<?php } ?>>O+</option>
				<option value="O-"<?php if($bld == 'O-') { ?> selected="selected"<?php } ?>>O-</option>
            </select>
            </div>						
		    <div class="clearfix"> </div>
           
            <div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Email</label>
              <input type="text" placeholder="Email" name="email" value="<?php echo $uemail; ?>"  required="">
            </div>
             <div class="clearfix"> </div>
            
            <div class="col-md-6 form-group1">
              <label class="control-label">Phone Number</label>
              <input type="text" placeholder="Phone Number" name="phone" value="<?php echo $uphone; ?>" required="">
            </div>
            <div class="col-md-6 form-group1 form-last group-mail">
              <label class="control-label">Mobile Number</label>
              <input type="text" placeholder="Mobile Number" name="mobile" value="<?php echo $umobile; ?>" required="">
            </div>
            <div class="clearfix"> </div>
            
             <div class="vali-form vali-form1">
            <div class="col-md-6 form-group1">
              <label class="control-label">Create a password</label>
              <input type="password" placeholder="Create a password" name="pass" value="<?php echo $upass; ?>" required="">
            </div>
            <div class="col-md-6 form-group1 form-last">
              <label class="control-label">Repeated password</label>
              <input type="password" placeholder="Repeated password" name="cpass" value="<?php echo $ucpass; ?>" required="">
            </div>
            <div class="clearfix"> </div>
            </div>
            
            <div class="col-md-12 form-group1 group-mail">
              <label class="control-label ">Date Of Birth</label>
              <input type="date" class="form-control1 ng-invalid ng-invalid-required" ng-model="model.date" name="dob" value="<?php echo $udob; ?>" required="">
            </div>
             <div class="clearfix"> </div>
            
			 <div class="col-md-12 form-group1 ">
              <label class="control-label">Address</label>
              <textarea  placeholder="Address..." required="" name="address"><?php echo $uadd; ?></textarea>
             </div>
			
			  <div class="clearfix"> </div>
			  <div class="vali-form">
              <div class="col-md-6 form-group2 ">
              <?php $sql = "SELECT DISTINCT(deptname) AS deptname FROM departmenttbl where status='1'";
                $result = mysql_query($sql); ?>
            <label class="control-label">Select Department </label>
            <select name="deptnm" id="">
                <option value="<?php echo $udept; ?>" <?php if(!isset($_POST['deptname']) || (isset($_POST['deptname']) && empty($_POST['deptname']))) { ?>selected<?php } ?>><?php echo $udept; ?></option>
                <?php 
                while($row =mysql_fetch_assoc($result)) {
                ?>
                <option value="<?php echo $row['deptname']; ?>" <?php if(isset($_POST['deptname']) && $_POST['deptname'] == $row['deptname']) { ?>selected<?php } ?>><?php echo $row['deptname']; ?></option>
                <?php } ?>
            </select>
           
			</div>
            
          
		     <div class="col-md-6 form-group2 form-last group-mail">
		     
              <?php $sql1 = "SELECT DISTINCT(catname) AS catname FROM categorytbl where cstatus='1'";
                $result1 = mysql_query($sql1); ?>
            <label class="control-label">Select Category </label>
            <select name="catnm" id="">
                <option value="<?php echo $ucat; ?>" <?php if(!isset($_POST['catname']) || (isset($_POST['deptname']) && empty($_POST['catname']))) { ?>selected<?php } ?>><?php echo $ucat; ?></option>
                <?php 
                while($row =mysql_fetch_assoc($result1)) {
                ?>
                <option value="<?php echo $row['catname']; ?>" <?php if(isset($_POST['catname']) && $_POST['catname'] == $row['catname']) { ?>selected<?php } ?>><?php echo $row['catname']; ?></option>
                <?php } ?>
            </select>
             </div>
			 
			 <div class="clearfix"> </div>
          </div>
		     
			 <div class="col-md-12 form-group1 group-mail">
              <label class="control-label ">File</label>
			  <p><img src="uploaded/<?php echo $ufile; ?>" height="50" width="50" /></p>
              <input type="file" name="ufile" <?php if(!isset($ufile)){ echo "required"; } ?>>
			  <input type="hidden" name="old_slider" value="<?php if(isset($ufile)){ echo $ufile; } ?>">
            </div>
             <div class="clearfix"> </div>
			  
		  
            <div class="col-md-12 form-group">
              <button type="submit" class="btn btn-primary" name="update">Update</button>
              <button type="reset" class="btn btn-default"  name="reset">Reset</button>
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