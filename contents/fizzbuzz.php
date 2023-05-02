
<?php 
        //define variables and set default values
        $fizzWord = "" ; //Fizz
        $buzzWord = ""; //Buzz
        $bangWord = ""; //Bang
        $fizzbuzzWord = ""; 
        $firstName = "";//John
        $lastName = "";//Doe
        $startNum ="" ;//1
        $endNum = "";//100
        $num1 = "";//3
        $num2 = "";//5
        $num3 = "";//7

include 'fbform.php';

if(isset($_POST['submit']))
{
    if (empty($_POST["firstName"])) {
        $firstName = "John"; 
        } else {
        $firstName = $_POST["firstName"];
    }
    if (empty($_POST["lastName"])) {
        $lastName = "Doe"; 
        } else {
        $lastName = $_POST["lastName"];
    }
    if (empty($_POST["start"])) {
        $startNum = 1;
        }else{
        $startNum = $_POST["start"];
    }
    if (empty($_POST["end"])) {
        $endNum = 100;}
        else{
        $endNum = $_POST["end"];
        }
    if (empty($_POST["num1"])) {
        $num1 = 3;}
        else{
        $num1 = $_POST["num1"];
        }
    if (empty($_POST["num2"])) {
        $num2 = 5;}
        else{
        $num2 = $_POST["num2"];
        }
    if (empty($_POST["num3"])) {
        $num3 = 7;}
        else{
        $num3 = $_POST["num3"];
    }
    if (empty($_POST["word1"])) {
        $fizzWord = "Fizz";}
        else{
        $fizzWord = $_POST["word1"];
    }
    if (empty($_POST["word2"])) {
        $buzzWord = "Buzz";}
        else{
        $buzzWord = $_POST["word2"];
    }
    if (empty($_POST["word3"])) {
        $bangWord = "Bang";}
        else{
        $bangWord = $_POST["word3"];
    }
    $fizzbuzzWord = $fizzWord . $buzzWord; 
    
    echo "Hello " . $firstName . " " . $lastName . " your FizzBuzz results are Below:<br>";
    for ($i=$startNum; $i<=$endNum; $i++){
        //For multiples of three, print "Fizzword"
        if ($i % $num1 == 0){
            if ($i % $num2 != 0){
                echo "$fizzWord <br>";
            }
            //For numbers which are multiples of both num1 and num2, print "FizzBuzzword"
            else {
                echo "$fizzbuzzWord <br>";
            }
        }
        //For multiples of num2, print "Buzzword"
        elseif ($i % $num2 == 0)
        {
            echo "$buzzWord<br>";
        }
        //For multiples of num3, print "bangWord"
        elseif ($i % $num3 == 0){
            echo "$bangWord<br>";
        }
        else {
            echo $i . "<br>";
        }	
    }
}

?>
