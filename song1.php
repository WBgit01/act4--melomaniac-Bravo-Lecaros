<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Thw Scientist</title>
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
	<h1> The Scientist</h1>
	<p>by Coldplay</p>
	<div class="lyrics">
	<?php

		echo "<pre>";
		echo "<br>";
		echo "<div class ='sub'>Verse 1</div>";//1st Verse
		echo "<br>";
		echo "<div class='chords'>Am7 \t   F\t  	 	 C</div>";
		echo "Come up to meet you, tell you I'm sorry<br>";
		echo "<div class='chords'>\t  	 	C/B \t   Am7</div>";
		echo "You don't know how lovely you are<br>";
		echo "<br>";
		echo "<div class='chords'>    F</div>";
		echo "I had to find you<br>";
		echo "<div class='chords'>    C</div>";
		echo "Tell you I need you<br>";
		echo "<div class='chords'> 	  C/B \t   	Am7</div>";
		echo "Tell you I set you apart<br>";
		echo "<br>";
		echo "<div class='chords'>      F</div>";
		echo "Tell me your secrets<br>";
		echo "<div class='chords'>         C</div>";
		echo "And ask me your questions<br>";
		echo "<div class='chords'>\t   C/B  \t     Am7</div>";
		echo "Oh, let's go back to the start<br>";
		echo "<br>";
		echo "<div class='chords'>     F</div>";
		echo "Running in circles<br>"; 
		echo "<div class='chords'>       C</div>";
		echo "Coming up tails<br>";
		echo "<div class='chords'>C/B</div>";
		echo "Heads on a science apart<br>";
		echo "<br>";
		echo "<div class ='sub'>CHORUS</div>";//Chorus
		echo "<br>";
		echo "<div class='chords'>F    \t\t        C</div>";
		echo "Nobody said it was easy<br>";
		echo "<div class='chords'>C/B</div>";
		echo "It's such a shame for us to part<br>";
		echo "<div class='chords'>F    \t\t        C</div>";
		echo "Nobody said it was easy<br>";  
		echo "<div class='chords'>\t\tC/B   \t\t C6  G     </div>";
		echo "No one ever said it would be this hard<br>";
		echo "<br>";
		echo "<div class='chords'>\t\t        C</div>";
		echo "Oh, take me back to the start<br>";
		echo "<br>";
		echo "<div class ='sub'>Verse 2</div>";//2nd Verse
		echo "<br>";
		echo "<div class='chords'>Am7    \t F      </div>";
		echo "I was just guessing<br>";
		echo "<div class='chords'>\t   C  </div>";
		echo "At numbers and figures<br>";
		echo "<div class='chords'>\t       C            Am7</div>";
		echo "Pulling the puzzles apart<br>";
		echo "<div class='chords'>        F </div>";
		echo "Questions of science<br>";
		echo "<div class='chords'>      C </div>";
		echo "Science and progress<br>";
		echo "<div class='chords'>\t\t    C   \t    Am7</div>";
		echo "Do not speak as loud as my heart<br>";
		echo "<br>";
		echo "<div class='chords'>\t F  </div>";
		echo "Tell me you love me<br>";
		echo "<div class='chords'>\t C  </div>";
		echo "come back and haunt me<br>";
		echo "<div class='chords'>\t\tC    \t   C/B\t  Am7</div>";
		echo "Oh, and I rush to the start<br>";
		echo "<br>";
		echo "<div class='chords'>\t F     </div>";
		echo "Running in circles<br>";
		echo "<div class='chords'>\t  C  </div>";
		echo "Chasing our tails<br>";
		echo "<div class='chords'>\t C    \t    C/B  </div>";
		echo "Coming back as we are<br>";
		echo "<br>";
		echo "<div class ='sub'>CHORUS</div>";//Chorus
		echo "<br>";
		echo "<div class='chords'>F    \t\t        C</div>";
		echo "Nobody said it was easy<br>";
		echo "<div class='chords'>C/B</div>";
		echo "Oh, it's such a shame for us to part<br>";
		echo "<div class='chords'>F    \t\t        C</div>";
		echo "Nobody said it was easy<br>";
		echo "<div class='chords'>\t\tC/B   \t\t C6  G     </div>";
		echo "No one ever said it would be so hard<br>";
		echo "<br>";
		echo "<div class='chords'>\t\t       C </div>";
		echo "I'm going back to the start<br>";
		echo "<br>";
		echo "<div class='chords'>Am7   F   C   C</div>";
		echo "Oh<br>";
		echo "<div class='chords'>Am7   F   C   C</div>";
		echo "Oh<br>";
		echo "<div class='chords'>Am7   F   C   C/B </div>";
		echo "Oh<br>";
		echo "<div class='chords'>Am7   F   C   </div>";
		echo "Oh<br>";
		echo "<br>";
		echo "</pre";
	?>
</div>
</body>
</html>