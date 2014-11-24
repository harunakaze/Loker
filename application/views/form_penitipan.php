<h2>Input Penitipan Barang</h2>
<form action="tambah" method="post">
	<p>Nama : <input type="text" name="nama"></p>
	<p>No. Handphone : <input type="text" name="no_hp"></p>
	<p>Keterangan Barang : <textarea name="keterangan"></textarea></p>
	<p>Nomor Loker : <input type="text" name="no_loker"></p>
	<p><input type="submit" name="simpan" value="Simpan"></p>
</form>
<?php 
	// echo form_open('barang/tambah');
	// echo "<p>Nama : ".form_input('nama', 'Nama')."</p>";
	// echo "<p>No. Handphone : ".form_input('no_hp', 'No Handphone')."</p>";
	// echo "<p>Keterangan Barang : ".form_textarea('keterangan', 'Keterangan')."</p>";
	// echo "<p>Nomor Loker : ".form_input('no_loker', 'No Loker')."</p>";
	// echo form_submit('submit', 'Tambah');
	// echo form_close();
?>

