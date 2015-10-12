<?php

/* Include the `fusioncharts.php` file that contains functions    to embed the charts. */

   include("includes/fusioncharts.php");

/* The following 4 code lines contain the database connection information. Alternatively, you can move these code lines to a separate file and include the file here. You can also modify this code based on your database connection. */

   $hostdb = "localhost";  // MySQl host
   $userdb = "root";  // MySQL username
   $passdb = "";  // MySQL password
   $namedb = "factorydb";  // MySQL database name

   // Establish a connection to the database
   $dbhandle = new mysqli($hostdb, $userdb, $passdb, $namedb);

   /*Render an error message, to avoid abrupt failure, if the database connection parameters are incorrect */
   if ($dbhandle->connect_error) {
      exit("There was an error with your connection: ".$dbhandle->connect_error);
   }
?>

<html>
   <head>
      <title>FusionCharts XT - Column 2D Chart - Data from a database</title>
    <link  rel="stylesheet" type="text/css" href="css/style.css" />

      <!-- You need to include the following JS file to render the chart.
      When you make your own charts, make sure that the path to this JS file is correct.
      Else, you will get JavaScript errors. -->

     <script type="text/javascript" src="http://static.fusioncharts.com/code/latest/fusioncharts.js"></script>
	 <script type="text/javascript" src="http://static.fusioncharts.com/code/latest/fusioncharts.charts.js"></script>
	 
  </head>

   <body>
      <?php

         // Form the SQL query that returns the top 10 most populous countries
         $strQuery = "SELECT `Name`, `Population` FROM `City` ORDER BY Population DESC LIMIT 10";

         // Execute the query, or else return the error message.
         $result = $dbhandle->query($strQuery) or exit("Error code ({$dbhandle->errno}): {$dbhandle->error}");


         // If the query returns a valid response, prepare the JSON string
         if ($result) {
            
            /* `$arrData` is the associative array that is initialized to store the chart attributes. */
            $arrData = array(
                  "caption" => "Top 10 Most Populous Countries",
                  "paletteColors" => "#0075c2",
                  "bgColor" => "#ffffff",
                  "borderAlpha" => "20",
                  "canvasBorderAlpha" => "0",
                  "usePlotGradientColor" => "0",
                  "plotBorderAlpha" => "10",
                  "showXAxisLine" => "1",
                  "xAxisLineColor" => "#999999",
                  "showValues" => "0",
                  "divlineColor" => "#999999",
                  "divLineIsDashed" => "1",
                  "showAlternateHGridColor" => "0"
               );

            $xmlData = "<chart";

            // Iterate over each chart attribute and convert it into an attribute string
            foreach ($arrData as $key => $value) {
                $xmlData .= " $key= \"$value\" "; 
            }
            
            $xmlData .= ">";

            // Iterate through results create the <set label="" value="" /> string.
            while ($row = mysqli_fetch_array($result)) {
                $xmlData .= "<set label= \"" . $row["Name"] . "\" value= \"" . $row["Population"] . "\" />";
            }

            $xmlData .= "</chart>";

            $columnChart = new FusionCharts("column2D", "myFirstChart" , 600, 300, "chart-1", "xml", "$xmlData");

            // Render the chart
            $columnChart->render();

            // Close the database connection
            $dbhandle->close();
         }

      ?>

      <div id="chart-1">Fusion Charts will render here</div>

   </body>

</html>