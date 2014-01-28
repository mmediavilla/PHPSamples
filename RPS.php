<?php
// Available moves
$moves = array('Rock','Paper','Scissors');

// Intialize scores of Player 1 and Player2 (CPU).
// As the game goes by, the scores are updating.
if (!isset($_POST['submit'])) {
	$score1 = 0;
	$score2 = 0;
}else{
	$score1 = $_POST['score1'];
	$score2 = $_POST['score2'];
}

// Class for option
class Option
{
	// This will create radio buttons in each options given.
	// <input name="$name" value="$value">
	private $name;
	private $value;

	// Sets the name of the option and store it in $name
	private function setName($new_name)
	{
		$this->name=$new_name;
	}

	// Gets the name of the option from $name
	private function getName()
	{
		return $this->name;
	}

	// Sets the value of the option and store it in $value.
	// The value must be in array, otherwise it will turn NULL.
	private function setValue($new_value)
	{
		if (is_array($new_value)) {
			$this->value=$new_value;
		}else{
			$this->value=NULL;
		}
	}

	// Gets the value of the option from $value
	private function getValue()
	{
		return $this->value;
	}

	// Method that makes options in radio buttons
	public function makeOption($name,$list)
	{
		$this->setName($name);
		$option_name = $this->getName();
		$this->setValue($list);
		$option_value = $this->getValue();

		foreach ($option_value as $o) {		// create radio inputs for each values in the array
			echo "<input type=\"radio\" name=\"$option_name\" value=\"$o\">$o<br/>";
		}

	}
}

class Game
{
	// This will process the gameplay.
	// The class should get the moves of each players.
	// The class should also get the scores of each players and update when the game ends.
	private $move;
	public $score1;
	public $score2;

	// Sets a move and store it in $move
	private function setMove($new_move)
	{
		$this->move=$new_move;
	}

	// Gets a move from %move
	private function getMove()
	{
		return $this->move;
	}

	// Sets the scores of two players and store it in $score1 and $score2
	private function setScore($new_score1,$new_score2)
	{
		$this->score1=$new_score1;
		$this->score2=$new_score2;
	}

	// Increments the score of player 1
	private function addScore1()
	{
		$this->score1++;
	}

	// Increments the score of player 2
	private function addScore2()
	{
		$this->score2++;
	}

	// The whole process of the game goes here.
	// This will get the moves of two players and match the result.
	// Whoever wins gets a point.
	public function playGame($move1,$move2,$number1,$number2)
	{
		$this->setMove($move1);
		$player1_move = $this->getMove();
		$this->setMove($move2);
		$player2_move = $this->getMove();
		$this->setScore($number1,$number2);

		if ($player1_move == $player2_move) {
			echo "It's a Draw.<br/>";
		}
		else if (($player1_move == 'Rock' && $player2_move == 'Scissors') ||
			     ($player1_move == 'Scissors' && $player2_move == 'Paper') ||
			     ($player1_move == 'Paper' && $player2_move == 'Rock')) {
			$this->addScore1();
			echo "You Win!<br/>";
		}else{
			$this->addScore2();
			echo "You Lose.<br/>";
		}
	}
}
?>
<html>
    <head>
    	<title>Rock, Paper, Scissors</title>
    </head>
    <body>
    	<h1>Rock, Paper, Scissors</h1>
    	<?php
    	// Check if the players made a move.
    	// This will display the gameplay of the game.
    	if (isset($_POST['move'])) {
    		$move=$_POST['move'];
    		$cpu_move =$moves[array_rand($moves,1)];

    		echo "Player 1: $move<br/>";
    		echo "CPU: $cpu_move<br/>";
  
    		$game = new Game;
    		$game->playGame($move,$cpu_move,$score1,$score2);
    		$score1 = $game->score1;
    		$score2 = $game->score2;
    		echo "<br/>Your Score: $score1<br/>";
    		echo "CPU Score: $score2<br/>";
    	}else{
    		echo "Make a move first!";
    	}
    	?>

        <form method="POST">
        	<p>Your move: <br/>
        		<?php
        		// Create an option element for each moves.
        		$player = new Option;
        		$player->makeOption('move',$moves);
        		unset($player);
        		?>
        	</p>
      		<?php // The two hidden values will update the score everytime the page is refreshed. ?>
    		<input type="hidden" name="score1" value="<?php echo $score1; ?>">
    		<input type="hidden" name="score2" value="<?php echo $score2; ?>">
        	<input type="submit" name="submit" value="Go">
        </form>
    </body>
</html>