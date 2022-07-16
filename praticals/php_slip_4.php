<html>

<form action='php_slip_4.php' method='POST'>

Enter the first String :<input type='text' name='str1'><br>
Enter the second String :<input type='text' name='str2'><br>
Enter the string for Replace : <input type='text' name='str3'><br>

<br><input type='radio' name='ch' value='1'>Occurence
<br><input type='radio' name='ch' value='2'>Replace
<br><input type='radio' name='ch' value='3'>Split<br>
<br><input type='submit' name='ch' value='submit'>
<input type='reset' name='ch' value='cancel'>

</form>
</html>
<?php

$str1=$_POST['str1'];
$str2=$_POST['str2'];
$str3=$_POST['str3'];
$ch=$_POST['ch'];

echo "first string =$str1.<br>";
echo "second string=$str2.<br>";
echo "string for replace=$str3.<br>";

//condition to find length of string
if(strlen($str1)>strlen($str2))
{
 switch($ch)
 { 
	case 1: $pos=strpos(str1,str2);
	break;

	case 2: $str4 = str_replace($str2,$str3,str1);
	printf("\n string after replacing :<br>");
	echo"$str4";
	break;

	case 3: $slipted = preg_split("//",str1);
	printf("\n string after split :<br>");
	echo "$splited";
	break;

	
 }
}

?>