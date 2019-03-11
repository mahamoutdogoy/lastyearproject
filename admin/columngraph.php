<?php  
 $connect = mysqli_connect("localhost", "root", "", "myproject");  
 $query = "SELECT gender, count(*) as number FROM studenttbl GROUP BY gender";  
 $result = mysqli_query($connect, $query);  

 echo gettype($result);
 ?>
 
 <html>
 <head>
 
 </head>

 <body>
     


 </body>
 </html>
 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["gender", "number"],
        <?php
                while($row = mysqli_fetch_array($result)){
                    echo "['".$row["gender"]."',".$row["number"]."],";
                }
            

        ?>

        
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "services and price"
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
      chart.draw(view, options);
  } 
   </script>
 <br /><br />  
           <center>
           <div style="width:900px;">  
                
                <br />  
                <div id="piechart" style="width: 900px; height: 500px;"></div> <br>
                
           </div>  
  