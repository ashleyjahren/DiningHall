<!DOCTYPE html>

<html lang="en">
<head>

  <title>Allison Dining Hall</title>
<script type = "text/javascript" src = "js/size.js"></script>
 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type = "text/javascript" src = "js/gchart.js"></script>
  <link rel="stylesheet" href="css/style.css">


</head>

	
<body>
	 <div id="pre-header">
    <div id="logo">

    <a href="http://www.northwestern.edu" target="_blank"  id="AccountLogo_ID"   >
            <img src="img/northwestern_tcm237-2064.png"  alt="Northwestern University" title="Northwestern University" border="0" />
    </a>
        <a href="/index.php" target="_self"  id="homeLink"   >
            <img src="img/nw-dining_tcm237-1989.png"  alt="Dining Services" title="Dining Services" border="0" />
    </a>
    </div>
    <div id="pre-header-links">
    <a href="/people/index.php" target="_self"  id="csID"   >
Give Feedback    </a>
    <a href="index.php" target="_self"  id="HomeLinkId"   >
Home    </a>
    </div>
    <div id="header-txt">
The mission of Northwestern Dining is to educate students, engage the community, and enrich the Northwestern experience by offering one of the most unique and pioneering campus meal programs in the nation.    </div>
</div>

<div id="header">
    <div id="ds">

                <div class="social-top">
			<a href="http://www.facebook.com/pages/nuCuisine-at-Northwestern-University/27558462805" target="_blank"   ><img src="img/facebookicon_tcm237-2575.png"  alt="Facebook" title="Facebook" border="0" /></a>
                </div>    
                <div class="social-top">
			<a href="https://twitter.com/NU_Dining" target="_blank"   ><img src="img/twittericon_tcm237-2576.png"  alt="Twitter" title="Twitter" border="0" /></a>
                </div>    
                <div class="social-top">
			<a href="http://northwesterndining.wordpress.com" target="_blank"   ><img src="img/wordpress_icon_tcm237-10383.png"  alt="wordpress_icon" title="wordpress_icon" border="0" /></a>
                </div>    
                <div class="social-top">
			<a href="http://pinterest.com/nucuisine/" target="_blank"   ><img src="img/pinterest_tcm237-4542.png"  alt="pinterest" title="pinterest" border="0" /></a>
                </div>    
                <div class="social-top">
			<a href="http://instagram.com/northwestern_dining" target="_blank"   ><img src="img/instagram_tcm237-2061.png"  alt="instagram.png" title="instagram.png" border="0" /></a>
                </div>  
                <br>  
        
    <div class = top-bar>
    	<br>
	<h1 class = page-heading > Allison Dining Hall</h1>
</div>
    </div>

</div>

	
	<table> 
		<!-- <tr>
			<td>
				<a href="index.php">
					<button id = select-alt> Select another dining hall </button>
				</a>
			</td>
		</tr> -->
		<tr> 
			<td id = "circle"> 
				<p> Line Length: <br> </p>
					<h1><?php
					
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
				 </h1> 
			</td> 
		</tr> 
		<tr id = wait-time> 
			<td> 
				
			</td> 
		</tr> 
		<tr id = hours> 
			<td> 
				<strong> Hours of Operation: </strong><br> 
				Monday - Friday: 7:30 a.m. - 7:00 p.m. <br> 
				Saturday - Sunday: 11:00 a.m. - 7:00 p.m. 
			</td>
		</tr> 
	</table>
	<div id="chart_div"></div>
	<table id = "t2">
		<tr> 
			<!-- <td> 
				<div class="dropdown">
					<button class="dropbtn">Select Peak Hours</button>
					<div class="dropdown-content"> -->
						<td> <button onclick="Monday()">Monday</button> </td>
						 <td><button onclick="Tuesday()">Tuesday</button></a></td>
						<td> <button onclick="Wednesday()">Wednesday</button></a> </td>
						  <td><button onclick="Thursday()">Thursday</button></a> </td>
						 <td><button onclick="Friday()">Friday</button></a> </td>
						<td> <button onclick="Saturday()">Saturday</button></a> </td>
						<td> <button onclick="Sunday()">Sunday</button></a> </td>
		<!-- 			</div>
				</div>
			</td>  -->
		</tr> 
	</table>
		
				

</body>
<footer><p>Line Length Team 2016 <br>
EECS 347 </p>
</footer>
</html>
