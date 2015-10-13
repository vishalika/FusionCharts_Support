Steps to implement FusionCharts with PHP wrapper using XML:
1. Include the `fusioncharts.php` file that contains functions   to embed the charts.
2. You would have to provide the relevant values to connect to your database.For instance, on our demo computer, we have the following values:
   $hostdb = "localhost";  // MySQl host
   $userdb = "root";  // MySQL username
   $passdb = "";  // MySQL password
   $namedb = "country";  // MySQL database name
   
3. Form the SQL query 
4. Execute the query, or else return the error message.
5. If the query returns a valid response, prepare the XML string
6. An associative array is created to store the chart attributes.
7. Iterate over each chart attribute and convert it into an attribute string
8. Iterate through results create the string.
9. Render the chart
10.Close the database connection
