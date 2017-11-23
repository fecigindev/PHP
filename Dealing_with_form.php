<!DOCTYPE html>
<html>
<head>
	<title>Dealing with form</title>
</head>
<body>

<form action="index.php" method="post">
 <p>Nama anda: <input type="text" name="nama" /></p>
 <p>Umur anda: <input type="text" name="lahir" /></p>
 <p><input type="submit" /></p>
</form>

Hey <?php echo htmlspecialchars($_POST['nama']); //jika input nama kosong maka error?>.
umurmu <?php echo (int)$_POST['lahir']; //jika input lahir kosong maka error dan jika input lahir charater maka nilai 0?> years old.

</body>
</html>
