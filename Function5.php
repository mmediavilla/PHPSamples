<?php
//Define checkbox function.
function ckBox(){
  $args=func_get_args();
  foreach ($args as $a){
    echo "<input type=\"checkbox\" name=\"weather[]\" value=\"$a\" />".ucwords($a)."<br />\n";
  }
}
 
//Define list item function.
function listIt($args){
//Conditional statement to determine if argument is array. If not, make it one.
  if (!is_array($args)){
    $args = explode(',', $args);
  }
//Loop through the array. Be sure to include line feeds for your HTML source.
  foreach ($args as $a){
    echo "<li>" . ucwords($a). "</li>\n";
  }
}
?>
 
<html>
<head>
<title>Variable Number of Array Arguments</title>
</head>
 
<body>
<h2>How's your weather now?</h2>
 
<?php
//If form not submitted, display form.
if (!isset($_POST['submit'])){
?>
<form method="post">
<p>Please enter your information:</p>
<p>City: <input type="text" name="city" /></p>
<p>Month: <input type="text" name="month" /></p>
<p>Year: <input type="text" name="year" /></p>
<p>Please choose the kinds of weather you experienced from the list below. <br />
Choose all that apply. </p>
<?php
  ckBox('sunshine', 'clouds', 'rain', 'hail', 'sleet', 'snow', 'wind',
  'cold', 'heat', 'fog','humidity'); //Fog, humidity added here.
?>
<p />
<!--New request for data from the user.-->
<p>Anything else? Please list the additional weather conditions in box below,
separated by commas.</p>
<input type="text" name="more" size="60" /><p />
<input type="submit" name="submit" value="Go" />
</form>
<?php
//If form submitted, process input.
}else{
//Retrieve the date and location information.
$inputLocal = array(
  $_POST['city'],
  $_POST['month'],
  $_POST['year']
);
echo "In $inputLocal[0] in the month of $inputLocal[1] $inputLocal[2], you observed
the following weather:<br /> \n<ul>";
/*Retrieve the user response. Creating these variables is not strictly necessary.
You could just use the $_POST variable in the function, but creating separate
variables makes your code easier to read. */
$weather = $_POST['weather'];
$more = $_POST['more'];
//Call the function for each response.
listIt($weather);
listIt($more);
echo "</ul>";
}
?>
 
</body>
</html>