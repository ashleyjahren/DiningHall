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
    <a href="/index.php" target="_self"  id="HomeLinkId"   >
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
	<h1 class = page-heading > Select a Dining Hall </h1>
	<br>

	</div>

</div>
</div>
    </div>

</div>


<div id = "container">

<br>
<br>

<div> <a href = "Elder.php">
				<button id = "elder">Elder</button>
			</a>
</div>

<div>
	<a href = "Sargent.php">
			<button id = "sargent">Sargent</button>
			</a>			
</div>
<div>
	<a href = "PlexE.php">
			<button id = "plex1">Plex East</button>
			</a>
			<a href = "PlexW.php">
			<button id="plex2">Plex West</button>
			</a>
		</div>
		<div>
						<a href = "Willard.php">
			<button id ="willard">Willard</button>
			</a>
		</div>
		<div> 
				<a href = "Allisonlarge.php">
			<button id = "hinman">Allison</button>
			</a>
		</div>
		<div> 
			<a href = "Hinman.php">
			<button id = "allison">Hinman</button>
			</a>
		</div>


</div>
</body>
<footer>

<p>Line Length Team 2016 <br>
EECS 347 </p>

</footer>
</html>
