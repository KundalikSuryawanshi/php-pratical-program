<html>
<form action='php_Slip_2.php' method='POST' >

Enter first String : <input type ='text' name='str1'><br>
Enter second String : <input type ='text' name='str2'><br>

Enter String to replace small string: <input type ='text' name ='str'><br>

	<input type ='radio' name='ch' value =1> first and last occurence<br>
	<input type ='radio' name= 'ch' value= 2> total occurence <br>
	<input type ='radio' name= 'ch' value=3> replace<br>
	<input type =submit name= 'ch' value= OK>
	<input type =reset value = cancel>

</form>
</html>

<?php

$str1 = $_POST['str1'];
$str2 = $_POST['str2'];
$str = $_POST['str'];
$ch = $POST['ch'];
$oc = 0;

echo "
<br>string1::$str1
<br>string2::$str2
<br>string for replace::$str<br><br>
>";

p?>