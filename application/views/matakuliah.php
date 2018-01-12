<!DOCTYPE html>
<html>
<head>
	<title>Halaman Utama</title>
</head>
<body>
	<a href="<?php echo base_url() ?>index.php">Mahasiswa</a><br>
	<a href="<?php echo base_url() ?>index.php/matakuliah">Mata Kuliah</a>
	<h1>Halaman Mata Kuliah</h1>
	<h3>DATA MATA KULIAH</h3>
	<?php
	echo form_open('matakuliah/input');
	$att_kode = array('name' => 'kode', 'placeholder'=>'masukan kode mata kuliah',
	                 'type' => 'text', 'style'=>'width:250px');
	echo form_input($att_kode);echo "<br>";
	$att_nama_mk = array('name' => 'nama_mk', 'placeholder'=>'masukan nama mata kuliah',
	                 'type' => 'text', 'style'=>'width:250px');
	echo form_input($att_nama_mk);echo "<br>";
	$att_semester = array('name' => 'semester', 'placeholder'=>'masukan semester mata kuliah',
	                 'type' => 'text', 'style'=>'width:250px');
	echo form_input($att_semester);echo "<br>";
	$att_sks = array('name' => 'sks', 'placeholder'=>'masukan jumlah sks',
	                 'type' => 'text', 'style'=>'width:250px');
	echo form_input($att_sks);echo "<br>";
	$att_nilai_min = array('name' => 'nilai_min', 'placeholder'=>'masukan nilai minimum kelulusan',
	                 'type' => 'text', 'style'=>'width:250px');
	echo form_input($att_nilai_min);echo "<br>";
	$att_submit = array('type' => 'submit', 'value'=>'simpan');
	echo form_input($att_submit);
	?>
	<br>
	<table border="1">
		<tr>
			<th>Kode</th><th>Nama MK</th><th>Semester</th><th>Jumlah SKS</th><th>Nilai Minimum</th><th>Action</th>
		</tr>
	<?php 
	$no=1;
	foreach ($mk->result() as $data) {
		echo "<tr>
		          <td>$data->kode</td>
		          <td>$data->nama_mk</td>
		          <td>$data->semester</td>
		          <td>$data->sks</td>
		          <td>$data->nilai_minimal_lulus</td>
		          <td>
		            <a href='".base_url()."index.php/matakuliah/edit/$data->kode'>Edit</a>|
		            <a href='".base_url()."index.php/matakuliah/hapus/$data->kode'>Hapus</a>
		          </td>
		       </tr>";
		$no++;
	}
	 ?>
	 </table>

	<br><br><a href="<?php echo base_url() ?>index.php/login/logout">Logout</a>
</body>
</html>