<script>
  require(['echarts'],
    function(echarts) {
      var myChart = echarts.init(document.getElementById('chart3'));


      myChart.showLoading();
      $.get('../../data/map/json/brazil.json', function(geoJson) {
        myChart.hideLoading();
        echarts.registerMap('brazil', geoJson);
        option = {
          title: {
            text: 'Brazil Population Estimates (2022)',
            subtext: 'Data from www.ibge.gov',
            sublink: 'https://www.ibge.gov.br/apps/populacao/projecao/',
            left: 'center'
          },

          tooltip: {
            trigger: 'item',
            showDelay: 0,
            transitionDuration: 0.2
          },

          visualMap: {
            left: 300,
            min: 500000,
            max: 47000000,
            inRange: {
              color: [
                '#313695',
                '#4575b4',
                '#74add1',
                '#abd9e9',
                '#e0f3f8',
                '#ffffbf',
                '#fee090',
                '#fdae61',
                '#f46d43',
                '#d73027',
                '#a50026'
              ]
            },
            text: ['High', 'Low'],
            calculable: true
          },
          toolbox: {
            show: true,
            //orient: 'vertical',
            left: 'right',
            top: 'top',
            feature: {
              restore: {},
              saveAsImage: {}
            }
          },
          dataset: {
            source: [
              <?php foreach ($brazil as $data) : ?> [
                '<?= $data["states"] ?>', 
                '<?= $data["pop"]  ?>'
              ],
              <?php endforeach; ?>
            ]
          },
          series: [{
            name: 'Estimated Pop.',
            type: 'map',
            roam: true,
            map: 'brazil',
            right: 250,
            left: 350,
            top: 70,
            bottom: 5,
            emphasis: {
              label: {
                show: true
              }
            },
          }]
        };
        myChart.setOption(option);
      });
    }
  );
</script>