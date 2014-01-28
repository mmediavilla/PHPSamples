<?php
class Counter
{
	public $count;

	public function setNum($num)
	{
		$this->count = $num;
	}
	public function countUp()
	{
		$this->count++;
	}
}

$number = 0;

if (isset($_POST['submit'])) {
	$number = $_POST['count'];
	$counter = new Counter;
	$counter->setNum($number);
	$counter->countUp();
	$number = $counter->count;
	unset($counter);
}
?>
<html>
	<head>
		<title>Counter</title>
	</head>
	<body>
		<?php echo $number; ?>
		<form method="POST">
			<input type="hidden" name="count" value="<?php echo $number; ?>">
			<input type="submit" name="submit" value="Count Up">
		</form>
	</body>
</html>