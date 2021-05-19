<?php 

require 'func.php';

	$npm = $_GET["npm"];
	$data = read("SELECT * FROM mahasiswa WHERE NPM = '$npm'")[0];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do List Gopher</title>
    <link rel="stylesheet" href="css/styledashboard.css">
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

    <div class="container">
        <div class="content">
            <div class="quotes">
                <img src="img/quotes2.png" alt="quotes">
            </div>
            <div class="gopher">
                <img src="img/gopher.png" alt="">
            </div>
        </div>
    </div>
</body>
</html>