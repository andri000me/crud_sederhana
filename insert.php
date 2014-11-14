<?php
//panggil file config.php untuk menghubung ke server
include('config/config.php');
 
//tangkap data dari form
$fullname = $_POST['txtNama'];
$jk = $_POST['radJK'];
$tempat_lahir = $_POST['txtKota'];
$tgl_lahir = $_POST['txtTgl'];
$kebangsaan = $_POST['cboKebangsaan'];
$no_paspor = $_POST['txtPaspor'];
$tgl_berangkat = $_POST['txtBerangkat'];

//deklarasi variabel untuk upload foto
$folder = "gambar";
$tmp_name = $_FILES["file_foto"]["tmp_name"];
$name = $folder."/".$_FILES["file_foto"]["name"];

// kode untuk upload ke folder gambar
move_uploaded_file($tmp_name, $name);

 
//simpan data ke database
$query = mysql_query("insert into jamaah values('', '$fullname', '$jk', '$tempat_lahir', '$tgl_lahir', '$kebangsaan', '$no_paspor', '$tgl_berangkat', '$name')") or die(mysql_error());
 
if ($query) {
    header('location:input.php?message=success');
}
?>