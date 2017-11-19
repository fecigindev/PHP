<?php
$con = mysqli_connect("127.0.0.1","root","","mydatabase");
$sql = "SELECT * FROM yourTable;
$result = $con->query($sql);

while($r = $result->fetch_assoc()){
  echo $r['colum']," ",$r['row'];
}
?>
