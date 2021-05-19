<?php 

require 'func.php';

    $npm = $_GET["npm"];
    $matkul = query("SELECT * FROM matkul");

?>

<!DOCTYPE html>
<html>
<link rel="stylesheet" href="css/stylematkul.css">
<head>
	<title>Halaman Matkul</title>
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
        <h1 class="judul">Daftar Mata Kuliah</h1>
			<table class="table" cellspacing="0">
				<tr class="head">
                    <td>No.</td>
                    <td>Kode Matkul</td>
                    <td>Nama Matkul</td>
				</tr>
			<?php $i = 1 ?>
			<?php foreach( $matkul as $row ) : ?>
				<tr>
					<td><?= $i; ?></td>
					<td><?= $row["Kode_matkul"]; ?></td>
					<td><?= $row["Matkul"]; ?></td>
				</tr>
			<?php $i++; ?>
			<?php endforeach; ?>
			</table>
    </div>
</body>
</html>