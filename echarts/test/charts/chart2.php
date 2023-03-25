<script>
    require(['echarts'],
        function(echarts) {
            var myChart = echarts.init(document.getElementById('chart2'));


            var option = {
                title: {},
                tooltip: {
                    trigger: 'axis'
                },
                legend: {},
                dataset: {
                    // Provide a set of data.
                    source: [
                        <?php foreach ($echart as $echarts) : ?> [
                                '<?= $echarts["Month"] ?>',
                                '<?= $echarts["Rent"]  ?>',
                                '<?= $echarts["Supplies"]  ?>',
                                '<?= $echarts["Electric"]  ?>',
                                '<?= $echarts["Gas"]  ?>'
                            ],
                        <?php endforeach; ?>
                    ]
                },
                grid: {
                    left: '8%',
                    right: '9%',
                    bottom: '15%',
                    containLabel: true
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
                    boundaryGap: false,
                    axisLine: {
                        show: false
                    },
                    axisTick: {
                        show: false
                    },
                },
                yAxis: {
                    type: 'value'
                },
                series: [{
                        name: 'Rent',
                        type: 'line',
                        stack: 'Total',
                        areaStyle: {},
                        emphasis: {
                            focus: 'series'
                        },
                    },
                    {
                        name: 'Supplies',
                        type: 'line',
                        stack: 'Total',
                        areaStyle: {},
                        emphasis: {
                            focus: 'series'
                        },
                    },
                    {
                        name: 'Electric',
                        type: 'line',
                        stack: 'Total',
                        areaStyle: {},
                        emphasis: {
                            focus: 'series'
                        },
                    },
                    {
                        name: 'Gas',
                        type: 'line',
                        stack: 'Total',
                        areaStyle: {},
                        emphasis: {
                            focus: 'series'
                        },
                    },
                ]
            };

            // Display the chart using the configuration items and data just specified.
            myChart.setOption(option);
        }
    );
</script>