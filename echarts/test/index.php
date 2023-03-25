<?php
include_once("../../database/process.php");
include_once("../../database/process2.php");
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <title>ECharts</title>
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
      include_once("charts/chart1.php");
      ?>
      <div id="chart2" class="chart"></div>
      <?php
      include_once("charts/chart2.php");
      ?>
      <div id="chart3" class="chart"></div>
      <?php
      include_once("charts/chart3.php");
      ?>
    </div>
  </div>

</body>

</html>