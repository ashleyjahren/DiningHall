<?php
    $db = mysqli_connect('localhost:8889','line_length','password','line_length');
?>

<!DOCTYPE html>

<html lang="en">
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script type = "text/javascript" src = "js/size.js"></script>

  <link rel="stylesheet" href="css/style.css">

</head>

<body>
<?php

                $query = "SELECT * FROM 'test';";
                $result = mysqli_query($db, $query);

                while($row = mysqli_fetch_assoc($result)) {
 
                	$name = $row['a1'];
              echo "hello world"; 
             
               echo '$name'; 
               

                      // Display your datas on the page
                }
          ?>
<h1> Select a Dining Hall</h1>
</div>

<table>
	<tr>
		<td>
			<a href = "Allison.html">
				<button>Allison</button>
			</a>
		</td>
		<td>
			<a href = "Allison.html">
			<button>Elder</button>
			</a>
		</td>
		<td>
			<a href = "Allison.html">
			<button>Hinman</button>
			</a>
		</td>
	</tr>
		<tr>
		<td>
			<a href = "Allison.html">
			<button class = "plex">Plex East</button>
			</a>
			<a href = "Allison.html">
			<button class="plex">Plex West</button>
			</a>
		</td>
		<td>
			<a href = "Allison.html">
			<button>Sargent</button>
			</a>
		</td>
		<td>
			<a href = "Allison.html">
			<button>Willard</button>
			</a>
		</td>
	</tr>
</table>

</body>
</html>