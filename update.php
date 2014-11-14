<?php
include('config/config.php');
 
//tangkap data dari form
$id = $_POST['txtID'];
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

//update data di database sesuai id
$query = mysql_query("update jamaah set fullname='$fullname', jk='$jk', tempat_lahir='$tempat_lahir', tgl_lahir='$tgl_lahir', kebangsaan='$kebangsaan', tgl_berangkat='$tgl_berangkat', file_gambar='$name' where id_jamaah='$id'") or die(mysql_error());
 
if ($query) {
    header('location:view.php?message=success');
}
?>