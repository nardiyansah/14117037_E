<?php
$koneksi = mysqli_connect("localhost","root","") or die("koneksi gagal");
mysqli_select_db($koneksi, "mahasiswa");
$hasil = mysqli_query($koneksi, "SELECT * FROM informatika");
// while ($row = mysqli_fetch_array($hasil)) {
//     print_r($row);
// }
// while ($row = mysqli_fetch_row($hasil)) {
//     print_r($row);
// }
while ($row = mysqli_fetch_assoc($hasil)) {
    print_r($row);
}
?>