<?php
require("../../database/db_con.php");
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <title>ECharts Apache</title>  
  <link rel="stylesheet" href="../../css/styles.css" />
  <!-- Include the ECharts file you just downloaded -->
  <script src="../../lib/simpleRequire.js"></script>
  <script src="../../lib/config.js"></script>
  <script src="../../lib/jquery.min.js"></script>
</head>

<body>
  <div class="container">
    <div class="row">       
        <!-- Prepare a DOM with a defined width and height for ECharts -->              
        <div id="chart1" class="chart"></div>
          <?php
            require("charts/chart1.php");
          ?>                   
        <!-- Prepare a DOM with a defined width and height for ECharts -->              
        <div id="chart2" class="chart"></div>
          <?php
           require("charts/chart2.php");
          ?>
        <div id="chart3" style="width:800px; height:500px;"></div>
          <?php
           require("charts/chart3.php");
          ?>             
    </div>
  </div>
  
</body>

</html>