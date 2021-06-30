<?php
include 'header.html';
include 'model_rental.php';
$model_rental = new model_rental();
$index = 1;
?>
<!doctype html>
<html lang="en">

<head>
	<title>Data Rental</title>
</head>
<br><br><br><br>
<body align="center">
	
	<div align="center" class="tabel">
		<h1>Data Rental</h1>		
		<a href="tambah_rental.php" button class="btn btn btn-success">Tambah Data</a>
		<br><br>
		<a href="print_rental.php" target="_blank" button class="btn btn btn-info">Cetak Data</a>
		<br><br>
		<table  align="center" width="800px" border="1">
			<thead>
				<tr align="center" style="background-color:lime;">
					<th>ID Rental </th>
					<th>ID Mobil </th>
					<th>ID Member </th>
					<th>Lama Rental</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody align="center">
				<?php
				$result = $model_rental->tampil_rental();
				if ( !empty($result) ) {
					foreach ($result as $data): ?>
							<tr style="background-color:cyan;">
							<td><?=$data->rental_id ?></td>
							<td><?=$data->mobil_id ?></td>
							<td><?=$data->member_id ?></td>
							<td><?=$data->lamarental ?></td>
							
							<td>
								<a name="edit" id="edit" class="btn btn btn-warning" href="edit_rental.php?rental_id=<?=$data->rental_id ?>">Edit</a>
								<a name="hapus" id="hapus" class="btn btn btn-danger" href="proses3.php?rental_id=<?=$data->rental_id ?>">Delete</a>
							</td>
						</tr>
					<?php endforeach;
				} else{ ?>
					<tr>
						<td align="center" colspan="9">Belum ada data pada tabel rental</td>
					</tr>
				<?php }?>
			</tbody>
		</table>
	</div>
</body>
<?php
include 'footer.html';
?>
</html>