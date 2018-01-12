<!DOCTYPE html>
<html>
<head>
	<title>Edit Mata Kuliah</title>
</head>
<body>
<?php
foreach ($mk as $d) {
	echo form_open('matakuliah/aksi_edit');
	$att_kode = array('name' => 'kode', 'placeholder'=>'masukan kode mata kuliah',
	                 'type' => 'text', 'style'=>'width:250px');
	echo form_input($att_kode,$d->kode);echo "<br>";
	$att_nama_mk = array('name' => 'nama_mk', 'placeholder'=>'masukan nama mata kuliah',
	                 'type' => 'text', 'style'=>'width:250px');
	echo form_input($att_nama_mk,$d->nama_mk);echo "<br>";
	$att_semester = array('name' => 'semester', 'placeholder'=>'masukan semester mata kuliah',
	                 'type' => 'text', 'style'=>'width:250px');
	echo form_input($att_semester,$d->semester);echo "<br>";
	$att_sks = array('name' => 'sks', 'placeholder'=>'masukan jumlah sks',
	                 'type' => 'text', 'style'=>'width:250px');
	echo form_input($att_sks,$d->sks);echo "<br>";
	$att_nilai_min = array('name' => 'nilai_min', 'placeholder'=>'masukan nilai minimum kelulusan',
	                 'type' => 'text', 'style'=>'width:250px');
	echo form_input($att_nilai_min,$d->nilai_minimal_lulus);echo "<br>";
	$att_submit = array('type' => 'submit', 'value'=>'simpan');
	echo form_input($att_submit);
}
?>
</body>
</html>