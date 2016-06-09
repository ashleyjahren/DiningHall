<!DOCTYPE html>

<html lang="en">
<head>

  <title>Allison Dining Hall</title>
<!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

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
        data.addRows([
           ['12pm', 275, 'color: silver'],
              ['1pm', 190, 'color: silver'],
              ['2pm', 80, 'color: silver'],
              ['3pm', 75, 'color: silver'],
              ['4pm', 140, 'color: silver'],
              ['5pm', 250, 'color: silver']
              ]);

        // Set chart options
        var options = {'title':'People Entering Dining Hall',
        				legend: 'none', 
                       'width':300,
                       'height':200,
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
    </script>
  <link rel="stylesheet" href="css/stylesmall.css">


</head>

	
<body>
	
	<div class = top-bar>

	<h1 class = page-heading >		<a href="indexsmall.html">
		<img id = "element1" src = "img/menu.png" />
		</a> Allison Dining Hall</h1>
</div>
	<table> 

		<tr> 
			<td id = "circle"> 
				<p>Dining Hall Capacity </p> 
				<strong> Number of people in last 5 minutes:
					<?php
					
						$db = mysqli_connect('localhost','line_length','yxs1995121','test');
							if(!$db) {
								echo mysqli_connect_error();
							}
						else{
							$query = "SELECT COUNT(time_stamp) FROM traffic_collect_person WHERE time_stamp BETWEEN NOW() and (DATE_SUB(NOW(),INTERVAL 5 MINUTE)";
							$result = mysqli_query($db, $query);

							while($row = mysqli_fetch_assoc($result)) {
								$name = $row['user_encrypt_id'];
								 
								echo $name."<br>".PHP_EOL; 
								// Display your datas on the page
							}
						}
					?>
				</strong> 
			</td> 
		</tr> 

		<tr id = hours> 
			<td> 
				<strong> Hours of Operation: </strong><br> 
				Monday - Friday: 7:30 a.m. - 7:00 p.m. <br> 
				Saturday - Sunday: 11:00 a.m. - 7:00 p.m. 
			</td>
		</tr> 
		
		<tr> 
			<td> 
				<div id="chart_div"></div>
			</td> 
		</tr> 

	</table> 
	<table id = "t2">
		<tr> 
						<td> <button class = "b1">Mon</button> </td>
						 <td><button class = "b1">Tues</button></a></td>
						<td> <button class = "b1">Wed</button></a> </td>
						  <td><button class = "b1">Thurs</button></a> </td>
						 <td><button class = "b1">Fri</button></a> </td>
						<td> <button class = "b1">Sat</button></a> </td>
						<td> <button class = "b1">Sun</button></a> </td>

		</tr> 
	</table>
</body>
</html>
