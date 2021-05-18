<?php 

require 'func.php';

	//cek apakah tombol submit sudah ditekan atau blm
if( isset($_POST["submit"]) ) {

	// cek keberhasilan menambah data
	if ( insert($_POST) > 0) {
		echo "
			<script>
				alert('success add new data');
				document.location.href = 'todolist.php';
			</script>
		";
	} else {
		echo "<script>
				alert('failed to add data!');
				document.location.href = 'index.php';
			</script>
		";

	}
}

?>

<!DOCTYPE html>
<html>
	<link rel="stylesheet" href="css/styleinsert.css">
<head>
	<title>Insert||To Do List Gopher</title>
</head>
<body>
	<div class="topbar">
        <div class="isitopbar">
            <a href="dashboard.php?npm=$npm"><img src="img/logoweb.png" alt="logoweb"></a>
        </div>
        <a href="login.php">
            <div class="logout">Logout</div>
        </a>
        <div class="navigasi">
            <ul>
				<li><a href="dashboard.php?npm=$npm">Dashboard</a></li>
                <li><a href="profile.php">Profile</a></li>
                <li><a href="todolist.php?npm=$npm">ToDoList</a></li>
                <li><a href="matkul.php">Matkul</a></li>
            </ul>
        </div>
    </div> 
	<div class="konten">
		<h1>Insert New List</h1>
		<div class="form">
			<form action="" method="post">
				<ul>
					<li type="none">
						<label for="Matkul">Mata Kuliah : </label>
						<input type="text" name="Matkul" id="Matkul">
					</li>
					<br>
					<li type="none">
						<label for="Deadline">Deadline : </label>
						<input type="date" name="Deadline" id="Deadline"
						required>
					</li>
					<br>
					<li type="none">
						<label for="Deskripsi">Deskripsi : </label>
						<input type="text" name="Deskripsi" id="Deskripsi">
					</li>
					<br>
					<li type="none">
						<label for="Kode_kelas">Kode Kelas : </label>
						<input type="text" name="Kode_kelas" id="Kode_kelas">
					</li>
					<br>
					<li type="none">
						<button type="submit" name="submit"> +Add </button>
					</li>
				</ul>
			</form>
		</div>
	<div class="back">
		<a href="todolist.php"> Back</a>
	</div>
	</div>

</body>
</html>