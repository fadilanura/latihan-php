<?php
// cara lama
$hari = array("senin", "selasa", "rabu");
//cara baru
$arr1 = ["rabu", "juni", 30, true];
// cara menampilkan array var_dump() / print_r()
var_dump($arr1);
echo "<br>";
// menampilkan satu element array
echo $arr1[1];
echo "<br>";
// menambahkan element baru pada array
$hari[] = "kamis";
$hari[] = "jumat";
var_dump($hari);
echo "<br>";
// menampilkan semua array
foreach ($hari as $h) {
   echo "$h <br>";
}
// array asosiatif -> array yang memiliki index berupa string
$siswa = [
   'nama' => 'Nisa',
   'umur' => 16,
   'email' => 'nisa@gmail.com'
];
// cara menampilkan satu element
echo $siswa['nama'] . '<br>';
// cara menampilkan semua element
foreach ($siswa as $s) {
   echo $s . '<br>';
}
// multiple array -> array di dalam array (multidimensi)
$angka = [
   [1, 2, 3],
   [4, 5, 6],
   [7, 8, 9],
];
echo $angka[1][1];
foreach ($angka as $a) {
   // cara pertama
   echo $a[0] . '<br>';
   echo $a[1] . '<br>';
   echo $a[2] . '<br>';
   // cara kedua
   foreach ($a as $b) {
      echo $b . '<br>';
   }
   echo '<br>';
}
// latihan 2
$siswa = [
   ['nama' => 'devan', 'umur' => 16, 'hobi' => 'futsal'],
   ['nama' => 'ravi', 'umur' => 16, 'hobi' => 'nyanyi'],
   ['nama' => 'risma', 'umur' => 16, 'hobi' => 'nulis'],
];
foreach ($siswa as $s) {
   echo "<ul>";
   echo "<li>nama : " . $s['nama'] . "</li>";
   echo "<li>umur : " . $s['umur'] . "</li>";
   echo "<li>hobi : " . $s['hobi'] . "</li>";
   echo "</ul>";
}
