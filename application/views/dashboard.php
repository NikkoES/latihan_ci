<!DOCTYPE html>
<html>
<head>
	<title>Halaman Utama</title>
</head>
<body>
	<a href="<?php echo base_url() ?>index.php">Mahasiswa</a><br>
	<a href="<?php echo base_url() ?>index.php/matakuliah">Mata Kuliah</a>
	<h1>Halaman Utama</h1>
	<h1>Selamat Datang di 
		<?php echo $nama ?>, Alamat
	<?php echo $alamat ?>	
	</h1>
	<h3>DATA MAHASISWA</h3>
	<?php
	echo form_open('dashboard/input');
	$att_nim = array('name' => 'nim', 'placeholder'=>'masukan NIM',
	                 'type' => 'text', 'style'=>'width:250px');
	echo form_input($att_nim);echo "<br>";
	$att_nama = array('name' => 'nama', 'placeholder'=>'masukan Nama',
	                 'type' => 'text', 'style'=>'width:250px');
	echo form_input($att_nama);echo "<br>";
	$att_alamat = array('name' => 'alamat', 'placeholder'=>'masukan Alamat',
	                 'type' => 'text', 'style'=>'width:250px');
	echo form_input($att_alamat);echo "<br>";
	$att_submit = array('type' => 'submit', 'value'=>'simpan');
	echo form_input($att_submit);
	?>
	<table border="1">
		<tr>
			<th>No</th><th>NIM</th><th>Nama</th><th>Alamat</th><th>Action</th>
		</tr>
	<?php 
	$no=1;
	foreach ($mhs->result() as $data) {
		echo "<tr><td>$no</td>
		          <td>$data->nim</td>
		          <td>$data->nama</td>
		          <td>$data->alamat</td>
		          <td>
		            <a href='".base_url()."index.php/dashboard/edit/$data->id'>Edit</a>|
		            <a href='".base_url()."index.php/dashboard/hapus/$data->id'>Hapus</a>
		          </td>
		       </tr>";
		$no++;
	}
	 ?>
	 </table>

	<br><br><a href="<?php echo base_url() ?>index.php/login/logout">Logout</a>
</body>
</html>