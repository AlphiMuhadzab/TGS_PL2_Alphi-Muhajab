<h1>Daftar Mahasiswa</h2>
<?php
include 'koneksi.php';
$db = new Database();
$con=$db->Connect();
$query=mysqli_query($con,"select * from mahasiswa");
while($data=mysqli_fetch_array($query)){
echo $data['NPM']; echo "<br>";
echo $data['Nama']; echo "<br>";
echo "<a href='latihan3.php?NPM=$data[NPM]'>Ubah</a> | <a href='latihan4.php?NPM=$data[NPM]'>Hapus</a>";
}
?>

<br>
<input type='button' onclick=location.href='latihan2.php' value='Tambah Data' />