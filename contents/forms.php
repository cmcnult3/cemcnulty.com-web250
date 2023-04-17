<h2> One Form, Two Forms, Red Forms, Green Forms</h2>
<datalist id="loctype">
  <option value="National Park">
  <option value="Landmark">
  <option value="Trail">
  <option value="Beach">
  <option value="River">
  <option value="Restaurant">
  <option value="Other (Enter Data)">
</datalist>

<h3>Destination Form with POST</h3>
<form method="POST">
    <label for="locname">Location Name:</label><br>
    <input type="text" id="locname" name ="locname"><br>
    <label for="type">Location Type:</label><br>
    <input type="text" id="type" name ="type" list="loctype"><br>
    <label for="description">Decription:</label><br>
    <textarea id="description" name ="description" rows ="3" cols="80" placeholder ="Provide additional details about this destination here."></textarea><br>
    <br><input type="submit" value="Submit">
</form>
<hr/>

<h3>Destination Form with GET</h3>
<form method="GET">
    <label for="locname">Location Name:</label><br>
    <input type="text" id="locname" name ="locname"><br>
    <label for="type">Location Type:</label><br>
    <input type="text" id="type" name ="type" list="loctype"><br>
    <label for="description">Location Description:</label><br>
    <textarea id="description" name ="description" rows ="3" cols="80" placeholder ="Provide additional details about this destination here."></textarea><br>
    <br><input type="submit" value="Submit">
</form><hr/>

<?php include "visitsummary.php"; ?>


