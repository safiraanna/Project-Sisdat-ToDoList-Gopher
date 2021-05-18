<?php 

require 'func.php';

	if( isset($_POST["login"]) ) {

		$username = $_POST["username"];
		$password = $_POST["password"];

		// $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

		// //cek username
		// if( mysqli_num_rows($result) === 1 ) {

		// 	//cek pw
		// 	$row = mysqli_fetch_assoc($result);
		// 	if (password_verify($password, $row["password"])) {
		// 		header("Location: todolist.php");
		// 		exit;
		// 	}
		// }

		// $error = true;

		$akun = read("SELECT * FROM user"); 
			foreach ($akun as $a ) {
				if( $a["username"] === $username && $a["password"] === $password ) {

					$data = read("SELECT * FROM user WHERE username = '$username'")[0];
					$npm = $data["NPM"];

					header("Location: dashboard.php?npm=$npm");
				}
			}

	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login||To Do List Gopher</title>
	<link rel="stylesheet" href="css/stylelogin.css">
</head>
<body>
	<div class="topbar">
        <div class="isitopbar">
            <a href="index.html"><img src="img/logoweb.png" alt="logoweb"></a>
        </div>
        <a href="login.php">
            <div class="login">Login</div>
        </a>
    </div>
    <div class="container">
        <div class="hero">
            <a href="index.html">
                <img src="img/logoweb.png" alt="">
            </a>
        </div>
		<div class="formlogin">
			<p>Log in menggunakan akun anda: </p>

	<?php if ( isset($error) ) : ?>

		<p style='color: red'>username / password salah</p>

	<?php endif; ?>
	<div class="kotak">
		<form action="" method="post">
			<ul>
				<li type="none">
					<label for="username">Username :</label>
					<input type="text" name="username" id="username">
				</li>
				<br>
				<li type="none">
					<label for="password">Password :</label>
					<input type="password" name="password" id="password">
				</li>
				<br>
				<li type="none">
					<button type="submit" name="login">Log In</button>
				</li>
			</ul>
		</form>
		</div>
	</div>
	</div>

</body>
</html>