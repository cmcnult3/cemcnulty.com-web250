 <?php

require "unp.php";
$mysqli = new mysqli($dbhost,$dbuser,$password, 'cemcnult_Cars');
/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
//select a database to work with
$mysqli->select_db("cemcnult_Cars");
 
?>