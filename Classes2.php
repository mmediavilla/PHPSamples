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
		echo "<option value=\"No Response\">--Select One--</option>";
		$this->makeOptions($listbrw);
		echo "</select>";
	}	
 
}

// Initialize variables
$browser = array('Firefox','Chrome','Internet Explorer','Safari','Opera','Other');
$speeds = array('Unknown','DSL','T1','Cable','Dialup','Other');
$os = array('Windows','Linux','Macintosh','Other');
?>
<html>
<head>
	<title>Select Field Class & Object</title>
</head>
<body>
	<?php //User Input ?>
	<p>* Indicates required field</p>
	<?php
	// If form not submitted, show form
	if (!isset($_POST['submit'])) {
	?>
		<form method="POST">
			<p>Name*: <input type="text" name="name"></p>
			<p>Username*: <input type="text" name="username"></p>
			<p>Email*: <input type="text" name="email"></p>
			<h1>Work Access: </h1>
			<p>Primary Browser: 
				<?php // Instantiate and Call class
				$select = new Select;
				$select->makeSelect('browser1',$browser);
				unset($select);
				?>
			</p>
			<p>Connection Speed:
				<?php // Instantiate and Call class
				$select = new Select;
				$select->makeSelect('speed1',$speeds);
				unset($select);
				?>
			</p>
			<p>Operating System:
				<?php // Instantiate and Call class
				$select = new Select;
				$select->makeSelect('os1',$os);
				unset($select);
				?>
			</p>
			<h1>Home Access: </h1>
			<p>Primary Browser: 
				<?php // Instantiate and Call class
				$select = new Select;
				$select->makeSelect('browser2',$browser);
				unset($select);
				?>
			</p>
			<p>Connection Speed:
				<?php // Instantiate and Call class
				$select = new Select;
				$select->makeSelect('speed2',$speeds);
				unset($select);
				?>
			</p>
			<p>Operating System:
				<?php // Instantiate and Call class
				$select = new Select;
				$select->makeSelect('os2',$os);
				unset($select);
				?>
			</p>				
			<input type="submit" name="submit" value="Enter"><br/>
		</form>	
	<?php
	}else{
		if (empty($_POST['name']) || empty($_POST['username']) || empty($_POST['email'])) {
			if (empty($_POST['name'])) 
				echo "Name is required.<br/>";

			if (empty($_POST['username'])) 
				echo "Username is required.<br/>";

			if (empty($_POST['email'])) 
				echo "Email is required.<br/>";
			else
				if (strpos($_POST['email'], '@')==false) {
					echo "Invalid email.<br/>";
				}

			die("<form><input type=\"button\" value=\"Back\" onClick=\"self.location='Classes2.php'\"></form>");
		}else{
			//Set POST variables
			$name = $_POST['name'];
			$username = $_POST['username'];
			$email = $_POST['email'];
			$selbrw1 = $_POST['browser1'];
			$selspd1 = $_POST['speed1'];
			$selos1 = $_POST['os1'];
			$selbrw2 = $_POST['browser2'];
			$selspd2 = $_POST['speed2'];
			$selos2 = $_POST['os2'];

			//Echo result
			echo "<p>Name: $name</p>";
			echo "<p>Username: $username</p>";
			echo "<p>Email: $email</p>";
			echo "<p>Work Access:</p>";
			echo "<ul>";
			echo "<li>Primary Browser: $selbrw1</li>";
			echo "<li>Connection Speed: $selspd1</li>";
			echo "<li>Operating System: $selos1</li>";
			echo "</ul>";
			echo "<p>Home Access:</p>";
			echo "<ul>";
			echo "<li>Primary Browser: $selbrw2</li>";
			echo "<li>Connection Speed: $selspd2</li>";
			echo "<li>Operating System: $selos2</li>";
			echo "</ul>";
		}
	}
	?>
</body>
</html>