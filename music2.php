<!doctype html>
<html lan="en">
	<head>
		<title>Hector's Music List</title>
		<style>
			
			body
			{
				background-image: url('img/headphones.jpg');
				font-family: Monospace;
				font-size: 18px;
			}
			
			.mainGif
			{
				max-width: 500px;
				margin: auto;
				padding: 5px;
			}
			
		</style>
		
	</head>
	<body>

		<?php

		echo "<h1>My 10 favorite Alternative/Rock Music Albums</h1>";
			
		// Array that contains the name of 10 Alternative/Rock albums that I like
		$myMusic = array("Nevermind by Nirvana (1991)", 
			"In Utero by Nirvana (1993)", "Weezer by Weezer (1994)", 
			"Black in Black by AC/DC (1980)", "Ten by Pearl Jame (1991)", 
			"Dookie by Green Day (1994)", "Blood Sugar Sex Magik by Red Hot Chili Peppers (1991)", 
			"Californication by Red Hot Chili Peppers (1999)", "Stadium Arcadium by Red Hot Chili Peppers (2006)", 
			"Licensed to Ill by Beastie Boys (1986)");
		
		$myList = "This is my Alternative/Rock list from various artist and years<br>";
		$myList .= "<ul>";
		foreach ($myMusic as $m)
		{
			$myList .= "<li><b>$m</b></li>";
		}
		$myList .= "</ul>";
		echo $myList;
		
		?>

	</body>
</html>

