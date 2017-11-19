<?php
$sambung = mysqli_connect("127.0.0.1","root","","mydatabase");
$sql = "SELECT * FROM yourTable";  //contoh SELECT * FROM perpus
$result = $sambung->query($sql);

while($r = $result->fetch_assoc()){
  echo $r['colum']," ",$r['row'];     //contoh $r['alamat'] $r['nama depan']
}
?>
