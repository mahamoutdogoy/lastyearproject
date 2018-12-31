
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
date_default_timezone_set('Asia/Kolkata');	
 //session_start();
 include("connect.php");
 include("header.php"); ?>

	<ol class="breadcrumb">
                <center><li class="breadcrumb-item"><h4><a href="">Add Notice</a></h4></li></center>
            </ol>
<!--grid-->
 	<div class="validation-system">
 		
 		<div class="validation-form">
 	<!---->
  	    
        <form method="post" action="addnotice.php">
         	<div class="vali-form">
            <div class="col-md-6 form-group1">
              <label class="control-label">Title</label>
              <input type="text" placeholder="Title" name="title" required="">
            </div>
            </div>
           
            <div class="clearfix"> </div>
			 <div class="col-md-12 form-group1 ">
              <label class="control-label">Description</label>
              <textarea  placeholder="Description..." required="" name="description"></textarea>
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
           
           
		   //echo $post_date ;exit;
           $title =  $_POST['title'];
           $description =  $_POST['description'];
		   $post_date = date('d/m/Y h:i:s');
		   $query="insert into noticetbl(noteid,notice,description,postdate,lastupdate) values('','$title','$description','$post_date','$post_date')";
	 
           $result= mysql_query($query);
	 
	       if($result)
		   {
		     echo "record inserted successfully";
           }
          else
		   mysql_error();
		}   
	      mysql_close($con);
         
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