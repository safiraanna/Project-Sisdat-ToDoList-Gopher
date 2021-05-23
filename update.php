<?php 

require 'func.php';

//ambil data di url
$kodetugas = $_GET["Kode_tugas"];

//query data berdasarkan id
$tgs = query("SELECT * FROM tugas WHERE Kode_tugas = $kodetugas")[0];

	//cek apakah tombol submit sudah ditekan atau blm
if( isset($_POST["submit"]) ) {

	// cek keberhasilan menambah data
	if ( update($_POST) > 0) {
		echo "
			<script>
				alert('success update new data');
				document.location.href = 'todolist.php';
			</script>
		";
	} else {
		echo mysqli_error($conn);

	}
		// var_dump($_POST);
}

?>

<!DOCTYPE html>
<html>
	<link rel="stylesheet" href="css/styleupdate.css">
<head>
	<title>Update || To Do List Gopher</title>
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
		<h1>Update List</h1>

		<form class="form" action="" method="post">
			<input type="hidden" name="Kode_tugas" value="<?= $tgs["Kode_tugas"]; ?>">
			<ul>
				<li type="none">
					<label for="Matkul">Mata Kuliah : </label>
					<input type="text" name="Matkul" id="Matkul
					"required value="<?= $tgs["Matkul"] ?>">
				</li>
				<br>
				<li type="none">
					<label for="Deadline">Deadline &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label>
					<input type="date" name="Deadline" id="Deadline"
					required value="<?= $tgs["Deadline"] ?>">
				</li>
				<br>
				<li type="none">
					<label for="Deskripsi">Deskripsi &nbsp;&nbsp;&nbsp;&nbsp;: </label>
					<input type="text" name="Deskripsi" id="Deskripsi" value="<?= $tgs["Deskripsi"] ?>">
				</li>
				<br>
				<li type="none">
					<label for="Kode_kelas">Kode Kelas : </label>
					<input type="text" name="Kode_kelas" id="Kode_kelas" value="<?= $tgs["Kode_kelas"] ?>">
				</li>
				<br>
				<li type="none">
					<button type="submit" name="submit"> +Update </button>
				</li>
			</ul>

		</form>
		<div class="back">
			<a href="todolist.php"> Back</a>
		</div>
	</div>

</body>
</html>