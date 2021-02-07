<!doctype html>
<html lan="en">
	<head>
		<title>Hector's Music List</title>
		<style>
			
			body
			{
				background-image: url('img/boomBox.jpg');
				  background-repeat: repeat-x;
				background-attachment: fixed;
				background-position: bottom right;
		
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

		echo "<h1>My 10 favorite Rap Music Albums</h1>";
		
		// Array that contains the name of 10 Rap albums that I like
		$myMusic = array("I Am the West by Ice Cube (2010)", 
			"Laugh Now Cry Later by Ice Cube (2006)", "Raw Footage by Ice Cube (2008) ", 
			"The Black Album by Jay-Z (2003)", "The Blueprint 3 by Jay-Z (2009)", 
			"The Blueprint by Jay-Z (2001)", "The Chronic by Dr. Dre (1992)", 
			"Ready to Die by The Notorious BIG (1994)", "All Eyez on Me by Tupac Sharkur (1996)", 
			"In a Major Way by E-40 (1995)");
		
		$myList = "This is my Rap list from various artist and years<br>";
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

