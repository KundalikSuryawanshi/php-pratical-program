<html>

<body>

<center>

<h2> Calculate km and mile</h2>

<form action="slip13.php" method="POST"> 

Enter Distance :<input type="text" name="distance" /><br/>

Kms:<input type="radio" name="units" value="kms" /><br/>

Miles:<input type="radio" name="units" value="miles" />

<br/>

<input type="submit" value="submit" name="Show" />

<input type="reset" value="Reset" name="Reset" />

</form>

</center>

</body>

<html>

 



<?php

$distance=$_POST['distance'];

$units=$_POST['units'];

if($units=='kms'){

            $miles=$distance/1.60934;

            echo'The distance is'.round($miles).'miles.';

           

}else{

            $kms=$distance*1.60934;

            echo'The distance is'.round($kms).'kms.';

}

?>