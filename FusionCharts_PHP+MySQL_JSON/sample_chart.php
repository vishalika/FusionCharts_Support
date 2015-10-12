



<html>
   <head>
      <title>FusionCharts XT - Column 2D Chart</title>
      <script src="fusioncharts/fusioncharts.js"></script>
  </head>
     <body>
      <?php

	  
	  	 include("fusioncharts/fusioncharts.php");
		 
		   $columnChart = new FusionCharts("column2D", "myFirstChart" , 600, 300, "chart-1", "jsonurl", "data_json.php");

           
            $columnChart->render();
        
      ?>

      <div id="chart-1"><!-- Fusion Charts will render here--></div>

   </body>

</html>