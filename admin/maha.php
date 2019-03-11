
 <?php  
 $connect = mysqli_connect("localhost", "root", "", "myproject");  
 $query = "SELECT gender, count(*) as number FROM studenttbl GROUP BY gender";  
 $result = mysqli_query($connect, $query);  
 ?>  
  
          
           <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['Gender', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["gender"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                     title: 'Percentage of Male and Female Student',  
                      //is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
                chart.draw(data, options);  


           }  
           </script>  
   
           <br /><br />  
           <center>
           <div style="width:900px;">  
                
                <br />  
                <div id="piechart" style="width: 900px; height: 500px;"></div> <br>
                
           </div>  
  