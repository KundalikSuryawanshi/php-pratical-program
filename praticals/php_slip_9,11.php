<html>
<h2>implementation of interface and class for area and volume</h2>

<form action = "php_slip_9.php" method = 'POST'>

Enter radius :<input type='text' name='rad'><br><br>
Enter height :<input type='text' name='hit'><br><br>

<input type='submit' value='calculate'>
<input type='reset' value='reset'>

</form>

</html>

<?php 

$r = $_POST['rad'];
$h = $_POST['hit'];

define('PI','3.1412');

Interface fun
{
	function area($r,$h);
	function volume($r,$h);
}

class cylinder implements fun
{
	function area($r,$h)
	{
		$area = (2*PI*$r*($r+$h));
		echo "area of cylinder is:"."$area";
	}

	function volume($r,$h)
	{
		$volume = (PI*$r*$r*$h);
		echo "<br>volume of cylinder is:"."$volume";
	}
}

//objects of a class
$o = new cylinder;
$o->area($r,$h);
$o->volume($r,$h);

?>