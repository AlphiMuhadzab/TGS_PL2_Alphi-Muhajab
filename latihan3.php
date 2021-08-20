<h1>Update Data Mahasiswa</h2>
<?php

        include 'koneksi.php';
        $db = new Database();
        $con=$db->Connect();
        $npm= $_GET['NPM'];


        $query=mysqli_query($con,"SELECT * FROM mahasiswa WHERE NPM='$npm'")or die(mysql_error());
        while($data=mysqli_fetch_array($query)){

        if(isset($_POST['proses']))
        {
        $nama= $_POST['Nama'];
        $query=mysqli_query($con,"UPDATE mahasiswa SET NPM='$NPM', Nama='$nama' WHERE NPM='$npm'");
        header('location:latihan1.php');
        }

?>

<form action="" method="POST">
NPM <br>
<input type="text" name="NPM" value="<?php echo $data['NPM'] ?>" disabled><br>
NAMA <br>
<input type="text" name="Nama" value="<?php echo $data['Nama'] ?>"><br>
<br>
<input type="submit" name="proses" value="Simpan">
<input type='Button' onclick=location.href='latihan1.php' value='Batal' />
</form>

    <?php } ?>