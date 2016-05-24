<!DOCTYPE html>

<html lang="en">
<head>

  <title>Allison Dining Hall</title>

  <link rel="stylesheet" href="css/style.css">


</head>

	
<body>
<!-- 	<div id = "align"> <a href="indexsmall.html">
		<img src = "img/menu.png">
		</a>
	<h1 id = "center">Allison Dining Hall </h1> </div> -->
	
	<table> 
		<tr>
			<td id = "freeze">
				<a href="indexsmall.html">
		<img id = "element1" src = "img/menu.png" />
		</a>
	<h2 id = "element2">Allison Dining Hall </h2> 
	
			</td>
		</tr>
		<tr> 
			<td id = "circle"> 
				<br> <br> <br> <br> <br> 
				<img src = "img/circle.png" />
				<p>Dining Hall Capacity </p> 
			</td> 
		</tr> 
		<tr id = wait-time> 
			<td> 
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
		<!-- <tr> 
			<td> 
				<div class="dropdown">
					<button class="dropbtn">Select Peak Hours</button>
					<div class="dropdown-content">
						 <a href="#">Monday</a>
						 <a href="#">Tuesday</a>
						 <a href="#">Wednesday</a>
						 <a href="#">Thursday</a>
						 <a href="#">Friday</a>
						 <a href="#">Saturday</a>
						 <a href="#">Sunday</a>
					</div>
				</div>
			</td> 
		</tr>  -->
		<tr> 
			<td> 
				<p> Put graph here </p>
				<!-- <img src = "img/graph.jpg"> -->
			</td> 
		</tr> 
			</td> 
		</tr> 
	</table> 
</body>
</html>
