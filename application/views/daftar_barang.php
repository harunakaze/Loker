<div class ="container">
<div class="row">
	<div class="col-md-8">
		<h2>Daftar Penitipan Barang</h2>
	</div>
</div>

<?php 
echo anchor('barang/tambah', '<button type="button" class="btn btn-success">Tambah Titip</button>', 'title="TAMBAH BARANG"');
?>
<div class="table-responsive">
	<table class="table table-striped">
		<thead>
			<tr>
				<td>Nomer Transaksi</td>
				<td>Nama Pemilik</td>
				<td>Nomer HP</td>
				<td>Keterangan Barang</td>
				<td>Ambil Barang</td>
			</tr>
		</thead>
		<tbody>
		<?php 
		foreach($barang as $item) 
		{
			echo "<tr>";
			echo "<td>".$item['id_transaksi']."</td>";
			echo "<td>".$item['nama_pengguna']."</td>";
			echo "<td>".$item['no_hp']."</td>";
			echo "<td>".$item['keterangan']."</td>";
			echo "<td>".anchor('barang/ambil/'.$item['id_transaksi'].'', '<button type="button" class="btn btn-info">Ambil</button>', 'title="AMBIL BARANG"')."</td>";
			echo "</tr>";
		}
		?>
		</tbody>
	</table>
	</div>
</div>