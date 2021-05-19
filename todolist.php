<?php 

require 'func.php';

$tugas = query("SELECT * FROM tugas");

?>

<!DOCTYPE html>
<html>
	<link rel="stylesheet" href="css/styletodolist.css">
<head>
	<title>Halaman To Do List</title>
</head>
<body>
	<div class="topbar">
        <div class="isitopbar">
            <a href="dashboard.php?npm=<?= $npm ?>"><img src="img/logoweb.png" alt="logoweb"></a>
        </div>
        <a href="login.php">
            <div class="logout">Logout</div>
        </a>
        <div class="navigasi">
            <ul>
                <li><a href="dashboard.php?npm=<?= $npm ?>">Dashboard</a></li>
                <li><a href="profile.php?npm=<?= $npm ?>">Profile</a></li>
                <li><a href="todolist.php?npm=<?= $npm ?>">ToDoList</a></li>
                <li><a href="matkul.php?npm=<?= $npm ?>">Matkul</a></li>
            </ul>
        </div>
    </div>
	<div class="konten">
		<h1>Daftar Tugas</h1>
		
		<p>Klik Clear jika sudah menyelesaikan tugas dan data akan terhapus</p>

		<table class="table" cellspacing="0">
			
			<tr>
				<th>No.</th>
				<th>Matkul</th>
				<th>Deadline</th>
				<th>Deskripsi</th>
				<th>Kode Kelas</th>
				<th>Status</th>
			</tr>

			<?php $i = 1 ?>
			<?php foreach( $tugas as $row ) : ?>
			<tr>
				<td><?= $i; ?></td>
				<td><?= $row["Matkul"]; ?></td>
				<td><?= $row["Deadline"]; ?></td>
				<td><?= $row["Deskripsi"]; ?></td>
				<td><?= $row["Kode_kelas"]; ?></td>
				<td>
						<a class="edit" href="update.php?Kode_tugas=<?= $row["Kode_tugas"] ?>">Edit</a> |
						<a class="clear" href="clear.php?Kode_tugas=<?= $row["Kode_tugas"]; ?>" onclick="return confirm('Are you sure want to delete the data?')">Clear</a>
					</div>
				</td>
			</tr>
		<?php $i++; ?>
		<?php endforeach; ?>

		</table>
		<div class="addtask">
			<a href="insert.php"> Add New List</a>
		</div>
	</div>
	

</body>
</html>