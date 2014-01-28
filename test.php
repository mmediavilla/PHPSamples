<?php
if (!isset($_POST['submit'])) {
    $xcoordinate=0;
    $ycoordinate=0;
    $move=0;
}else{
    $xcoordinate=$_POST['xcoordinate'];
    $ycoordinate=$_POST['ycoordinate'];
    $move=$_POST['move'];
    switch ($move) {
        case 0:
        case 1:
        case 2:
            $xcoordinate+=150;
            break;
        case 3:
        case 4:
        case 5:
            $ycoordinate+=150;
            break;
        case 6:
        case 7:
        case 8:
            $xcoordinate-=150;
            break;
        case 9:
        case 10:
            $ycoordinate-=150;
            break;
        case 11:
            $ycoordinate-=150;
            $move=-1;
            break;
        default:
            $xcoordinate=0;
            $ycoordinate=0;
            break;
    }
    $move++;    
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    	<title></title>
    </head>

    <body>
    	<?php
    	echo "$move <br/>";
		echo "$xcoordinate <br/>";
		echo "$ycoordinate <br/>";
    	?>
    	<img src="merge.php?xcoordinate=<?php echo $xcoordinate; ?>&ycoordinate=<?php echo $ycoordinate; ?>" alt="board">
    	<form method="POST" name="click" action="test.php">
    		<input type="submit" name="submit" value="Click">
    		<input type="hidden" name="move" value="<?php echo $move; ?>">
            <input type="hidden" name="xcoordinate" value="<?php echo $xcoordinate; ?>">
    		<input type="hidden" name="ycoordinate" value="<?php echo $ycoordinate; ?>">
    	</form>
    </body>
</html>