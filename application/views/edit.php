<!DOCTYPE html>
<html>
<head>
	<title>edit</title>
</head>
<body>
<?php
foreach ($mhs as $d) {
	echo form_open('dashboard/aksi_edit');
	$att_hidden = array('type'=>'hidden','name'=>'id' );
	echo form_input($att_hidden,$d->id);
	$att_nim = array('name' => 'nim', 'placeholder'=>'masukan NIM',
		'type' => 'text', 'style'=>'width:250px');
	echo form_input($att_nim,$d->nim);echo "<br>";
	$att_nama = array('name' => 'nama', 'placeholder'=>'masukan Nama',
		'type' => 'text', 'style'=>'width:250px');
	echo form_input($att_nama,$d->nama);echo "<br>";
	$att_alamat = array('name' => 'alamat', 'placeholder'=>'masukan Alamat',
		'type' => 'text', 'style'=>'width:250px');
	echo form_input($att_alamat,$d->alamat);echo "<br>";
	$att_submit = array('type' => 'submit', 'value'=>'simpan');
	echo form_input($att_submit);
}
?>
</body>
</html>