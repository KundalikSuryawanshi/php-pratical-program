<!DOCTYPE html>

<html>

  <body>

    <form action="php_slip_15.php" method="GET">

      Please select your gelosery<br />

 

      <input type="checkbox" name="check_b[]" value="rice" />Rice<br />

      <input type="checkbox" name="check_b[]" value="oils" />Oils<br />

      <input type="checkbox" name="check_b[]" value="milk" />Milk<br />

      <input type="checkbox" name="check_b[]" value="bread" />Bread<br />

      <input type="submit" value="sumbit" />

    </form>

  </body>

</html>

 

 slip15.php

<?php

$hostname="127.0.0.1";

$db_name="grecery";

$username="root";

$password="";

$connection=mysqli_connect("$hostname","$username","$password","$db_name")or

die("unable to connect");

if(!$connection){

    echo"Error:Unable to connect to MySQL.<br>";

    echo"<br>Debugging errno: ".mysqli_connect_errno();

    echo"<br>Debugging errno: ".mysqli_connect_errno();

    exit;

 

}

if($stmt =$connection->query("SELECT * FROM `bill` ")){

    echo "<table border='2'>";

    echo "<tr><td>sr.no</td><td>Name Item</td><td>Quntity</td><td>Rate</td><td>Amount</td></tr>";

    while($row=$stmt->fetch_assoc()){

    echo "<tr><td>".$row['s.no']."</td>";

    echo"<td>". $row['Name Item']."</td>";

    echo "<td>".$row['Quntity']."</td>";

    echo "<td>".$row['Rate']."</td>";

    echo "<td>".$row['Amount']."</td></tr>";

 

}

echo "</table>";


 

}

?>