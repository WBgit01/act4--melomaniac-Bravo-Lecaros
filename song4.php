<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Himala</title>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
	<style>
		body{
			margin: 0;
			padding: 0;
			width: 100%;
			height: 100vh;
			font-family: Roboto;
			background: url(Images/Melo_background3.jpg);
			background-position: center;
			background-size: cover;
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
		h1{
			font-size: 50px;
			text-align: center;
			color: white;
			font-weight: bold;
		}	
		p{
			font-size: 16px;
			color: white;
			text-align: center;
		}
		.lyrics{
			width: 100%;
			font-size: 18px;
			text-align: center;
			color: white;
			box-sizing: border-box;
			padding-left: auto;
			padding-right: auto;
		}
		.chords{
			color: yellow;
			font-weight: bold;
			text-align: inherit;
		}
		.sub{
			color: white;
			font-weight: bold;
			text-align: center;
			font-style: italic;
			text-transform: uppercase;
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
	<h1>Himala</h1>
	<p>by Rivermaya</p>
	<div class="lyrics">
	<?php
	echo "<pre>";
	echo "<div class ='sub'>Verse 1</div><br>";//1st Verse
	echo "<div class='chords'>F#m\t   </div>";
	echo "Pangarap ko'y";
	echo "<br>";
	echo "<div class='chords'>G\t   </div>";
	echo "Makita kang";
	echo "<br>";
	echo "<div class='chords'>      D\t\t\tD9</div>";
	echo "Naglalaro sa buwan<br>";
	echo "<div class='chords'>F#m   </div>";
	echo "Inalay mo<br>";
	echo "<div class='chords'>G\t     </div>";
	echo "Sa akin ang";
	echo "<br>";
	echo "<div class='chords'> D\t\t\t   D9</div>";
	echo "Gabing walang hangganan";
	echo "<br>";
	echo "<div class='chords'>    F#m\t\t      G\t\t   D\tD9</div>";
	echo "Hindi mahanap sa lupa ang pag-asa";
	echo "<br>";
	echo "<div class='chords'>    F#m\t\t G\t</div>";
	echo "Nakikiusap nalang";
	echo "<br><br><br>";

	// CHORUS
	echo "<div class='chords'>\t   D\tG\t\t     </div>";
	echo "Himala, kasalanan bang";
	echo "<br>";
	echo "<div class='chords'>F#m\t\t\t     </div>";
	echo "Humingi ako sa langit ng";
	echo "<br>";
	echo "<div class='chords'>G\t  D\t G\t\t</div>";
	echo "Isang himala, kasalanan bang";
	echo "<br>";
	echo "<div class='chords'>F#m\t\t\t     </div>";
	echo "Humingi ako sa langit ng";
	echo "<br>";
	echo "<div class='chords'>\tD\t  G\t    </div>";
	echo "Isang himala";
	echo "<br><br><br>";

	// VERSE 2
	echo "<div class='chords'>   F#m\t\t</div>";
	echo "Pangarap ko'y";
	echo "<br>";
	echo "<div class='chords'>   G\t\t</div>";
	echo "Makita ang";
	echo "<br>";
	echo "<div class='chords'>\t D\t\t  D9\t</div>";
	echo "Liwanag ng umaga";
	echo "<br>";
	echo "<div class='chords'> F#m\t</div>";
	echo "Naglalambing";
	echo "<br>";
	echo "<div class='chords'>\tG\t    D\tD9 </div>";
	echo "Sa iyong mga mata";
	echo "<br>";
	echo "<div class='chords'>F#m\t\t   G\t    D\tD9 </div>";
	echo "Di mahagilap sa lupa ang pag-asa";
	echo "<br>";
	echo "<div class='chords'>   F#m\t\t  G\t</div>";
	echo "Nakikiusap sa buwan";
	echo "<br><br><br>";

	// CHORUS
	echo "<div class='chords'>\t   D\tG\t\t     </div>";
	echo "Himala, kasalanan bang";
	echo "<br>";
	echo "<div class='chords'>F#m\t\t\t     </div>";
	echo "Humingi ako sa langit ng";
	echo "<br>";
	echo "<div class='chords'>G\t  D\t G\t\t</div>";
	echo "Isang himala, kasalanan bang";
	echo "<br>";
	echo "<div class='chords'>F#m\t\t\t     </div>";
	echo "Humingi ako sa langit ng";
	echo "<br>";
	echo "<div class='chords'>\tD\t  G\t    </div>";
	echo "Isang himala";
	echo "<br><br><br>";

	// INTERLUDE	
	echo "<div class='chords'>AmEmFF 2x</div>";
	echo "<br><br><br>";

	// CHORUS
	echo "<div class='chords'>\t   D\tG\t\t     </div>";
	echo "Himala, kasalanan bang";
	echo "<br>";
	echo "<div class='chords'>F#m\t\t\t     </div>";
	echo "Humingi ako sa langit ng";
	echo "<br>";
	echo "<div class='chords'>G\t  D\t G\t\t</div>";
	echo "Isang himala, kasalanan bang";
	echo "<br>";
	echo "<div class='chords'>F#m\t\t\t     </div>";
	echo "Humingi ako sa langit ng";
	echo "<br>";
	echo "<div class='chords'>\tD\t  G\t    </div>";
	echo "Isang himala";
	echo "<br><br><br>";
	echo "<div class='chords'>\t   D\tG\t\t     </div>";
	echo "Himala, kasalanan bang";
	echo "<br>";
	echo "<div class='chords'>F#m\t\t\t     </div>";
	echo "Humingi ako sa langit ng";
	echo "<br>";
	echo "<br>";
	?>
</div>
</body>
</html>