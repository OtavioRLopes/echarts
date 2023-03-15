<?php
require("database/db_con.php");
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <title>ECharts Apache</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script> 
  <link rel="stylesheet" href="css/styles.css" />
  <!-- Include the ECharts file you just downloaded -->
  <script src="js/echarts.min.js"></script>
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
    </div>
  </div>
  
</body>

</html>