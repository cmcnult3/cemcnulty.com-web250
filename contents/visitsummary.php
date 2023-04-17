<h3>Visit Summary</h3>
<?php
if(!isset($_GET["locname"])){
    if(!isset($_POST["locname"])){
        echo "Please Fill in one of the forms above and submit";     
    }else{
        $location = $_POST["locname"];
        $type = $_POST["type"];
        $description = $_POST["description"];
        $form = "POST";
        echo "<p>You used the $form form and plan to visit $location. 
        $location is a $type and below is a breif description of your destination.<p>
        <p>$description </p>";
    }
}else{
    $location = $_GET["locname"];
    $type = $_GET["type"];
    $description = $_GET["description"];
    $form = "GET";
    echo "<p>You used the $form form and plan to visit $location. 
    $location is a $type and below is a breif description of your destination.<p>
    <p>$description </p>";
} ?>

<!-- Need to rethink this logic. I want to add many more variables without having to list them in each else statement or
repeat the echo staement under each condition -->

