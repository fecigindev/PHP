<?php
$a_bool = TRUE;   // tipe boolean
$a_str  = "foo";  // tipe string
$a_str2 = 'foo';  // tipe string
$an_int = 12;     // tipe integer

echo gettype($a_bool); // tampilkan :  boolean
echo gettype($a_str);  // tampilkan :  string

// Jika ini adalah bilangan bulat, tambahkan dengan empat
if (is_int($an_int)) {
    $an_int += 4;
}

// jika $a_bool adalah sebuah string, cetaklah itu
// (tidak akan mencetak apapun)
if (is_string($a_bool)) {
    echo "String: $a_bool";
}
?>
