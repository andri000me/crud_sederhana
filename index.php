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
        <title>Aplikasi Data Jama'ah Umrah PT. Raudhah Amani Wisata</title>
        <meta name="author" content="Faisal Abdurrahman" />
        <link rel="shortcut icon" href="../favicon.ico"> 
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
	<?php
if (!empty($_GET['message']) && $_GET['message'] == 'delete') {
    echo"<script>alert('Data berhasil dihapus!');</script>";
}
?>
	  <div class="table">
<h2 align="center"><font>Data Jama'ah Umrah</font></h2>
	  <table width="50%" border="1" align="left" cellpadding="10" cellspacing="0">
    <thead>
        <tr class="head">
            <td>No.</td>
            <td>Nama Lengkap</td>
            <td>Jenis Kelamin</td>
            <td>Kebangsaan</td>
            <td>Tgl Berangkat</td>
			<td></td>
        </tr>
    </thead>
    <tbody>
			<?php
		$per_page = 10;
			
			$page_query = mysql_query("SELECT COUNT(*) FROM jamaah");
			$pages = ceil(mysql_result($page_query, 0) / $per_page);

			$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
			$start = ($page - 1) * $per_page;
			
			$query = mysql_query("select * from jamaah LIMIT $start, $per_page");
		 
			$no = 1;
			while ($data = mysql_fetch_array($query)) {
			?>
        <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $data['fullname']; ?></td>
            <td><?php echo $data['jk']; ?></td>
            <td><?php echo $data['kebangsaan']; ?></td>
            <td><?php echo $data['tgl_berangkat']; ?></td>
            <td>
				<a href="view.php?id_jamaah=<?php echo $data['id_jamaah']; ?>">Detail</a>
			</td>
        </tr>
    <?php
        $no++;
    }
    ?>
    </tbody>

	
	</div>
	<p><font size="3"><?php
	if($pages >= 1 && $page <= $page){
			for($x=1; $x<=$pages; $x++){
					echo ($x == $page) ? '<b><a href="?page='.$x.'">' .$x. '</a></b>' :
			'<a href="?page='.$x.'">'.$x.'</a>';
				echo '&nbsp;';
			}
	}
?></font></p>
	
</body>
</html>