
<!DOCTYPE HTML>
<html>
<head>
<title></title>
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

<!--//content-inner-->
			<!--/sidebar-menu-->
				<div class="sidebar-menu">

					<header class="logo1" style="background-color:#FF00FF; height: 60px;">
						<a href="#" class="sidebar-icon"> <span class="fa fa-bars" hidden=""></span> </a> 
					</header>
						<div style="border-top:1px ridge rgba(255, 255, 255, 0.15)"></div>
                           <div class="menu">
									<ul id="menu" >
										<li><a href="index.php"><i class="fa fa-tachometer" style="color:#ffbf00"></i> <span>Dashboard</span><div class="clearfix"></div></a></li>
										
										
										 <li id="menu-academico" ><a href="userlist.php"><i class="fa fa-user" style="color:#22beef;"></i><span>AdminInfo</span><div class="clearfix"></div></a></li>
									
									 <li id="menu-academico" ><a href="#"><i class="fa fa-list-ul" aria-hidden="true"  style="color:#ff4a43;"></i><span> Department</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
										   <ul id="menu-academico-sub" >
										   
											<li id="menu-academico-avaliacoes" ><a href="adddepartment.php">Add Department</a></li>
											<li id="menu-academico-avaliacoes" ><a href="departmentlist.php">List Of Departments</a></li>

										  </ul>
										</li>
									 
									  <li id="menu-academico" ><a href="#"><i class="fa fa-file-text" aria-hidden="true" style="color:#a2d200;"></i><span> Categories</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
										   <ul id="menu-academico-sub" >
										   	<li id="menu-academico-avaliacoes" ><a href="addcategory.php">Add Category</a></li>
										   <li id="menu-academico-avaliacoes" ><a href="categorylist.php">List Of Categories</a></li>
										
										  </ul>
										</li>
										<li id="menu-academico" ><a href="#"><i class="fa fa-file-text-o" aria-hidden="true" style="color:#ff00ff"></i><span> Subject</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
										   <ul id="menu-academico-sub" >
										   
											<li id="menu-academico-avaliacoes" ><a href="addsubject.php">Add Subject</a></li>
											<li id="menu-academico-avaliacoes" ><a href="subjectlist.php"> List Of Subject</a></li>

										  </ul>
										</li>
										<li id="menu-academico" ><a href="#"><i class="fa fa-user" aria-hidden="true" style="color:#00d919"></i><span> Students</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
										   <ul id="menu-academico-sub" >
										   
											<li id="menu-academico-avaliacoes" ><a href="addstudent.php">Add Student</a></li>
											<li id="menu-academico-avaliacoes" ><a href="studentlist.php"> List Of Students</a></li>

										  </ul>
										</li>
										 
										 <li id="menu-academico" ><a href="#"><i class="fa fa-th-list" aria-hidden="true" style="color:#bd0e81"></i><span> Examination</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
										   <ul id="menu-academico-sub" >
										   
										    <li id="menu-academico-avaliacoes" ><a href="addexam.php"> Add Exam</a></li>
											<li id="menu-academico-avaliacoes" ><a href="examlist.php"> List Of Examination</a></li>

										  </ul>
										</li>
										 
								      <li><a href="addquestion.php"><i class="fa fa-question" style="color:#ffff00"></i>  <span>Add Question</span><div class="clearfix"></div></a></li>
									
							         <li id="menu-academico" ><a href="#"><i class="fa fa-columns" aria-hidden="true" style="color:#000eff"></i><span> Notice</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
										   <ul id="menu-academico-sub" >
										   
										    <li id="menu-academico-avaliacoes" ><a href="addnotice.php"> Add Notice</a></li>
											<li id="menu-academico-avaliacoes" ><a href="noticelist.php"> List Of Notice</a></li>

										  </ul>
									</li>
							         <li><a href="results.php"><i class="fa fa-asterisk" style="color:#ff0000"></i>  <span>Exam Results</span><div class="clearfix"></div></a></li>

							          <li><a href="analysis.php"><i class="fa fa-asterisk" style="color:#ff0000"></i>  <span>Analysis</span><div class="clearfix"></div></a></li>
									
								  </ul>
								</div>
							  </div>
							  <div class="clearfix"></div>		
							</div>
							
							<!-- script-for sticky-nav -->
		
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
</body>
</html>