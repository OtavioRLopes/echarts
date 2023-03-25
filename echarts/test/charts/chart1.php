<script>
    require(['echarts'],
        function(echarts) { // Initialize the echarts instance based on the prepared dom
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
                        <?php foreach ($echart as $echarts) : ?>[
                                '<?= $echarts["Month"] ?>',
                                '<?= $echarts["Rent"]  ?>',
                                '<?= $echarts["Supplies"]  ?>',
                                '<?= $echarts["Electric"]  ?>',
                                '<?= $echarts["Gas"]  ?>'
                            ],
                        <?php endforeach; ?>
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
                    axisLine: {
                        show: false
                    },
                    axisTick: {
                        show: false
                    },
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
        }
    );
</script>