
Before goint to create one Sample chart using FusionCharts XT with cakePHP, we pre-assume that you have XAMPP running in your machine and cakePHP FrameWork configured on it properly.

Also, you should have a bit knowledge of MVC pattern. 

Steps to create simple chart using FusionChart XT Evaluation files with cakePHP:

Step-1: Download trail version of FusionCharts Suite XT from its official web site. URL: http://www.fusioncharts.com/download/
 
Step-2: Copy “fusioncharts.js“ file with all dependency JavaScript files on webroot/js folder.

Step-3: Download the PHP wrapper file of FusionCharts from this link: http://www.fusioncharts.com/php-charts/

Step-4: Copy "fusioncharts.php" file in the "app/Vendor" folder.

Step-5: Now copy the "post.php" in the "app/Model" folder.

Step-6: Copy the "PostsController.php" fole in "app/Controller" folder.

Step-7: Create a folder "posts" inside "app/View" folder and copy "column.ctp" file inside "posts" folder.

Step-8: Now visit the URL: http://localhost/cake/posts/Column2D and you can see awesome Column2D Chart.

And that completes the recipe!!!
