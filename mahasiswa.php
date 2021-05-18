<?php 

require 'func.php';

$mahasiswa = query("SELECT * FROM mahasiswa");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
</head>
<body>

	<h1>Daftar Mahasiswa</h1>

	<table border="1" cellspacing="0" cellpadding="10">
		
		<tr>
			<th>No.</th>
			<th>NPM</th>
			<th>Nama</th>
			<th>Username</th>
			<th>Kelas</th>
		</tr>

		<?php $i = 1 ?>
		<?php foreach( $mahasiswa as $row ) : ?>
		<tr>
			<td><?= $i; ?></td>
			<td><?= $row["NPM"]; ?></td>
			<td><?= $row["Nama"]; ?></td>
			<td><?= $row["username"]; ?></td>
			<td><?= $row["Kelas"]; ?></td>
		</tr>
	<?php $i++; ?>
	<?php endforeach; ?>

	</table>

</body>
</html>