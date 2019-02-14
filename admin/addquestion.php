
<!DOCTYPE HTML>
<html>
<head>
<title>
</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Pooled Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<link rel="stylesheet" href="hideshow/css/style.css">
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
                <center><li class="breadcrumb-item"><h4><a href="">Add Question</a></h4></li></center>
            </ol>
<!--grid-->
 	<div class="validation-system">
 		
 		<div class="validation-form">
 	<!---->
  	    
        <form action="aq.php" method="post" >
		     <div class="col-md-12 form-group2 group-mail">
            <?php $sql = "SELECT * FROM examtbl where status='1'";
			
                $result = mysql_query($sql); 
				
				?>
            <label class="control-label">Select Examname</label>
            <select name="examnm" id="">
                <option value="" <?php if(!isset($_POST['examname']) || (isset($_POST['examname']) && empty($_POST['examname']))) { ?>selected<?php } ?>>--Select--</option>
                <?php 
                while($row =mysql_fetch_assoc($result)) {
                ?>
                <option value="<?php echo $row['examid']; ?>" <?php if(isset($_POST['examname']) && $_POST['examname'] == $row['examname']) { ?>selected<?php } ?>><?php echo $row['examname']; ?></option>
                <?php } ?>
				
				
            </select>
			</div>
			
             <div class="clearfix"> </div>
			 
			 
            <div class="col-md-12 form-group2 group-mail ">
			
			<div class="col-md-12 form-group1 group-mail">
              <label class="control-label">Question ?</label>
              <textarea class="form-control" rows="4"  name="question" id="editor1" style="resize: none;" ></textarea>
            </div>
		  <div class="clearfix"> </div>
             

             <label class="control-label">Select Question Type</label>
            <select name="menu" id="colorselector"> 
              			  <option value="" >--Select--</option>
                      <option value="mcq" >multiple choice questions </option>
                      <option value="wtword" >write the word </option>
              			  <option value="match" >match the following word </option>
              			  <option value="landwt" >listen and write </option>
              			  <option value="landlout" > listen and list out  </option>
              			  <option value="find" > finding the words</option>
              			  <option value="fill" >filling the blank space  </option>
            </select>
		    </div>
			 <div class="clearfix"> </div>
			 
			 
			 
			 <div id="find" class="colors find"> 
  
              
            
          <div class="col-md-12 form-group2 group-mail">
              <label class="control-label">Option 1</label>
              <textarea class="form-control" rows="3" name="opt_f1" ></textarea>
          </div>
		  <div class="clearfix"> </div>
            
          <div class="col-md-12 form-group2 group-mail">
               <label class="control-label">Option 2</label>
               <textarea class="form-control" rows="3" name="opt_f2" ></textarea>
          </div>
		  <div class="clearfix"> </div>
          <div class="col-md-12 form-group2 group-mail">
               <label class="control-label">Option 3</label>
               <textarea class="form-control" rows="3"  name="opt_f3" ></textarea>
          </div>
		  <div class="clearfix"> </div>
          <div class="col-md-12 form-group2 group-mail">
               <label class="control-label">Option 4</label>
               <textarea class="form-control" rows="3" name="opt_f4" ></textarea>
          </div> 
          <div class="clearfix"> </div>		  
          <div class="col-md-12 form-group2 group-mail">
               <label class="control-label">Correct Option Name</label>
               <input type="text" class="form-control"  name="correct_op_find" "required">
          </div>
		  <div class="clearfix"> </div>
          </div> 
			 
             <div id="mcq" class="colors mcq"> 
  
              
            
          <div class="col-md-12 form-group2 group-mail">
              <label class="control-label">Option 1</label>
              <textarea class="form-control" rows="3" name="opt_1" ></textarea>
          </div>
		  <div class="clearfix"> </div>
            
          <div class="col-md-12 form-group2 group-mail">
               <label class="control-label">Option 2</label>
               <textarea class="form-control" rows="3" name="opt_2" ></textarea>
          </div>
		  <div class="clearfix"> </div>
          <div class="col-md-12 form-group2 group-mail">
               <label class="control-label">Option 3</label>
               <textarea class="form-control" rows="3"  name="opt_3" ></textarea>
          </div>
		  <div class="clearfix"> </div>
          <div class="col-md-12 form-group2 group-mail">
               <label class="control-label">Option 4</label>
               <textarea class="form-control" rows="3" name="opt_4" ></textarea>
          </div> 
          <div class="clearfix"> </div>		  
          <div class="col-md-12 form-group2 group-mail">
               <label class="control-label">Correct Option Name</label>
               <input type="text" class="form-control"  name="correct_op" "required">
          </div>
		  <div class="clearfix"> </div>
          </div> 
  
  
          <div id="landwt" class="colors landwt"> 
		  
		  
		 <div class="col-md-12 form-group2 group-mail">
               <label class="control-label">Enter Listen And Write input</label>
               <input type="text" class="form-control"  name="correct_op_lwt" onkeyup="this.value = this.value.toUpperCase();" required">
          </div>
		  <div class="clearfix"> </div>
		  
		  
		  </div>
  
          <div id="wtword" class="colors wtword">  
		  
		  
		  <div class="col-md-12 form-group2 group-mail">
               <label class="control-label">Correct Word</label>
               <input type="text" class="form-control"  name="correct_op_word" onkeyup="this.value = this.value.toUpperCase();" required">
          </div>
		  <div class="clearfix"> </div>
		  
		  </div>
		 
		 <div id="fill" class="colors fill"> 
		  
		  
		 <div class="col-md-12 form-group2 group-mail">
               <label class="control-label">Correct Word</label>
               <input type="text" class="form-control"  name="correct_op_fill" onkeyup="this.value = this.value.toUpperCase();" required">
          </div>
		  <div class="clearfix"> </div>
		  
		  
		  </div>
	     
		  <div id="find" class="colors find">  
		  
		 
		  <!--div class="col-md-12 form-group2 group-mail">
               <label class="control-label">Correct Word</label>
               <input type="text" class="form-control"  name="correct_op" "required">
          </div-->
		  <div class="clearfix"> </div>
		  
		  </div>
		 
		 <div id="match" class="colors match"> 
		 
		  <!--div class="col-md-5 form-group1">
              <label class="control-label">Left Title</label>
              <input type="text" placeholder="Left Title" name="lt" >
            </div>
            <div class="col-md-5 form-group1 form-last group-mail">
              <label class="control-label">Right Title</label>
              <input type="text" placeholder="Right Title" name="rt" >
            </div-->		
			
            <div class="clearfix"> </div>
		 
		  <div class="col-md-5 form-group1">
              <label class="control-label">Left Option 1</label>
              <input type="text" placeholder="Option 1" name="lop1" >
            </div>
            <div class="col-md-5 form-group1 form-last group-mail">
              <label class="control-label">Right Option 1</label>
              <input type="text" placeholder="Option 1" name="rop1" >
            </div>
			<!--div class="col-md-2 form-group1 form-last group-mail">
              <label class="control-label">Answar 1</label>
              <input type="text" placeholder="1" name="a1" >
            </div-->
            <div class="clearfix"> </div>
		 
		 
		 <div class="col-md-5 form-group1">
              <label class="control-label">Left Option 2</label>
              <input type="text" placeholder="Option 2" name="lop2">
            </div>
            <div class="col-md-5 form-group1 form-last group-mail">
              <label class="control-label">Right Option 2</label>
              <input type="text" placeholder="Option 2" name="rop2" >
            </div>
			<!--div class="col-md-2 form-group1 form-last group-mail">
              <label class="control-label">Answar 2</label>
              <input type="text" placeholder="2" name="a2" >
            </div-->
            <div class="clearfix"> </div>
		 
		 
		  
		 <div class="col-md-5 form-group1">
              <label class="control-label">Left Option 3</label>
              <input type="text" placeholder="Option 3" name="lop3" >
            </div>
            <div class="col-md-5 form-group1 form-last group-mail">
              <label class="control-label">Right Option 3</label>
              <input type="text" placeholder="Option 3" name="rop3" >
            </div>
			<!--div class="col-md-2 form-group1 form-last group-mail">
              <label class="control-label">Answar 3</label>
              <input type="text" placeholder="3" name="a3" >
            </div-->
            <div class="clearfix"> </div>
		 
		 
		 <div class="col-md-5 form-group1">
              <label class="control-label">Left Option 4</label>
              <input type="text" placeholder="Option 4" name="lop4" >
            </div>
            <div class="col-md-5 form-group1 form-last group-mail">
              <label class="control-label">Right Option 4</label>
              <input type="text" placeholder="Option 4" name="rop4" >
            </div>
			<!--div class="col-md-2 form-group1 form-last group-mail">
              <label class="control-label">Answar 4</label>
              <input type="text" placeholder="4" name="a4" >
            </div-->
			<div class="clearfix"> </div>		  
          <div class="col-md-12 form-group2 group-mail">
               <label class="control-label">Correct Option Name (like A-D)</label>
               <input type="text" class="form-control"  name="correct_op_match" "required">
          </div>
		  
            <div class="clearfix"> </div>
		 </div>
		 
			  
 	  
			 
		  
            <div class="col-md-12 form-group">
			
             <input type="submit" class="btn btn-primary" name="submit">
              <button type="reset" class="btn btn-default" value="reset">Reset</button>
            </div>
		
          <div class="clearfix"> </div>
		  
		  
        </form>
     
  
</div>
	
 	<!---->
 </div>

</div>
 	<!--//grid-->
	
<?php include("footer.php"); ?>
</div></div>

	<?php include("sidebar.php"); ?>
	<?php }
else
	header('location:login.php');
?>
	</div>

	 <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	 <script  src="hideshow/js/index.js"></script>
	 
	  <script src="ckeditor/ckeditor.js"></script>
<script>
    $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
CKEDITOR.replace("editor1");
CKEDITOR.replace("editor2");
CKEDITOR.replace("editor3");
CKEDITOR.replace("editor4");
CKEDITOR.replace("editor5");
    //bootstrap WYSIHTML5 - text editor
$('.textarea').wysihtml5();
  });

</script>  
	 
	 
</body>
</html>