<?php
include('config/config.php');
 
$id = $_GET['id_jamaah'];
 
$query = mysql_query("delete from jamaah where id_jamaah='$id'") or die(mysql_error());
 
if ($query) {
    header('location:index.php?message=delete');
}
?>