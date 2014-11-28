<div class = "container">
<h2>Form Penitipan Barang</h2>


<form action="tambah" method="post" role="form">
	<div class="form-group">
		<label for="namaBlock">Nama* :</label>
		<input id="namaBlock" class="form-control" type="text" name="nama" value="<?php echo set_value('nama'); ?>"> <?php echo form_error('nama','<div class="bg-danger">','</div>') ?>
	</div>
	<div class="form-group">
		<label for="usernameBlock">No Handphone* :</label>
		<input class="form-control" type="text" name="no_hp" value="<?php echo set_value('no_hp'); ?>"> <?php echo form_error('no_hp','<div class="bg-danger">','</div>') ?>
	</div>
	<div class="form-group">
		<label for="usernameBlock">Keterangan Barang :</label>
		<textarea class="form-control" name="keterangan"></textarea>
	</div>
	<div class="form-group">
		<label for="usernameBlock">No Loker* :</label>
		<input class="form-control" type="text" name="no_loker" value="<?php echo set_value('no_loker'); ?>"> <?php echo form_error('no_loker','<div class="bg-danger">','</div>') ?>
	</div>
	<input type="submit" class="btn btn-primary" name="simpan" value="Simpan">
	<p><span style="color:red">* = Wajib diisi</span></p>
</form>
<?php
echo anchor('barang', '<button type="button" class="btn btn-warning">Cancel</button>', 'title="Cancel"');
?>
</div>

<?php 
	// echo form_open('barang/tambah');
	// echo "<p>Nama : ".form_input('nama', 'Nama')."</p>";
	// echo "<p>No. Handphone : ".form_input('no_hp', 'No Handphone')."</p>";
	// echo "<p>Keterangan Barang : ".form_textarea('keterangan', 'Keterangan')."</p>";
	// echo "<p>Nomor Loker : ".form_input('no_loker', 'No Loker')."</p>";
	// echo form_submit('submit', 'Tambah');
	// echo form_close();
?>

