<?php
include 'model_member.php';
$model_member = new model_member();
$index = 1;
?>
<!doctype html>
<html lang="en">

<head>
	<title>Cetak Data Member</title>
	<style>
		h1 {
			text-align: center;
		}
		table, 
		td, 
		th {
			border: 1px solid #ddd;
			text-align: left;
		}
		table {
			border-collapse: collapse;
			width: 100%;
		}
		th, 
		td {
			padding: 15px;
		}
	</style>
</head>

<body>
	<h1>Laporan Data Member</h1>
	<table>
		<thead>
			<tr style="background-color:cyan;">
			<th>Member ID</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Tlp</th>	
			</tr>
		</thead>
		<tbody>
			<?php
			$result = $model_member->tampil_member();
			if ( !empty($result) ) {
				foreach ($result as $data): ?>
					<tr style="background-color:cyan;">
							<td style="background-color:cyan;"><?=$data->member_id ?></td>
							<td style="background-color:cyan;"><?=$data->nama ?></td>
							<td style="background-color:cyan;"><?=$data->alamat ?></td>
							<td style="background-color:cyan;"><?=$data->tlp ?></td>
					</tr>
				<?php endforeach;
			} else{ ?>
				<tr>
					<td colspan="9">Belum ada data pada tabel member </td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
	<script>
		window.print();
	</script>
</body>

</html>