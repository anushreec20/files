?php


$con = mysql_connect("localhost","root","","product");

if (!$con)

  {

  die('Could not connect: ' . mysql_error());

  }


$result = mysql_query("SELECT * FROM products");

while($row = mysql_fetch_array($result))

  {

  echo $row['Id'] . " " . $row['name']. $row['Mobile']. $row['email'];

  echo "<br />";

  }

 
?>