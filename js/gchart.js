      var flag = true; 
      


      // Load the Visualization API and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.

      function drawChart() {

        // Create the data table.
       var data = new google.visualization.DataTable();
        data.addColumn('string', 'Hour');
        data.addColumn('number', 'People');
        data.addColumn({type:'string', role:'style'});
        if (flag == true)
          {
               var def = data.addRows([
              ['12pm', 275, 'color: silver'],
              ['1pm', 190, 'color: silver'],
              ['2pm', 80, 'color: silver'],
              ['3pm', 75, 'color: silver'],
              ['4pm', 140, 'color: silver'],
              ['5pm', 250, 'color: silver']
              ]);
             }
             else
             {
              data.addRow(def0); 
              data.addRow(def1); 
              data.addRow(def2); 
              data.addRow(def3); 
              data.addRow(def4); 
              data.addRow(def5); 
              flag = true; 
            }

        // Set chart options
        var options = {'title':'Peak Hours',
        				legend: 'none', 
                       'width':500,
                       'height':300,

              hAxis: {
          title: 'Time'
        },
              vAxis: {
          title: 'Number of People',
          ticks: [0, 100, 200, 300, 400]
        }

      };

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }

      function Monday() {
        flag = false; 
        def0 = 
          ['12pm', 275, 'color: silver'];
        def1 = ['1pm', 190, 'color: silver'];
        def2 = ['2pm', 80, 'color: silver'];
        def3 = ['3pm', 75, 'color: silver'];
        def4 = ['4pm', 140, 'color: silver'];
        def5 = ['5pm', 250, 'color: silver'];
          drawChart(); 

}
    function Tuesday() {
        flag = false; 
        def0 = 
          ['12pm', 350, 'color: silver'];
        def1 = ['1pm', 220, 'color: silver'];
        def2 = ['2pm', 80, 'color: silver'];
        def3 = ['3pm', 50, 'color: silver'];
        def4 = ['4pm', 67, 'color: silver'];
        def5 = ['5pm', 100, 'color: silver'];
          drawChart(); 

}
    function Wednesday() {
        flag = false; 
        def0 = 
          ['12pm', 356, 'color: silver'];
        def1 = ['1pm', 240, 'color: silver'];
        def2 = ['2pm', 145, 'color: silver'];
        def3 = ['3pm', 62, 'color: silver'];
        def4 = ['4pm', 83, 'color: silver'];
        def5 = ['5pm', 145, 'color: silver'];
          drawChart(); 

}
    function Thursday() {
       flag = false; 
        def0 = 
          ['12pm', 210, 'color: silver'];
        def1 = ['1pm', 190, 'color: silver'];
        def2 = ['2pm', 80, 'color: silver'];
        def3 = ['3pm', 75, 'color: silver'];
        def4 = ['4pm', 110, 'color: silver'];
        def5 = ['5pm', 250, 'color: silver'];
          drawChart(); 

}
    function Friday() {
        flag = false; 
        def0 = 
          ['12pm', 180, 'color: silver'];
        def1 = ['1pm', 140, 'color: silver'];
        def2 = ['2pm', 80, 'color: silver'];
        def3 = ['3pm', 66, 'color: silver'];
        def4 = ['4pm', 55, 'color: silver'];
        def5 = ['5pm', 100, 'color: silver'];
          drawChart(); 
}
    function Saturday() {
        flag = false; 
        def0 = 
          ['12pm', 199, 'color: silver'];
        def1 = ['1pm', 89, 'color: silver'];
        def2 = ['2pm', 20, 'color: silver'];
        def3 = ['3pm', 67, 'color: silver'];
        def4 = ['4pm', 0, 'color: silver'];
        def5 = ['5pm', 120, 'color: silver'];
          drawChart(); 
}
    function Sunday() {
        flag = false; 
        def0 = 
          ['12pm', 220, 'color: silver'];
        def1 = ['1pm', 173, 'color: silver'];
        def2 = ['2pm', 140, 'color: silver'];
        def3 = ['3pm', 75, 'color: silver'];
        def4 = ['4pm', 140, 'color: silver'];
        def5 = ['5pm', 177, 'color: silver'];
          drawChart(); 

}

