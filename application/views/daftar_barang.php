<h2>Daftar Penitipan Barang</h2>

<p>berikut adalah view untuk daftar penitipan barang :</p>
<p>
<?php 
echo anchor('barang/tambah', 'TAMBAH', 'title="TAMBAH BARANG"');
?></p>
<p>
<?php
echo "Hallo ".$this->session->userdata('username')."<br>";
echo anchor('logout', 'LOGOUT', 'title="LOGOUT"');
?>
</p>
<table>
	<tr>
		<td>Nomer Transaksi</td>
		<td>Nama Pemilik</td>
		<td>Nomer HP</td>
		<td>Keterangan Barang</td>
		<td>Aksi</td>
	</tr>
	<?php 
	foreach($barang as $item) 
	{
		echo "<tr>";
		echo "<td>".$item['id_transaksi']."</td>";
		echo "<td>".$item['nama_pengguna']."</td>";
		echo "<td>".$item['no_hp']."</td>";
		echo "<td>".$item['keterangan']."</td>";
		echo "<td>".anchor('barang/ambil/'.$item['id_transaksi'].'', 'AMBIL', 'title="AMBIL BARANG"')."</td>";
		echo "</tr>";
	}
	?>
</table>