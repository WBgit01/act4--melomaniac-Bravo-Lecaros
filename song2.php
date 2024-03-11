<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Forevermore</title>
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
	<h1>Forevermore</h1>
	<p>by Side A</p>
	<div class="lyrics">
	<?php

		echo "<pre>";
		echo "<br>";
		echo "<div class ='sub'>Verse 1</div>";//1st Verse
		echo "<br>";
		echo "<div class='chords'>E          </div>";
		echo "There are times<br>";
		echo "<div class='chords'>\tB/D#    \t C#m    \tC#m C#m/B   A       </div>";
		echo "When I just want to look at your face<br>";
		echo "<div class='chords'>\t F#m           B  </div>";
		echo "With the stars in the night<br>";
		echo "<div class='chords'>      E\t\t    B/D#    </div>";
		echo "There are times<br>";
		echo "<div class='chords'>\t      C#m\t       C#m/B     A   </div>";
		echo "When I just want to feel your embrace<br>";
		echo "<div class='chords'>\t   F#m  \t    B   B9/C  </div>";
		echo "In the cold of the night<br>";
		echo "<div class='chords'>\t   F#m  \t    B   B9/C  </div>";
		echo "I just cant believe that you are mine now<br>";
		echo "<br>";
		echo "<div class ='sub'>chorus</div>";//Chorus
		echo "<br>";
		echo "<div class='chords'>        E       G#m     A\t</div>";
		echo "You were just a dream that I once knew<br>";
		echo "<div class='chords'>\t            E\t           G#m\t\t  A G#m F#m B  </div>";
		echo "I never thought I would be right for you<br>";
		echo "<div class='chords'>\t     E \t    E7   </div>";
		echo "I just cant compare you with<br>";
		echo "<div class='chords'>A\t       </div>";
		echo "Anything in this world<br>";
		echo "<div class='chords'>     \t  G#m   C#m  \t F#m    \tB     E </div>";
		echo "You're all I need to be with forevermore<br>";
		echo "<br>";
		echo "<div class ='sub'>Verse 2</div>";//2nd Verse
		echo "<br>";
		echo "<div class='chords'>\tE    \tB/D#       C#m\t\t C#m/B        A    </div>";
		echo "All those years ive longed to hold you in my arms<br>";
		echo "<div class='chords'>\t\t      F#m     B    </div>";
		echo "I've been dreaming of you<br>";
		echo "<div class='chords'>  E   \t   B/D#</div>";
		echo "Every night<br>";
		echo "<div class='chords'>         C#m\t\t      C#m/B    \t  A</div>";
		echo "I've been watching all the stars that fall down<br>";
		echo "<div class='chords'>         C#m\t\t      C#m/B    \t  A</div>";
		echo "Wishing you would be mine<br>";
		echo "<div class='chords'>   C#m        F#\t\t           </div>";
		echo "I just cant believe that you were mine now<br>";
		echo "<div class='chords'>  C       G/B </div>";
		echo "Time and again<br>";
		echo "<div class='chords'>\t\t       Em         AM  \t      D   G</div>";
		echo "There are these changes that we cannot end<br>";
		echo "<div class='chords'>\t  Em         A   \t      D    G\tC      </div>";
		echo "Sure a star that keeps going on and on<br>";
		echo "<div class='chords'>       Am  \t        D  \t  B     E</div>";
		echo "My love for you will be forevermore<br>";
		echo "<div class='chords'>\t        F#m  \t       B B9/C   </div>";
		echo "Wishing you would be mine<br>";
		echo "I just cant believe that you were mine now<br>";
		echo "<br>";
		echo "<div class ='sub'>chorus</div>";//Chorus
		echo "<br>";
		echo "<div class='chords'>        E       G#m     A\t</div>";
		echo "You were just a dream that I once knew<br>";
		echo "<div class='chords'>\t            E\t           G#m\t\t  A G#m F#m B  </div>";
		echo "I never thought I would be right for you<br>";
		echo "<div class='chords'>\t     E \t    E7   </div>";
		echo "I just cant compare you with<br>";
		echo "<div class='chords'>A\t       </div>";
		echo "As endless as forever<br>";
		echo "<div class='chords'>\t     G#m\tC#m\tF#m - B     </div>";
		echo "Our love will stay together<br>";
		echo "<div class='chords'>     \t  G#m   C#m  \t F#m    \tB     E </div>";
		echo "You're all I need to be with forevermore<br>";
		echo "<br>";
		echo "<div class ='sub'>Bridge</div>";//Bridge
		echo "<br>";
		echo "<div class='chords'>\t\t\t        C#m\tF#m - B  </div>";
		echo "(As endless as forever<br>";
		echo "<div class='chords'>\t\t    G#m\t        tF#m - B  </div>";
		echo "Our love will stay together)<br>";
		echo "<div class='chords'>          G#m\t  </div>";
		echo "You're all I need<br>";
		echo "<div class='chords'>\t C#m     \tF#m   B   E </div>";
		echo "To be with forevermore...<br>";
		echo "<br>";
		echo "<br>";
		echo "</pre";
	?>
</div>
</body>
</html>