<?php
include('config/config.php');
include('cek-login.php');
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>	
	<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Edit Data Jama'ah</title>
        <meta name="author" content="Faisal Abdurrahman" />
        <link rel="shortcut icon" href="../favicon.ico"> 
		<link rel="stylesheet" type="text/css" href="css/menu.css"/>
		<link rel="stylesheet" type="text/css" href="css/tabel.css"/>
	<link rel="stylesheet" type="text/css" href="css/menu.css"/>
	<link rel="stylesheet" type="text/css" href="css/tabel.css"/>	
</head>
<body>
    <br />
	<center><img src="images/logo-ramani.png">
	<h2>Aplikasi Web Data Jama'ah Umrah <b class="header">PT. Raudhah Amani Wisata</b></h2></center>
			<ul class="menu">
			<li><a href="index.php">Home</a></li>
			<li><a href="index.php">Jama'ah</a>
				<ul>
					<li><a href="input.php">Input Data Jama'ah</a></li>
					<li><a href="#">Edit Data Jama'ah</a></li>
					<li><a href="#">Delete Data Jama'ah</a></li>
				</ul>	
			</li>
			<li><a href="logout.php">Logout</a></li>
		</ul>
		
	</div>
	<br /><br /><br />
	  <div class="table">

		  <?php
		$id = $_GET['id_jamaah'];
		 
		$query = mysql_query("select * from jamaah where id_jamaah='$id'") or die(mysql_error());
		 
		$data = mysql_fetch_array($query);
		?>
		

<h2 align="center"><font>Edit Data Jama'ah Umrah</font></h2>

<form action="update.php" enctype="multipart/form-data" method="post" name="update_data">
<table width="68%" border="0" align="left" cellpadding="10" cellspacing="0">
	<tbody>
		<tr>
			<td colspan="3"></td>
            <td rowspan="7"><?php echo "<img src=\"".$data['file_gambar']."\"><br>";?><small><i>Edit foto disini (3 x 4 cm):<br><input type="file" name="file_foto" size="20"></small></td>
           </tr>
		<tr class="head" rowspan="3">
            <td width="20%">ID Jama'ah</td>
			<td width="3%">:</td>
			<td width="64%"><input name="txtID" type="text" id="txtID" size="6" value="RMN<?php echo $data['id_jamaah']; ?>" disabled /></td>
        </tr>
         <tr class="head" rowspan="3">
            <td width="20%">Nama</td>
			<td width="3%">:</td>
			<td width="64%"><input name="txtNama" type="text" id="txtNama" size="70" value="<?php echo $data['fullname']; ?>" required="required"></td>
        </tr>
		<tr class="head">
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td><input name="radJK" type="radio" value="Laki-laki" checked>
				Laki-laki
				<input type="radio" name="radJK" value="Perempuan" required="required">
				Perempuan
			</td>
		</tr>
		<tr class="head">
            <td width="20%">Tempat Lahir</td>
			<td width="3%">:</td>
			<td width="64%"><input name="txtKota" type="text" id="txtKota" size="30" value="<?php echo $data['tempat_lahir']; ?>" required="required"></td>
        </tr>
		<tr class="head">
			<td>Tgl Lahir</td>
			<td>:</td>
			<td><input name="txtTgl" type="text" id="txtTgl" size="15" maxlength="10" value="<?php echo $data['tgl_lahir']; ?>" required="required">&nbsp;&nbsp;yyyy-mm-dd</td>
		</tr>
		<tr class="head">
			<td>Kebangsaan</td>
			<td>:</td>
			<td><select name="cboKebangsaan" id="cboKebangsaan">
				<option>Indonesia</option>
				<option>Arab Saudi</option>
				<option>Amerika Serikat</option>
				<option>Malaysia</option>
				<option>Brunei Darussalam</option>
			</td>
		<tr class="head">
            <td width="20%">No Paspor</td>
			<td width="3%">:</td>
			<td width="64%"><input name="txtPaspor" type="text" id="txtPaspor" size="20" value="<?php echo $data['no_paspor']; ?>" required="required"></td>
        </tr>
		<tr class="head">
			<td>Tgl Berangkat</td>
			<td>:</td>
			<td><input name="txtBerangkat" type="text" id="txtBerangkat" size="15" maxlength="10" value="<?php echo $data['tgl_berangkat']; ?>" required="required">&nbsp;&nbsp;yyyy-mm-dd</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td><input name="btnSimpan" type="submit" id="btnSimpan" value="Simpan">
			<input name="btnCancel" type="reset" id="btnCancel" value="Cancel">
			<input type="button" value="Kembali" onclick="history.back(-1)" /></td>
		</tr>
    </tbody>
			
	</div>
</body>
</html>