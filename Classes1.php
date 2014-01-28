<?php
// Define select class
class Select{

	// Define properties
	private $name;
	private $value;

	// Define methods
	private function setName($newname){
		$this->name=$newname;
	}

	private function getName(){
		return $this->name;
	}

	private function setValue($newvalue){
		if (is_array($newvalue)) {
			$this->value=$newvalue;
		}
		else
			$this->value=0;
	}

	private function getValue(){
		return $this->value;
	}

	private function makeOptions($option)
	{
		$this->setValue($option);
		$selopt = $this->getValue();
		foreach ($selopt as $v) {
			echo "<option value=\"$v\">" . ucfirst($v) . "</option>";
		}
	}

	public function makeSelect($name,$listbrw)
	{
		$this->setName($name);
		$selname = $this->getName();
		echo "<select name=\"$selname\">";
		$this->makeOptions($listbrw);
		echo "</select>";
	}	
 
}

// Initialize variables
$browser = array ('Firefox','Chrome','Internet Explorer','Safari','Opera','Other');
?>
<html>
<head>
	<title>Select Field Class & Object</title>
</head>
<body>
	<?php //User Input ?>
	<form method="POST">
		<p>Name: <input type="text" name="name"></p>
		<p>Username: <input type="text" name="username"></p>
		<p>Email: <input type="text" name="email"></p>
		<p>Browser: 
			<?php // Instantiate and Call class
			$select = new Select;
			$select->makeSelect('browser',$browser);
			?>
		</p>
		<input type="submit" name="submit" value="Enter"><br/>
	</form>
	
	<?php //Display text
	if (isset($_POST['submit'])) {
		//Set POST variables
		$name = $_POST['name'];
		$username = $_POST['username'];
		$email = $_POST['email'];
		$selbrw = $_POST['browser'];

		//Echo result
		echo "<p>Name: $name</p>";
		echo "<p>Username: $username</p>";
		echo "<p>Email: $email</p>";
		echo "<p>Browser: $selbrw</p>";
	}
	?>
</body>
</html>