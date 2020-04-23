 // Load the Visualization API and the piechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table, 
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {
      
      var data = google.visualization.arrayToDataTable([
          ['Dias', 'Novas redações'],
          ['15/08',  20],
          ['16/08',  35],
          ['17/08',  33],
          ['18/08',  24],
          ['19/08',  15],
          ['20/08',  10],
          ['21/08',  22]
        ]);

        var options = {
          hAxis: { titleTextStyle: {color: '#fefefe'}},
          vAxis: {minValue: 0}
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
        chart.draw(data, options);


      
      var data = google.visualization.arrayToDataTable([
          ['Dias', 'Novos usuarios'],
          ['15/08',  11],
          ['16/08',  15],
          ['17/08',  13],
          ['18/08',  10],
          ['19/08',  9],
          ['20/08',  11],
          ['21/08',  13]
        ]);

        var options = {
          legend: { position: 'none' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('chart_div2'));

        chart.draw(data, options);
  }