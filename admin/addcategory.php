
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
include("connect.php");?>
<?php include("header.php"); ?>


	<ol class="breadcrumb">
                <center><li class="breadcrumb-item"><h4><a href="">Add Category</a></h4></li></center>
            </ol>
<!--grid-->



 	<div class="validation-system">
 		
 		<div class="validation-form">
 	<!---->
  	    
        <form action="addcategory.php" method="post">
		    <div class="col-md-6 form-group1">
              <label class="control-label">Category Name</label>
              <input type="text" class="form-control" placeholder="Category" name="catnm" required="">
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
             <div class="clearfix"> </div>
            <div class="col-md-12 form-group">
              <button type="submit" class="btn btn-primary" name="submit">Submit</button>
              <button type="reset" class="btn btn-default" value="reset">Reset</button>
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
           $name=$_POST['catnm'];
		   $deptnm=$_POST['deptnm'];
	       $query="insert into categorytbl(cid,catname,deptname)values('','$name','$deptnm')";
	 
           $result= mysql_query($query);
	 
	       if($result)
		      echo "record inserted successfully";
	       else
		   mysql_error();
	   
	   
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