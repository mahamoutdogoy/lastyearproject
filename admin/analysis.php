
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
include("fetch_records.php")
?>
<?php include("header.php"); ?>


	<ol class="breadcrumb">
                <center><li class="breadcrumb-item"><h4><a href="">Admin Dashboard</a></h4></li></center>
            </ol>

			
			<!--four-grids here-->
		<div class="four-grids">
					<div class="col-md-3 four-grid">
						<div class="four-agileits">
							<div class="icon">
								<i class="glyphicon glyphicon-list-alt" aria-hidden="true"></i>
							</div>
							<div class="four-text">
								<h3>DEPARTMENTS</h3>
								<h4> <?php echo number_format($departments); ?>  </h4>
								
							</div>
							
						</div>
					</div>
					<div class="col-md-3 four-grid">
						<div class="four-agileinfo">
							<div class="icon">
								<i class="glyphicon glyphicon-user" aria-hidden="true"></i>
							</div>
							<div class="four-text">
								<h3>STUDENTS</h3>
								<h4><?php echo number_format($students); ?></h4>

							</div>
							
						</div>
					</div>
					<div class="col-md-3 four-grid">
						<div class="four-w3ls">
							<div class="icon">
								<i class="glyphicon glyphicon-th-list" aria-hidden="true"></i>
							</div>
							<div class="four-text">
								<h3>EXAMINATIONS</h3>
								<h4><?php echo number_format($examination); ?></h4>
								
							</div>
							
						</div>
					</div>
					<div class="col-md-3 four-grid">
						<div class="four-wthree">
							<div class="icon">
								<i class="glyphicon glyphicon-file" aria-hidden="true"></i>
							</div>
							<div class="four-text">
								<h3>SUBJECTS</h3>
								<h4><?php echo number_format($subjects); ?></h4>
								
							</div>
							
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
<!--//four-grids here-->
	
	<!--four-grids here-->
		<div class="four-grids">
					<div class="col-md-3 four-grid">
						<div class="four-agileits">
							<div class="icon">
								<i class="glyphicon glyphicon-file" aria-hidden="true"></i>
							</div>
							<div class="four-text">
								<h3>CATEGORIES</h3>
								<h4><?php echo number_format($categories); ?>  </h4>
								
							</div>
							
						</div>
					</div>
					<div class="col-md-3 four-grid">
						<div class="four-agileinfo">
							<div class="icon">
								<i class="glyphicon glyphicon-credit-card" aria-hidden="true"></i>
							</div>
							<div class="four-text">
								<h3>NOTICE</h3>
								<h4><?php echo number_format($notice); ?></h4>

							</div>
							
						</div>
					</div>
					<div class="col-md-3 four-grid">
						<div class="four-w3ls">
							<div class="icon">
								<i class="glyphicon glyphicon-question-sign" aria-hidden="true"></i>
							</div>
							<div class="four-text">
								<h3>QUESTIONS</h3>
								<h4><?php echo number_format($questions); ?></h4>
								
							</div>
							
						</div>
					</div>
					<div class="col-md-3 four-grid">
						<div class="four-wthree">
							<div class="icon">
								<i class="glyphicon glyphicon-lock" aria-hidden="true"></i>
							</div>
							<div class="four-text">
								<h3>BANNED STUDENTS</h3>
								<h4><?php echo number_format($banned_students); ?></h4>
								
							</div>
							
						</div>
					</div>

<div class="clearfix"></div>
				</div>


					<div class="col-md-3 four-grid">
						<div class="four-agileits">
							<div class="icon">
								<i class="glyphicon glyphicon-lock" aria-hidden="true"></i>
							</div>
							<div class="four-text">
								<h3>PASSED</h3>
								<h1><?php echo number_format($std_pass); ?></h1>
								
							</div>
							
						</div>
					</div>

					
				</div>

                          



                     <div class="col-md-3 four-grid">
						<div class="four-agileinfo">
							<div class="icon">

							<i class="glyphicon glyphicon-level-up" aria-hidden="true"></i>
								<!-- <i class="glyphicon glyphicon-user" aria-hidden="true"></i>  -->
							</div>
							<div class="four-text">
								<h3>FAILED</h3>
								<h4><?php echo number_format($std_fails); ?></h4>

							</div>
							
						</div>
					</div>






					<div class="col-md-3 four-grid">
						<div class="four-w3ls">
							<div class="icon">

				        <i class="glyphicon glyphicon-registration-mark" aria-hidden="true"></i>
								<!-- <i class="glyphicon glyphicon-user" aria-hidden="true"></i>  -->
							</div>
							<div class="four-text">
								<h3>RANKING</h3>
								<h4><?php echo number_format($questions); ?></h4>

							</div>
							
						</div>
					</div>






					<div class="col-md-3 four-grid">
						<div class="four-wthree">
							<div class="icon">

				        <i class="glyphicon glyphicon-registration-mark" aria-hidden="true"></i>
								<!-- <i class="glyphicon glyphicon-user" aria-hidden="true"></i>  -->
							</div>
							<div class="four-text">
								<h3>TRAINING</h3>
								<h4><?php echo number_format($questions); ?></h4>

							</div>
							
						</div>
					</div>









				<div class="clearfix"></div>
<!--//four-grids here-->





 <?php  
 $connect = mysqli_connect("localhost", "root", "", "myproject");  
 $query = "SELECT status, count(*) as number FROM assesmenttbl GROUP BY status";  
 $result = mysqli_query($connect, $query);  
 ?>  
  
          
           <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['Status', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["status"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                     title: 'Analysis of number pass and fail ',  
                      //is3D:true,  
                      colors: ['red', 'blue'],
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
                chart.draw(data, options);  


                 var barchart_options = {title:'Barchart:',
                       width:900,
                       height:500,
                       legend: 'none'};
        var barchart = new google.visualization.BarChart(document.getElementById('barchart_div'));
        barchart.draw(data, barchart_options);


           }  
           </script>  
   
           <br /><br />  
           <center>
           <div style="width:900px;">  
                
                <br />  
                <div id="piechart" style="width: 900px; height: 500px;"></div> <br>
                 <div id="barchart_div" style="width: 900px; height: 500px"></div>
           </div>  
  
	
				<div class="clearfix"></div>
				</center>
				<br>
	
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