
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
                <center><li class="breadcrumb-item"><h4><a href="">Add Exam</a></h4></li></center>
            </ol>
<!--grid-->
 	<div class="validation-system">
 		
 		<div class="validation-form">
 	<!---->
  	    
        <form action="addexam.php" method="post">
		   
		    <div class="col-md-12 form-group1">
              <label class="control-label">Exam Name</label>
              <input type="text" class="form-control"  placeholder="Exam" name="examnm" required="" autocomplete="off">
            </div>
			<div class="clearfix"> </div>
			<div class="vali-form">
			<div class="col-md-6 form-group1 ">
              <label class="control-label">Duration(Minutes)</label>
              <input type="number" class="form-control"  placeholder="Enter exam duration" name="duration" required="" autocomplete="off">
            </div>
		    <div class="col-md-6 form-group1 form-last ">
              <label class="control-label">Pass Percentage(%)</label>
              <input type="number" class="form-control" placeholder="Pass Percentage" name="per" required="" autocomplete="off">
            </div>
			<div class="clearfix"> </div>
			</div>
			<div class="col-md-12 form-group2 group-mail form-last">
              <label class="control-label">Reexam (if you take exam then show it again after some days)</label>
              <input type="number" class="form-control" placeholder="Enter days to attempt" name="reexam" required="" autocomplete="off">
            </div>
			<div class="clearfix"> </div>
			
			<div class="col-md-12 form-group1 group-mail">
              <label class="control-label" >Deadline</label>
              <input type="date" class="form-control1 ng-invalid ng-invalid-required" ng-model="model.date" name="date" required autocomplete="off" placeholder="Select deadline">
            </div>
			<div class="clearfix"> </div>
              <div class="col-md-12 form-group2 group-mail ">
              
            <?php $sql = "SELECT DISTINCT(subname) AS subname FROM subjecttbl where status='1'";
                $result = mysql_query($sql); ?>
            <label class="control-label">Select Subject</label>
            <select name="subnm" id="">
                <option value="" <?php if(!isset($_POST['subname']) || (isset($_POST['subname']) && empty($_POST['subname']))) { ?>selected<?php } ?>>--Select--</option>
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
                <option value="" <?php if(!isset($_POST['deptname']) || (isset($_POST['deptname']) && empty($_POST['deptname']))) { ?>selected<?php } ?>>--Select--</option>
                <?php 
                while($row =mysql_fetch_assoc($result)) {
                ?>
                <option value="<?php echo $row['deptname']; ?>" <?php if(isset($_POST['deptname']) && $_POST['deptname'] == $row['deptname']) { ?>selected<?php } ?>><?php echo $row['deptname']; ?></option>
                <?php } ?>
            </select>
			</div>
			
			
            <div class="col-md-12 form-group2 group-mail">
              
            <?php $sql1 = "SELECT DISTINCT(catname) AS catname FROM categorytbl where cstatus='1'";
                $result1 = mysql_query($sql1); ?>
            <label class="control-label">Select Category </label>
            <select name="catnm" id="">
                <option value="" <?php if(!isset($_POST['catname']) || (isset($_POST['catname']) && empty($_POST['catname']))) { ?>selected<?php } ?>>--Select--</option>
                <?php 
                while($row =mysql_fetch_assoc($result1)) {
                ?>
                <option value="<?php echo $row['catname']; ?>" <?php if(isset($_POST['catname']) && $_POST['catname'] == $row['catname']) { ?>selected<?php } ?>><?php echo $row['catname']; ?></option>
                <?php } ?>
            </select>
  
           </div>
		   
		    <div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Terms and Condition</label>
			  
              <textarea  placeholder="Enter Terms and conditions" name="instructions" required=""></textarea>
             </div>
		   
             <div class="clearfix"> </div>
            <div class="col-md-12 form-group">
              <button type="submit" class="btn btn-primary" name="submit">Submit</button>
              <button type="reset" class="btn btn-default" name="reset">Reset</button>
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
           $examnm=$_POST['examnm'];
           $duration=$_POST['duration'];
		   $percent=$_POST['per'];
           $reexam=$_POST['reexam'];
		   $deadline=$_POST['date'];
		   $subnm=$_POST['subnm'];
		   $deptnm=$_POST['deptnm'];
		   $catnm=$_POST['catnm'];
		   $terms=$_POST['instructions'];
		   
		   $result = mysql_query("SELECT * FROM examtbl WHERE examname='$examnm'");
        $data = mysql_num_rows($result);
        if(($data)==0)
		{
	       $query="insert into examtbl(examid,examname,duration,percentage,reexam,deadline,subname,deptname,catname,instruction,status)values('','$examnm','$duration','$percent','$reexam','$deadline','$subnm','$deptnm','$catnm','$terms','')";
	 
           $result= mysql_query($query);
	        
	       if($result)
		      echo "record inserted successfully";
	       else
		   mysql_error();
	    }
		else{
           echo "This exam is already sheduled, Please add another exam...";
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