<?php require_once('../functions/initialize.php'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>AdventurePal ❱ Home</title>
        <meta charset="utf-8">
        <link rel ="stylesheet" type="text/css" href = "../styles/brand.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c&family=Space+Mono&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Space+Mono&display=swap" rel="stylesheet">
    </head>

    <body>
        <header>
            Welcome to AdventurePal!
        </header>
        <nav>
                <a href= "?p=contents/home.php"> Home</a>
                <a href= "?p=contents/about.php"> About</a>
                <a href= "?p=contents/contact.php"> Contact</a>
                <a href= "?p=contents/login.php">Login</a>
        </nav>
        
        <footer>
            <img src="../images/logo.png" alt="adventurepal">
            <br><br>Designed by Cyle McNulty © <?php echo date('Y'); ?><br><br>
            <a href="http://validator.w3.org/check?uri=referer" id = "link_html" style = "text-decoration: none">
            <img src="../images/valid_html5.gif" alt="Validate HTML">
            </a>
            <a href="http://jigsaw.w3.org/css-validator/check/referer" id= "link_css" style = "text-decoration: none">
            <img src="../images/vcss.gif" alt="Validate CSS">
            </a>
            <script>
            document.getElementById("link_html").setAttribute("href", "https://validator.w3.org/check?uri=" + location.href);
            document.getElementById("link_css").setAttribute("href", "https://jigsaw.w3.org/css-validator/validator?uri=" + location.href);
            </script> 
        </footer>
    </body>
</html>