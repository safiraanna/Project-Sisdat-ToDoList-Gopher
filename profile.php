<?php 

require 'func.php';

	$npm = $_GET["npm"];
	$data = read("SELECT * FROM mahasiswa WHERE NPM = '$npm'")[0];

?>

<!DOCTYPE html>
<html>
	<link rel="stylesheet" href="css/styleprofile.css">
<head>
	<title>Profile||To Do List Gopher</title>
</head>
<body>
	<div class="topbar">
        <div class="isitopbar">
					<a href="dashboard.php?npm=<?= $npm ?>"><img src="img/logoweb.png" alt="logoweb"></a>
        </div>
        <a href="login.php?npm=<?= $npm ?>">
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
		<h1>Profil</h1> 
		<div class="form">
			<ul>
				<li type="none">
					<label>NPM &nbsp;: <?= $data['NPM'] ?></label>
				</li>
				<li type="none">
					<label>Nama : <?= $data['Nama'] ?></label>
				</li>
				<li type="none">
					<label>Kelas  &nbsp;: <?= $data['Kelas'] ?></label>
				</li>
			</ul>
		</div>
	</div>
</body>
</html>