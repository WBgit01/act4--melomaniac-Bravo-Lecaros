<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Can't Help Falling In Love</title>
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
	<h1>Can't Help Falling In Love</h1>
	<p>by Elvis Presley</p>
	<div class="lyrics">
	<?php

		echo "<pre>";
		echo "<br>";
		echo "<div class ='sub'>Verse 1</div>";//1st Verse
		echo "<br>";
	    echo "<div class='chords'>\tC   Em   A   \t </div>";
		echo "Wise men say<br>";
		echo "<div class='chords'>\t      Dm   C   G G7  \t </div>";
		echo "Only fools rush in<br>";
		echo "<div class='chords'>\t F  G    Am   \t </div>";
		echo "But I can't help<br>";
		echo "<div class='chords'>\t Dm          C   G7   C  G7  \t </div>";
		echo "Falling in love with you<br>";
		echo "<div class='chords'>\t   Dm   Em   Am    \t   </div>";
		echo "Shall I stay?<br>";
		echo "<div class='chords'>\t        Dm C  G G7    \t</div>";
		echo "Would it be a sin<br>";
		echo "<div class='chords'>\tDm  C    Am \t   </div>";
		echo "If I can't help<br>";
		echo "<div class='chords'>\tDm      C    G7   C \t   </div>";
		echo "Falling in love with you?<br>";
		echo "<br>";


		echo "<div class ='sub'>Chorus</div>";//1st Chorus
		echo "<br>";
		echo "<div class='chords'>\tEm           B7\t      </div>";
		echo "Like a river flows<br>";
		echo "<div class='chords'>\tEm           B7\t      </div>";
		echo "Surely to the sea<br>";
		echo "<div class='chords'>\tEm           B7\t      </div>";
		echo "Darling, so it goes<br>";
		echo "<div class='chords'>\t    Em      A7  \t     Dm7 G7 \t   </div>";
		echo "Some things are meant to be";
		echo "<br><br>";


		echo "<div class ='sub'>Verse 2</div>";//2nd Verse
		echo "<br>";
		echo "<div class='chords'>\t    C   Em  Am  \t   </div>";
		echo "Take my hand<br>";
		echo "<div class='chords'>\t     Dm    C    G   G7 \t</div>";
		echo "Take my whole life too";
		echo "<br>";
		echo "<div class='chords'>\tF   G    Am   Dm  \t</div>";
		echo "For I can't help falling<br>";
		echo "<div class='chords'>\tF   G    Am   Dm  \t</div>";
		echo "In love with you<br><br>";


		echo "<div class ='sub'>Chorus</div>";//2st Chorus
		echo "<br>";
		echo "<div class='chords'>\tEm           B7\t      </div>";
		echo "Like a river flows<br>";
		echo "<div class='chords'>\tEm           B7\t      </div>";
		echo "Surely to the sea<br>";
		echo "<div class='chords'>\tEm           B7\t      </div>";
		echo "Darling, so it goes<br>";
		echo "<div class='chords'>\t    Em      A7  \t     Dm7 G7 \t   </div>";
		echo "That some things are meant to be<br>";
		echo "<div class='chords'>\t    C   Em  Am  \t   </div>";
		echo "<br>";


		echo "<div class ='sub'>Verse 3</div>";//3rd Verse
		echo "<br>";
		echo "Take my hand<br>";
		echo "<div class='chords'>\tDm      C    G7   C \t   </div>";
		echo "Take my whole life too<br>";
		echo "<div class='chords'>\t     F  G     Am  \t  </div>";
		echo "For I can't help<br>";
		echo "<div class='chords'>\tDm       C    G7   C \t  </div>";
		echo "Falling in love with you<br>";
		echo "<div class='chords'>\t     F  G     Am  \t  </div>";
		echo "No, I can't help<br>";
		echo "<div class='chords'>\t Dm          C   G7   C  G7  \t </div>";
		echo "Falling in love with you<br>";
		echo "<br>";
		echo "<br>";
		echo "</pre";
	?>
</div>
</body>
</html>