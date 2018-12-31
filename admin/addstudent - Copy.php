
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
 include("connect.php");
 include("header.php"); ?>

	<ol class="breadcrumb">
                <center><li class="breadcrumb-item"><h4><a href="">Add Student</a></h4></li></center>
            </ol>
<!--grid-->
 	<div class="validation-system">
 		
 		<div class="validation-form">
 	<!---->
  	    
        <form method="post" action="addstudent.php" enctype="multipart/form-data">
         	<div class="vali-form">
            <div class="col-md-6 form-group1">
              <label class="control-label">Firstname</label>
              <input type="text" placeholder="Firstname" name="fname" required="">
            </div>
            <div class="col-md-6 form-group1 form-last">
              <label class="control-label">Lastname</label>
              <input type="text" placeholder="Lastname" name="lname" required="">
            </div>
			
            <div class="clearfix"> </div>
            </div>
            <div class="col-md-6 form-group2">
			<label class="control-label">Gender</label>
              <select name="gender">
            	<option value="Male">Male</option>
            	<option value="Female">Female</option>
            </select>
			</div>					
			<div class="col-md-6 form-group2 group-mail form-last">
			 <label class="control-label">Blood Group</label>
              <select name="blood">
            	<option value="A">A</option>
            	<option value="B">B</option>
            	<option value="A+">A+</option>
            	<option value="A-">A-</option>
            	<option value="B+">B+</option>
				<option value="B-">B-</option>
				<option value="AB+">AB+</option>
				<option value="AB-">AB-</option>
				<option value="O+">O+</option>
				<option value="O-">O-</option>
            </select>
            </div>						
		    <div class="clearfix"> </div>
           
            <div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Email</label>
              <input type="text" placeholder="Email" name="email" required="">
            </div>
             <div class="clearfix"> </div>
            
            <div class="col-md-6 form-group1">
              <label class="control-label">Phone Number</label>
              <input type="text" placeholder="Phone Number" name="phone" required="">
            </div>
            <div class="col-md-6 form-group1 form-last group-mail">
              <label class="control-label">Mobile Number</label>
              <input type="text" placeholder="Mobile Number" name="mobile" required="">
            </div>
            <div class="clearfix"> </div>
            
             <div class="vali-form vali-form1">
            <div class="col-md-6 form-group1">
              <label class="control-label">Create a password</label>
              <input type="password" placeholder="Create a password" name="pass" required="">
            </div>
            <div class="col-md-6 form-group1 form-last">
              <label class="control-label">Repeated password</label>
              <input type="password" placeholder="Repeated password" name="cpass" required="">
            </div>
            <div class="clearfix"> </div>
            </div>
            
            <div class="col-md-12 form-group1 group-mail">
              <label class="control-label ">Date Of Birth</label>
              <input type="date" class="form-control1 ng-invalid ng-invalid-required" ng-model="model.date" name="dob" required="">
            </div>
             <div class="clearfix"> </div>
            
			 <div class="col-md-12 form-group1 ">
              <label class="control-label">Address</label>
              <textarea  placeholder="Address..." required="" name="address"></textarea>
             </div>
			
			  <div class="clearfix"> </div>
			  <div class="vali-form">
              <div class="col-md-6 form-group2 ">
              <?php $sql = "SELECT deptname FROM departmenttbl where status='1'";
                $result = mysql_query($sql); ?>
            <label class="control-label">Select Department </label>
            <select name="deptnm" id="">
                <option value="" <?php if(!isset($_POST['deptname']) || (isset($_POST['deptname']) && empty($_POST['deptname']))) { ?>selected<?php } ?>>--Select--</option>
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
                <option value="" <?php if(!isset($_POST['catname']) || (isset($_POST['deptname']) && empty($_POST['catname']))) { ?>selected<?php } ?>>--Select--</option>
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
              <input type="file"  name="ufile" required="">
            </div>
             <div class="clearfix"> </div>
			  
		  
            <div class="col-md-12 form-group">
              <button type="submit" class="btn btn-primary" name="submit">Submit</button>
              <button type="reset" class="btn btn-default"  name="reset">Reset</button>
            </div>
          <div class="clearfix"> </div>
        </form>
    
 	<!---->
 </div>

</div>
 	<!--//grid-->
	
<?php
	  
	    if(isset($_POST['submit']))
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
		   //$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?";
           //$password = substr( str_shuffle( $chars ), 0, 8 );
           //$password1= ($password);
		 
		$imgFile = $_FILES['ufile']['name'];
		$tmp_dir = $_FILES['ufile']['tmp_name'];
		$imgSize = $_FILES['ufile']['size'];
	    if(empty($imgFile)){
			$errMSG = "Please Select Image File.";
		}
		else
		{
			$upload_dir = '../student/uploaded/';
			$imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION));
			$valid_extensions = array('jpeg', 'jpg', 'png', 'gif');
			$userprofile = rand(1000,1000000).".".$imgExt;
			if(in_array($imgExt, $valid_extensions)){
				if($imgSize < 5000000)				{
					move_uploaded_file($tmp_dir,$upload_dir.$userprofile);
				}
				else{
					$errMSG = "Sorry, Your File Is Too Large To Upload. It Should Be Less Than 5MB.";
				}
			}
			else{
				$errMSG = "Sorry, only JPG, JPEG, PNG & GIF Extension Files Are Allowed.";		
			}
		
		}
		
		$result = mysql_query("SELECT * FROM studenttbl WHERE email='$email'");
        $data = mysql_num_rows($result);
        if(($data)==0){
	       $query="insert into studenttbl(studid,fname,lname,gender,blood,email,phone,mobile,password,cpassword,dob,address,deptname,catname,file) values('','$fname','$lname','$gender','$blood','$email','$phone','$mobile','$password','$cpassword','$dob','$address','$deptname','$catname','$userprofile')";
	 
           $result= mysql_query($query);
	 
	       if($result)
		   {
		     echo "record inserted successfully";
           }
          else
		   mysql_error();
		      }
	      
		else{
           echo "This email is already registered, Please try another email...";
            }
	 
     	 mysql_close($con);
         }

?>	
	
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