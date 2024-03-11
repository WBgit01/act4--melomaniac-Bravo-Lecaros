<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
	<title>Dreamy Playlist</title>
	<style>
		body{
			margin: 0;
			padding: 0;
			width: 100%;
			height: 100vh;
			font-family: Roboto;
			background: url(Images/Melo_background2.jpeg);
			background-position: center;
			background-size: inherit;
		}
		.container{
			width: 100%;
			height: 12%;
			display: flex;
			align-items: center;
			padding-left: 8%;
			padding-right: 8%;
			box-sizing: border-box;
		}
		header{
			text-align: right;
			flex: 1;
		}
		header li{
			list-style: none;
			display: inline-block;
			margin: 60px;

		}
		header li a{
			text-decoration: none;
			color: white;
			font-size: 16px;
			font-weight: bold;
			text-transform: uppercase;
		}
		.logo{
			width: 145px;
		}
		.banner{
			box-sizing: border-box;
			align-items: center;
			display: flex;
			flex-direction: column;
		}
		h1{
			font-size: 115px;
			width: 100%;
			top: 10%;
			position: absolute;
			text-align: center;
			text-transform: uppercase;
			color: white;
		}
		p1{
			font-size: 30px;
			width: 100%;
			top: 43%;
			position: absolute;
			text-align: center;
			color: white;
  		}
  		.content{
  	      	box-sizing: border-box;
			align-items: center;
			display: inline-block;
			flex-direction: row;
			position: absolute;
			top: 60%;
			padding-left: 8%;
			padding-right: 8%;

		}
		.cover{
			
			width: 180px;
			position: relative;
			margin: 30px;
			background-size: cover;
			box-sizing: border-box;
		}
	</style>
</head>
<body>
	<div class="container">
		<img src="Images/Melo_logo.png" class="logo">
		<header>
			<li><a href="index.php">Home</a></li>
			<li><a href="https://github.com/WBgit01/act4--melomaniac-Bravo-Lecaros.git">Github</a></li>
	</div>
	<div class="banner">
		<h1>Dreamy Playlist</h1>
		<p1>Tune In, Play On: Where Lyrics Meet Chords!🎧🎸</p1>

	</div>
	<div class="content">
			<a href="song1.php"><img src="Images/album1_cover.jpg" class="cover"></a>
			<a href="song2.php"><img src="Images/album2_cover.png" class="cover"></a>
			<a href="song3.php"><img src="Images/album3_cover.png" class="cover"></a>
			<a href="song4.php"><img src="Images/album4_cover.png" class="cover"></a>
			<a href="song5.php"><img src="Images/album5_cover.jpg" class="cover"></a>

		</div>
</body>
</html>