<?php die("Access Denied"); ?>#x#a:2:{s:6:"result";a:2:{s:6:"report";a:0:{}s:2:"js";s:1415:"
  google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Day', 'Orders', 'Total Items sold', 'Revenue net'], ['2017-07-29', 0,0,0], ['2017-07-30', 0,0,0], ['2017-07-31', 0,0,0], ['2017-08-01', 0,0,0], ['2017-08-02', 0,0,0], ['2017-08-03', 0,0,0], ['2017-08-04', 0,0,0], ['2017-08-05', 0,0,0], ['2017-08-06', 0,0,0], ['2017-08-07', 0,0,0], ['2017-08-08', 0,0,0], ['2017-08-09', 0,0,0], ['2017-08-10', 0,0,0], ['2017-08-11', 0,0,0], ['2017-08-12', 0,0,0], ['2017-08-13', 0,0,0], ['2017-08-14', 0,0,0], ['2017-08-15', 0,0,0], ['2017-08-16', 0,0,0], ['2017-08-17', 0,0,0], ['2017-08-18', 0,0,0], ['2017-08-19', 0,0,0], ['2017-08-20', 0,0,0], ['2017-08-21', 0,0,0], ['2017-08-22', 0,0,0], ['2017-08-23', 0,0,0], ['2017-08-24', 0,0,0], ['2017-08-25', 0,0,0], ['2017-08-26', 0,0,0]  ]);
        var options = {
          title: 'Report for the period from Saturday, 29 July 2017 to Sunday, 27 August 2017',
            series: {0: {targetAxisIndex:0},
                   1:{targetAxisIndex:0},
                   2:{targetAxisIndex:1},
                  },
                  colors: ["#00A1DF", "#A4CA37","#E66A0A"],
        };

        var chart = new google.visualization.LineChart(document.getElementById('vm_stats_chart'));

        chart.draw(data, options);
      }
";}s:6:"output";s:0:"";}