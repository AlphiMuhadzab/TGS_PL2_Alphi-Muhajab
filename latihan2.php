<h1>Input Mahasiswa</h2>
<?php
include 'koneksi.php';
$db = new Database();
$con=$db->Connect();
if(isset($_POST['proses']))
{
$query=mysqli_query($con,"insert into mahasiswa values(
'".$_POST['npm']."',
'".$_POST['nama']."'
)");
header('location:latihan1.php');
}
?>
<form action="" method="POST">
<input type="text" name="npm">
<input type="text" name="nama">
<input type="submit" name="proses" value="Simpan">
</form>