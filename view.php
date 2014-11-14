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
        <title>Detail Data Jama'ah</title>
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
		
		
<h2 align="center"><font>Detail Data Jama'ah Umrah</font></h2>
<form action="insert.php" method="post" name="form">
<input type="hidden" name="id" value="<?php echo $id; ?>" />
<table width="68%" border="0" align="left" cellpadding="10" cellspacing="0">
	<tbody>
		<tr class="head">
			<td colspan="3"></td>
            <td rowspan="7"><?php echo "<img src=\"".$data['file_gambar']."\"><br>";?></td>
           </tr>
		<tr class="head" rowspan="3">
            <td width="20%">ID Jama'ah</td>
			<td width="3%">:</td>
			<td width="64%">RMN<?php echo $data['id_jamaah']; ?></td>
        </tr>
         <tr class="head" rowspan="3">
            <td width="20%">Nama</td>
			<td width="3%">:</td>
			<td width="64%"><?php echo $data['fullname']; ?></td>
        </tr>
		<tr class="head">
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td><?php echo $data['jk']; ?>
			</td>
		</tr>
		<tr class="head">
            <td width="20%">Tempat Lahir</td>
			<td width="3%">:</td>
			<td width="64%"><?php echo $data['tempat_lahir']; ?></td>
        </tr>
		<tr class="head">
			<td>Tgl Lahir</td>
			<td>:</td>
			<td><?php echo $data['tgl_lahir']; ?></td>
		</tr>
		<tr class="head">
			<td>Kebangsaan</td>
			<td>:</td>
			<td><?php echo $data['kebangsaan']; ?>
			</td>
		<tr class="head">
            <td width="20%">No Paspor</td>
			<td width="3%">:</td>
			<td width="64%"><?php echo $data['no_paspor']; ?></td>
        </tr>
		<tr class="head">
			<td>Tgl Berangkat</td>
			<td>:</td>
			<td><?php echo $data['tgl_berangkat']; ?></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
			<td><a href="edit.php?id_jamaah=<?php echo $data['id_jamaah']; ?>"><button type="button" onClick="edit.php?id_jamaah=<?php echo $data['id_jamaah']; ?>">Edit</button></a>&nbsp;&nbsp;&nbsp;
			<a href="delete.php?id_jamaah=<?php echo $data['id_jamaah']; ?>"><button type="button" name="delete">Hapus Data</button></a>&nbsp;&nbsp;&nbsp;
			<input type="button" name="back" value="Kembali" onclick="history.back(-1)" />
		</tr>
		
    </tbody>
			
	</div>
</body>
</html>