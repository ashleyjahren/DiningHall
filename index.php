<?php
    $db = mysqli_connect('localhost','line_length','yxs1995121','test');
	if(!$db) {
		echo mysqli_connect_error();
	}
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
        $query = "SELECT * FROM traffic_collect_person";
        $result = mysqli_query($db, $query);

        while($row = mysqli_fetch_assoc($result)) {
			$name = $row['user_encrypt_id'];
             
            echo $name."<br>".PHP_EOL; 
            // Display your datas on the page
        }
?>
<div class = top-bar>
	<h1 class = page-heading > Select a Dining Hall</h1>
</div>

<table>
	<tr>
		<td>
			<h2 class = column-heading> South Campus <h2>
		</td>
		<td>
			<h2 class = column-heading> North Campus <h2>
		</td>
	</tr>
	<tr>
		<td>
			<a href = "Allisonlarge.php">
				<button>Allison</button>
			</a>
		</td>
		<td>
			<a href = "Allisonlarge.php">
			<button>Sargent</button>
			</a>
		</td>
	</tr>
		<tr>
		<td>
			<a href = "Allisonlarge.php">
			<button>Hinman</button>
			</a>
		</td>
		<td>
			<a href = "Allisonlarge.php">
			<button class = "plex">Plex East</button>
			</a>
			<a href = "Allisonlarge.php">
			<button class="plex">Plex West</button>
			</a>
		</td>
	</tr>
	<tr>
		<td>
			<a href = "Allisonlarge.php">
			<button>Willard</button>
			</a>
		</td>
		<td>
			<a href = "Allisonlarge.php">
			<button>Elder</button>
			</a>
		</td>
	</tr>
</table>

</body>
</html>
