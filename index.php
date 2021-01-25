<!DOCTYPE html>
<html>
<head>
<title>X Meets Y- Movie Pitch Generator™</title>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Kalam:wght@700&display=swap" rel="stylesheet">
<style type="text/css">
/* http://meyerweb.com/eric/tools/css/reset/ 
   v2.0 | 20110126
   License: none (public domain)
*/

html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, embed, 
figure, figcaption, footer, header, hgroup, 
menu, nav, output, ruby, section, summary,
time, mark, audio, video {
	margin: 0;
	padding: 0;
	border: 0;
	font-size: 100%;
	font: inherit;
	vertical-align: baseline;
}
/* HTML5 display-role reset for older browsers */
article, aside, details, figcaption, figure, 
footer, header, hgroup, menu, nav, section {
	display: block;
}
body {
	line-height: 1;
}
ol, ul {
	list-style: none;
}
blockquote, q {
	quotes: none;
}
blockquote:before, blockquote:after,
q:before, q:after {
	content: '';
	content: none;
}
table {
	border-collapse: collapse;
	border-spacing: 0;
}

body{
background-image:url('woodgrain.jpg');
}

#container{
width:780px;
min-height:600px;
margin-left:auto;
margin-right:auto;
}

#game_container{
float:left;
width:660px;
}

#right_ad_space{
float:right;
width:100px;
height:680px;
border:1px dashed black;
margin-top:10px;
}

#banner{
width:100%;
height:40px;
background-color:black;
color:white;
}
#logo{
float:left;
font-family:'Courier New',monospace;
font-weight:bold;
font-size:20px;
padding-top:10px;
padding-left:10px;
}
#menu{
float:right;
padding-top:10px;
padding-right:10px;
background-color:black;
}
#banner a{
color:white;
text-decoration:none;
}
#banner a:hover{
color:gold;
text-decoration:underline;
}


.card{
background-image:url('postit.png');
width:300px;
height:300px;
text-align:center;
margin:10px;
float:left;
font-family:'Kalam';
box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);;
}
.card p{
margin-top:140px;
font-size:20px;
}

#cards{
width:644px;
height:360px;
margin-left:auto;
margin-right:auto;
clear:both;
text-align:center;
}

#notebook{
background-image:url('paper.png');
width:644px;
height:300px;
margin-left:auto;
margin-right:auto;
clear:both;
text-align:center;
box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);;
}

#notebook h1{
font-weight:bold;
text-align:center;
font-family:'Courier New',monospace;
font-size:20px;
}

#notebook textarea{
width:624px;
height:200px;
margin:10px;
}

#footer_ad{
width:624px;
height:100px;
margin-left:auto;
margin-right:auto;
margin-top:30px;
border:1px dashed black;
}

</style>
<script>

let movies = ['The Shawshank Redemption (1994)', 'The Godfather (1972)', 'The Godfather Part II (1974)', 'Il buono, il brutto, il cattivo. (1966)', 'Pulp Fiction (1994)', 'Inception (2010)', 'Schindlers List (1993)', '12 Angry Men (1957)', 'One Flew Over the Cuckoos Nest (1975)', 'The Dark Knight (2008)', 'Star Wars Episode V - The Empire Strikes Back (1980)', 'The Lord of the Rings The Return of the King (2003)', 'Shichinin no samurai (1954)', 'Star Wars (1977)', 'Goodfellas (1990)', 'Casablanca (1942)', 'Fight Club (1999)', 'Cidade de Deus (2002)', 'The Lord of the Rings The Fellowship of the Ring (2001)', 'Rear Window (1954)', 'Cera una volta il West (1968)', 'Raiders of the Lost Ark (1981)', 'Toy Story 3 (2010)', 'Psycho (1960)', 'The Usual Suspects (1995)', 'The Matrix (1999)', 'The Silence of the Lambs (1991)', 'Se7en (1995)', 'Memento (2000)', 'Its a Wonderful Life (1946)', 'The Lord of the Rings The Two Towers (2002)', 'Sunset Blvd. (1950)', 'Dr. Strangelove or How I Learned to Stop Worrying and Love the Bomb (1964)', 'Forrest Gump (1994)', 'Léon (1994)', 'Citizen Kane (1941)', 'Apocalypse Now (1979)', 'North by Northwest (1959)', 'American Beauty (1999)', 'American History X (1998)', 'Taxi Driver (1976)', 'Terminator 2 Judgment Day (1991)', 'Saving Private Ryan (1998)', 'Vertigo (1958)', 'Le fabuleux destin dAmélie Poulain (2001)', 'Alien (1979)', 'WALL·E (2008)', 'Lawrence of Arabia (1962)', 'The Shining (1980)', 'Sen to Chihiro no kamikakushi (2001)', 'Paths of Glory (1957)', 'A Clockwork Orange (1971)', 'Double Indemnity (1944)', 'To Kill a Mockingbird (1962)', 'The Pianist (2002)', 'Das Leben der Anderen (2006)', 'The Departed (2006)', 'M (1931)', 'City Lights (1931)', 'Aliens (1986)', 'Eternal Sunshine of the Spotless Mind (2004)', 'Requiem for a Dream (2000)', 'Das Boot (1981)', 'The Third Man (1949)', 'L.A. Confidential (1997)', 'Reservoir Dogs (1992)', 'Chinatown (1974)', 'The Treasure of the Sierra Madre (1948)', 'Modern Times (1936)', 'Monty Python and the Holy Grail (1975)', 'La vita è bella (1997)', 'Back to the Future (1985)', 'The Prestige (2006)', 'El laberinto del fauno (2006)', 'Raging Bull (1980)', 'Nuovo Cinema Paradiso (1988)', 'Singin in the Rain (1952)', 'Some Like It Hot (1959)', 'The Bridge on the River Kwai (1957)', 'Rashômon (1950)', 'All About Eve (1950)', 'Amadeus (1984)', 'Once Upon a Time in America (1984)', 'The Green Mile (1999)', 'Full Metal Jacket (1987)', 'Inglourious Basterds (2009)', '2001 A Space Odyssey (1968)', 'The Great Dictator (1940)', 'Braveheart (1995)', 'Ladri di biciclette (1948)', 'The Apartment (1960)', 'Up (2009)', 'Der Untergang (2004)', 'Gran Torino (2008)', 'Metropolis (1927)', 'The Sting (1973)', 'Gladiator (2000)', 'The Maltese Falcon (1941)', 'Unforgiven (1992)', 'Sin City (2005)', 'The Elephant Man (1980)', 'Mr. Smith Goes to Washington (1939)', 'Oldeuboi (2003)', 'On the Waterfront (1954)', 'Indiana Jones and the Last Crusade (1989)', 'Star Wars Episode VI - Return of the Jedi (1983)', 'Rebecca (1940)', 'The Great Escape (1963)', 'Die Hard (1988)', 'Batman Begins (2005)', 'Mononoke-hime (1997)', 'Jaws (1975)', 'Hotel Rwanda (2004)', 'Slumdog Millionaire (2008)', 'Det sjunde inseglet (1957)', 'Blade Runner (1982)', 'Fargo (1996)', 'No Country for Old Men (2007)', 'Heat (1995)', 'The General (1926)', 'The Wizard of Oz (1939)', 'Touch of Evil (1958)', 'Per qualche dollaro in più (1965)', 'Ran (1985)', 'Yôjinbô (1961)', 'District 9 (2009)', 'The Sixth Sense (1999)', 'Snatch. (2000)', 'Donnie Darko (2001)', 'Annie Hall (1977)', 'Witness for the Prosecution (1957)', 'Smultronstället (1957)', 'The Deer Hunter (1978)', 'Avatar (2009)', 'The Social Network (2010)', 'Cool Hand Luke (1967)', 'Strangers on a Train (1951)', 'High Noon (1952)', 'The Big Lebowski (1998)', 'Hotaru no haka (1988)', 'Kill Bill Vol. 1 (2003)', 'It Happened One Night (1934)', 'Platoon (1986)', 'The Lion King (1994)', 'Into the Wild (2007)', 'There Will Be Blood (2007)', 'Notorious (1946)', 'Million Dollar Baby (2004)', 'Toy Story (1995)', 'Butch Cassidy and the Sundance Kid (1969)', 'Gone with the Wind (1939)', 'Sunrise A Song of Two Humans (1927)', 'The Wrestler (2008)', 'The Manchurian Candidate (1962)', 'Trainspotting (1996)', 'Ben-Hur (1959)', 'Scarface (1983)', 'The Grapes of Wrath (1940)', 'The Graduate (1967)', 'The Big Sleep (1946)', 'Groundhog Day (1993)', 'Life of Brian (1979)', 'The Gold Rush (1925)', 'The Bourne Ultimatum (2007)', 'Amores perros (2000)', 'Finding Nemo (2003)', 'The Terminator (1984)', 'Stand by Me (1986)', 'How to Train Your Dragon (2010)', 'The Best Years of Our Lives (1946)', 'Lock, Stock and Two Smoking Barrels (1998)', 'The Thing (1982)', 'The Kid (1921)', 'V for Vendetta (2006)', 'Casino (1995)', 'Twelve Monkeys (1995)', 'Dog Day Afternoon (1975)', 'Ratatouille (2007)', 'El secreto de sus ojos (2009)', 'Gandhi (1982)', 'Star Trek (2009)', 'Ikiru (1952)', 'Le salaire de la peur (1953)', 'Les diaboliques (1955)', '8½ (1963)', 'The Princess Bride (1987)', 'The Night of the Hunter (1955)', 'Judgment at Nuremberg (1961)', 'The Incredibles (2004)', 'Tonari no Totoro (1988)', 'The Hustler (1961)', 'Good Will Hunting (1997)', 'The Killing (1956)', 'In Bruges (2008)', 'The Wild Bunch (1969)', 'Network (1976)', 'Le scaphandre et le papillon (2007)', 'A Streetcar Named Desire (1951)', 'Les quatre cents coups (1959)', 'La strada (1954)', 'The Exorcist (1973)', 'Children of Men (2006)', 'Stalag 17 (1953)', 'Persona (1966)', 'Whos Afraid of Virginia Woolf? (1966)', 'Ed Wood (1994)', 'Dial M for Murder (1954)', 'La battaglia di Algeri (1966)', 'Låt den rätte komma in (2008)', 'All Quiet on the Western Front (1930)', 'Big Fish (2003)', 'Magnolia (1999)', 'Rocky (1976)', 'La passion de Jeanne dArc (1928)', 'Kind Hearts and Coronets (1949)', 'Fanny och Alexander (1982)', 'Mystic River (2003)', 'Manhattan (1979)', 'Barry Lyndon (1975)', 'Kill Bill Vol. 2 (2004)', 'Mary and Max (2009)', 'Patton (1970)', 'Rosemarys Baby (1968)', 'Duck Soup (1933)', 'Festen (1998)', 'Kick-Ass (2010)', 'Fa yeung nin wa (2000)', 'Letters from Iwo Jima (2006)', 'Roman Holiday (1953)', 'Pirates of the Caribbean The Curse of the Black Pearl (2003)', 'Mou gaan dou (2002)', 'The Truman Show (1998)', 'Crash (2004/I)', 'Hauru no ugoku shiro (2004)', 'His Girl Friday (1940)', 'Arsenic and Old Lace (1944)', 'Harvey (1950)', 'Le notti di Cabiria (1957)', 'Trois couleurs Rouge (1994)', 'The Philadelphia Story (1940)', 'A Christmas Story (1983)', 'Sleuth (1972)', 'King Kong (1933)', 'Bom yeoreum gaeul gyeoul geurigo bom (2003)', 'Rope (1948)', 'Monsters, Inc. (2001)', 'Tenkû no shiro Rapyuta (1986)', 'Yeopgijeogin geunyeo (2001)', 'Mulholland Dr. (2001)', 'The Man Who Shot Liberty Valance (1962)'];


function shuffleCards() {
var movie1 = movies[Math.floor(Math.random() * movies.length)];
var movie2 = movies[Math.floor(Math.random() * movies.length)];
  document.getElementById("left_card").innerHTML = "<p>" + movie1 + "</p>";
  document.getElementById("right_card").innerHTML = "<p>" + movie2 + "</p>";
  document.getElementById("movie_one").value = movie1;
  document.getElementById("movie_two").value = movie2;
}

</script>

</head>
<body onload="shuffleCards()">

<div id="banner">
<div id="logo"><span style="color:#69D2E7">X</span> Meets <span style="color:#F38630">Y</span> - Movie Pitch Generator<span style="font-family:'Arial';font-size:15px;">™</span></div>
<div id="menu"><a href="#">Play The Game</a> | <a href="#">Read & Review Pitches</a> | <a href="#">About</a> | <a href="#">Join Our Mailing List</a> | <a href="#">Merch</a> | <a href="#">Support On Patreon</a> | <a href="../">Other Projects</a></div>
</div>

<div id="container">
<div id="game_container">

<div id="cards">
<div id="left_card" class="card">
<p></p>
</div>
<div id="right_card" class="card">
<p></p>
</div>
<input type="button" value="Shuffle" onClick="shuffleCards()">
</div> <!-- end cards -->

<?php
if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
$file = 'pitches.txt';
// Open the file to get existing content
$current = file_get_contents($file);
// Append a new person to the file
$current .= $_POST['movie_one'] ." meets " . $_POST['movie_two'] . ": " .$_POST['pitch_text']."\n";
// Write the contents back to the file
file_put_contents($file, $current);
}
?>

<div id="notebook">
<h1>Write your pitch!</h1>
<form action="index.php" method="post">
<textarea name="pitch_text"></textarea>
<input type="text" id="movie_one" name="movie_one" style="display:none;">
<input type="text" id="movie_two" name="movie_two" style="display:none;">
<input type="submit">
</form>

</div><!-- end notebook -->


<div id="footer_ad">
Advertising here
</div><!-- end ad footer -->
</div><!-- end game container -->
<div id="right_ad_space">
Advertising <br>
here
</div>


</div>

</div>

</body>
</html>