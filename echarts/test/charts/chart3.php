<script>

require(['echarts'],
function (echarts) {
var myChart = echarts.init(document.getElementById('chart3'));


myChart.showLoading();
$.get('../../data/map/json/brazil.json', function (geoJson) {
  myChart.hideLoading();
  echarts.registerMap('brazil', geoJson);
  option = {
    title: {
      text: 'Brazil Population Estimates (2023)',
      subtext: 'Data from www.census.gov',
      sublink: 'http://www.census.gov/popest/data/datasets.html',
      left: 'right'
    },

    tooltip: {
      trigger: 'item',
      showDelay: 0,
      transitionDuration: 0.2
    },
   
    visualMap: {
      left: 'right',
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
      left: 'left',
      top: 'top',
      feature: {
        dataView: { readOnly: false },
        restore: {},
        saveAsImage: {}
      }
    },
    series: [
      {
        name: 'Estimated Pop.',
        type: 'map',
        roam: true,
        map: 'brazil',
        right: 44,
        left: 120,
        top: 35,
        bottom: 5,
        emphasis: {
          label: {
            show: true
          }
        },
        data: [
          { name: 'Minas Gerais', value: 4822023 },
          { name: 'Bahia', value: 731449 },
        ]
      }
    ]
  };
  myChart.setOption(option);
});

});


</script>