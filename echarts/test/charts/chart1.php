<script>
    require(['echarts'],
    function (echarts) {// Initialize the echarts instance based on the prepared dom
    var myChart = echarts.init(document.getElementById('chart1'));

    // Specify the configuration items and data for the chart
    var option = {
        /*  title: {
           text: 'ECharts Getting Started Example'
         }, */
        tooltip: {
            trigger: 'axis',
            axisPointer: {
                type: 'shadow',
            }
        },
        legend: {},
        dataset: {
            source: [
                ['months', 'Rent', 'Supplies', 'Electric', 'Gas'],
                <?php
                $sql = "SELECT * FROM charts";
                $result = mysqli_query($con, $sql);

                while ($charts = mysqli_fetch_array($result)) {
                    $month = $charts['Month'];
                    $rent = $charts['Rent'];
                    $supplies = $charts['Supplies'];
                    $electric = $charts['Electric'];
                    $gas = $charts['Gas'];
                ?>['<?php echo $month ?>', '<?php echo $rent ?>', '<?php echo $supplies ?>', '<?php echo $electric ?>', '<?php echo $gas ?>'],
                <?php } ?>
            ]
        },
        dataZoom: {
            show: true,
            start: 50,
        },
        toolbox: {
            feature: {
                saveAsImage: {}
            }
        },
        xAxis: {
            type: 'category',
            axisLine: {show: false},
            axisTick: {show: false},
        },
        yAxis: {
            show: true
        },
        series: [{
                type: 'bar',
                label: {
                    show: true,
                    rotate: 90
                },
                emphasis: {
                    focus: 'series'
                },
            },
            {
                type: 'bar',
                label: {
                    show: true,
                    rotate: 90
                },
                emphasis: {
                    focus: 'series'
                },
            },
            {
                type: 'bar',
                label: {
                    show: true,
                    rotate: 90
                },
                emphasis: {
                    focus: 'series'
                },
            },
            {
                type: 'bar',
                label: {
                    show: true,
                    rotate: 90
                },
                emphasis: {
                    focus: 'series'
                },
            }
        ]
    };

    // Display the chart using the configuration items and data just specified.
    myChart.setOption(option);

});
</script>