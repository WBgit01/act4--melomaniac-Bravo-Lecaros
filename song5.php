<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Teka Lang</title>
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

	// TITLE
	<h1>Teka Lang</h1>
	<p>by Emman Nimedez</p>
	<div class="lyrics">
	<?php
	echo "<br>";
	// INTRO
	echo "<pre>";
	echo "<div class='chords'>    DM7\t\t\tBm7\t\tF#m7\tAm7   D7  </div>";
	echo "Pabagalin muna natin ang ikot ng mundo";
	echo "<br>";
	echo "<div class='chords'>    DM7\t\t\tBm7\t\tF#m7\tAm7   D7  </div>";
	echo "Pahintuin mga kamay ng oras sa relo";
	echo "<br>";
	echo "<div class='chords'>  DM7\t\t</div>";
	echo" Dahan dahan";
	echo "<br>";
	echo "<div class='chords'>  Bm7\t\t\t</div>";
	echo "Dahan dahan lang";
	echo "<br>";
	echo "<div class='chords'> F#m7\t\t</div>";
	echo "Dahan dahan";
	echo "<br>";
	echo "<div class='chords'>  Am7\t  D7\t\t</div>";
	echo "Dahan dahan lang";
	echo "<br><br><br>";

	// VERSE 1
	echo "<div class='chords'> DM7\t\t\t</div>";
	echo "Sobrang saya dahil";
	echo "<br>";
	echo "<div class='chords'>Bm7\t\t\t</div>";
	echo "Nandito ka na kahit";
	echo "<br>";
	echo "<div class='chords'> F#m7\t\t</div>";
	echo "Mamaya lang";
	echo "<br>";
	echo "<div class='chords'>   Am7\t   D7 </div>";
	echo "Ay aalis ka na rin agad";
	echo "<br>";
	echo "<div class='chords'>DM7\t\t\t</div>";
	echo "Wag ka sanang mainis";
	echo "<br>";
	echo "<div class='chords'>Bm7\t\t\t </div>";
	echo "Panahon natin mabilis";
	echo "<br>";
	echo "<div class='chords'>F#m7\t\t\t  </div>";
	echo "Sandal mo muna sandali";
	echo "<br>";
	echo "<div class='chords'>   Am7\t\tD7\t\t      </div>";
	echo "Di naman nagmamadali, di'ba?";
	echo "<br><br><br>";

	// VERSE 2
	echo "<div class='chords'> DM7\t\t\t\t</div>";
	echo "Dantay ka muna sakin beh";
	echo "<br>";
	echo "<div class='chords'>Bm7\t\t\t   </div>";
	echo "Sulitin natin ang gabi";
	echo "<br>";
	echo "<div class='chords'> F#m7\t\t\t\t</div>";
	echo "Iyong mga problema'y itabi";
	echo "<br>";
	echo "<div class='chords'>   Am7\t\tD7\t\t</div>";
	echo "Labi mo sa akin idampi";
	echo "<br><br><br>";

	// PRE CHORUS
	echo "<div class='chords'>DM7\t\t\t</div>";
	echo "At kahit anong lalim";
	echo "<br>";
	echo "<div class='chords'>Bm7\t\t  </div>";
	echo "Aking sisisirin";
	echo "<br>";
	echo "<div class='chords'> F#m7\t\t\t</div>";
	echo "Hindi na mabibitin";
	echo "<br>";
	echo "<div class='chords'>Am7\t   D7\t  </div>";
	echo "Pa sa aking gagawin";
	echo "<br><br><br>";

	// CHORUS
	echo "<div class='chords'>    DM7\t\t    Bm7\t\t\t\tF#m7  </div>";
	echo "Pabagalin muna natin ang ikot ng mundo";
	echo "<br>";
	echo "<div class='chords'>Am7\t\t\tD7\t\t</div>";
	echo "Ako'y sasayaw sa himig mo atin ang gabi na 'to";
	echo "<br>";
	echo "<div class='chords'>  DM7\t\t   Bm7\t\t\t F#m7  </div>";
	echo "Pahintuin mga kamay ng oras sa relo";
	echo "<br>";
	echo "<div class='chords'>Am7\t\t\tD7\t\t</div>";
	echo "Takasan natin ang gulo, lilipad papalayo";
	echo "<br>";
	echo "<div class='chords'>  DM7\t\t</div>";
	echo" Dahan dahan";
	echo "<br>";
	echo "<div class='chords'>  Bm7\t\t\t</div>";
	echo "Dahan dahan lang";
	echo "<br>";
	echo "<div class='chords'> F#m7\t\t</div>";
	echo "Dahan dahan";
	echo "<br>";
	echo "<div class='chords'>  Am7\t  D7\t\t</div>";
	echo "Dahan dahan lang";
	echo "<br><br><br>";

	// VERSE 3
	echo "<div class='chords'>DM7\t\t\t\t</div>";
	echo "Dahan dahan ka lang ngayon";
	echo "<br>";
	echo "<div class='chords'>Bm7\t\t  F#m7\t\t\t  </div>";
	echo "Alam ko naman hanggang dito ka lang";
	echo "<br>";
	echo "<div class='chords'>    Am7\t\tD7\t </div>";
	echo "Kalaban ang orasan";
	echo "<br>";
	echo "<div class='chords'>DM7\t\t\t</div>";
	echo "Paano na ko pag gabi";
	echo "<br>";
	echo "<div class='chords'> Bm7\t\t\t\t</div>";
	echo "Di sanay ng walang katabi";
	echo "<br>";
	echo "<div class='chords'>F#m7\t\t\t  </div>";
	echo "Sandal mo muna sandali";
	echo "<br>";
	echo "<div class='chords'>Am7\t\tD7\t\t</div>";
	echo "Di naman nagmamadali, kaya";
	echo "<br><br><br>";

	// CHORUS
	echo "<div class='chords'>    DM7\t\t    Bm7\t\t\t\tF#m7  </div>";
	echo "Pabagalin muna natin ang ikot ng mundo";
	echo "<br>";
	echo "<div class='chords'>Am7\t\t\tD7\t\t</div>";
	echo "Ako'y sasayaw sa himig mo atin ang gabi na 'to";
	echo "<br>";
	echo "<div class='chords'>  DM7\t\t   Bm7\t\t\t F#m7  </div>";
	echo "Pahintuin mga kamay ng oras sa relo";
	echo "<br>";
	echo "<div class='chords'>Am7\t\t\tD7\t\t</div>";
	echo "Takasan natin ang gulo, lilipad papalayo";
	echo "<br>";
	echo "<div class='chords'>  DM7\t\t</div>";
	echo" Dahan dahan";
	echo "<br>";
	echo "<div class='chords'>  Bm7\t\t\t</div>";
	echo "Dahan dahan lang";
	echo "<br>";
	echo "<div class='chords'> F#m7\t\t</div>";
	echo "Dahan dahan";
	echo "<br>";
	echo "<div class='chords'>  Am7\t  D7\t\t</div>";
	echo "Dahan dahan lang";
	echo "<br><br><br>";

	// OUTRO
	echo "<div class='chords'> DM7   Bm7\t\t\t  F#m7\t\t</div>";
	echo "Ohhh pwede bang magpahinga muna saglit";
	echo "<br>";
	echo "<div class='chords'>  Am7\t  D7\t\t</div>";
	echo "Dahan dahan lang";
	echo "<br>";
	echo "<div class='chords'> DM7   Bm7\t\t\t  F#m7\t\t</div>";
	echo "Ohhh pwede bang magpahinga muna saglit";
	echo "<br>";
	echo "<div class='chords'>  Am7\t  D7\t\t</div>";
	echo "Dahan dahan lang ";
	echo "<br>";
	echo "<br>";
	echo "</pre>";
	?></div>
</body>
</html>