<h2>FizzBuzzBangEverything!</h2>

<form method = "POST" action>
First name: <input type="text" id="firstName" name="firstName" value="<?php echo $firstName;?>">
<br>
Last name: <input type="text" id="lastName" name="lastName" value="<?php echo $lastName;?>">
<br>
Start Number: <input type="number" id="start" name="start" value="<?php echo $startNum;?>" min="1" max="1000">
<br>
End Number: <input type="number" id="end" name="end" value="<?php echo $endNum;?>" min="10" max="1000">
<br>
Number : Word Pairs
<br>
<input type="number" class="number" id="number1" name="number1" value="<?php echo $num1;?>"> : 
<input type="text" class="word" id="word1" name="word1" value="<?php echo $fizzWord;?>"><br> 
<input type="number" class="number" id="number2" name="number2" value="<?php echo $num2;?>"> :
<input type="text" class="word" id="word2" name="word2" value="<?php echo $buzzWord;?>"><br> 
<input type="number" class="number" id="number3" name="number3" value="<?php echo $num3;?>"> :
<input type="text" class="word" id="word3" name="word3" value="<?php echo $bangWord;?>"> 
<br>
<input type="submit" value="Submit" name="submit" >
</form>