<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
	<title>WEB250 ❱ Cyle McNulty's Cozy Mastadon ❱ Home</title>
    <link rel ="stylesheet" type="text/css" href = "styles/brand.css" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c&family=Space+Mono&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Space+Mono&display=swap" rel="stylesheet">
</head>
<body>
<header>
<h1>WEB250 | Cyle McNulty's Cozy Mastodon</h1>
    <nav>	
        <a href= "?p=contents/home.php"> Home</a>
        <a href= "?p=contents/introduction.php"> Introduction</a>
        <a href= "?p=contents/contract.php"> Contract</a>
        <a href= "?p=contents/brand.php">Brand</a>
    </nav>
</header>
<hr />
<!-- dynamic content goes here -->
<main>
<?php
	$sPage = $_GET["p"];
	//echo ("You picked the page: " . $sPage); 
	
	if($sPage == "") {  $sPage = "contents/home.php"; }
	include($sPage);
?>
</main>

<hr />

<footer>
<nav>
		<a href="https://github.com/cmcnult3" target=_blank>Github</a> | 
		<a href="https://cmcnult3.github.io/" target=_blank>Github Pages</a> | 
		<a href="http://cmcnult3.github.io/web250" target=_blank>Github Course</a> | 
		<a href="https://www.freecodecamp.org/cmcnult3" target=_blank>freecodecamp</a> | 
		<a href="https://www.codecademy.com/profiles/web8953627608" target=_blank>Codeacademy</a> | 
		<a href = "https://www.linkedin.com/in/cyle-mcnulty-320467111/" target=_blank>LinkedIn</a>
	</nav>
	</br></br>
	<img src="images/logo.png" alt="adventurepal">
	<br/><br/>Designed by Cyle McNulty © 2023<br/><br/>
    <a href="http://validator.w3.org/check?uri=referer" style = "text-decoration: none">
	  <img src="images/valid_html5.gif" alt="Validate HTML" />
    </a>
    <a href="http://jigsaw.w3.org/css-validator/check/referer" style = "text-decoration: none">
	 <img src="images/vcss.gif" alt="Validate CSS" />
    </a>
</footer>

</body>
</html>