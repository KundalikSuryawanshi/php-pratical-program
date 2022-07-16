<html>

<form action ='php_slip_3.php' method='GET'>

Enter the first number : <input type ="text" name= a><br>
Enter the second number: <input type ="text" name= b><br>

operations::<br>

<input type=radio name=c value=1 > Addition.<br>
<input type=radio name=c value=2 > Subtraction.<br>
<input type=radio name=c value=3 > Multiplication.<br>
<input type=radio name=c value=4 > Division.<br>

<input type=submit value=ok>
<input type=reset value=clear>

</form>

</html>

<?php

$n1= $_GET['a'];
$n2= $_GET['b'];
$ch= $_GET['c'];

if($ch==1)
 {
 $c = $n1 + $n2;
 echo"addition is: $c"; 
 }
 else if($ch==2)
 {
 $c = $n1 - $n2; 
 echo"subtraction is: $c";
 }
 else if($ch==3)
 {
 $c = $n1 * $n2; 
 echo"multiplication is: $c";
 }
 else if($ch==4)
 {
 $c = $n1 / $n2; 
 echo"Division is: $c";
 
 }

?>