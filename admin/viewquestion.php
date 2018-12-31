
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
include("header.php"); ?>

	<ol class="breadcrumb">
	                  <center><li class="breadcrumb-item"><h4><a href="">Question List</a></h4></li></center>
            </ol>
<!--grid
 	<div class="validation-system">
 		
 		<div class="validation-form">
 	-->
  	    
<?php

include("connect.php");
$examid=$_GET['eid'];
$sql="select qid,examid,questionname,op1,op2,op3,op4,correctop from questiontbl WHERE examid = '$examid'";
$result = mysql_query($sql);
?>
<div class="agile-grids">
<div class="agile-tables">
<div class="w3l-table-info">
<h2>List of question</h2>
<table width="100%" id="table">
<thead>
<tr>
               <th align="left">Question Id</th>
			   <th align="left">Exam Id</th>
			   <th align="left">Question</th>
			   <th align="left">Option1</th>
			   <th align="left">Option2</th>
			   <th align="left">Option3</th>
			   <th align="left">Option4</th>
			   <th align="left">Correct</th>
			   <th align="left">Action</th>
			    
</tr>
</thead>
<tbody>
<?php while($rows=mysql_fetch_assoc($result))
{
	extract($rows);
	?>

    <tr>
    <td><?php echo $rows['qid'];?></td>
	<td><?php echo $rows['examid'];?></td>
    <td><?php echo $rows['questionname'];?></td>
	<td><?php echo $rows['op1'];?></td>
	<td><?php echo $rows['op2'];?></td>
	<td><?php echo $rows['op3'];?></td>
	<td><?php echo $rows['op4'];?></td>
	<td><?php echo $rows['correctop'];?></td>
	<td>
	 
    <ul  style="list-style: none;" >
          <li class="dropdown ">
		  
		  <button href="#" class="dropdown-toggle btn bg-primary" data-toggle="dropdown" aria-expanded="false">
			 select
		  </button>
		      <ul class="dropdown-menu drp-mnu">
		          <li><a href="deletequestion.php?id=<?php echo $rows['qid']; ?>" 
                  onclick="return confirm('Are you sure you wish to delete this Record?');">Delete Question </a></li>
 
	               <li><a href="editquestion.php?id=<?php echo $rows['qid']; ?>"> Edit Question </a></li>
			      
			  </ul>
	      </li>
	</ul>	 
	
	</td>
	
    </tr>
<?php }?>
</tbody>
</table>


</div>
</div>
</div>
	
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