<?php 

//koneksi ke database
	$conn = mysqli_connect("localhost", "root", "", "sisdat");


function query($query) {
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];

	while ( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}

	return $rows;
}

function insert($data) {
		//ambil data dari tiap elemen dri form
	global $conn;

	$matkul = htmlspecialchars($data["Matkul"]);
	$deadline = htmlspecialchars($data["Deadline"]);
	$deskripsi = htmlspecialchars($data["Deskripsi"]);
	$kodekelas = htmlspecialchars($data["Kode_kelas"]);

		//query insert data
	$query = "INSERT INTO tugas
				VALUES 
			 ('', '$matkul', '$deadline', '$deskripsi', '$kodekelas')
			";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);

}

function delete($kodetugas) {
	global $conn;

	mysqli_query($conn, "DELETE FROM tugas WHERE Kode_tugas = $kodetugas");

	return mysqli_affected_rows($conn);
}

function update($data) {
	global $conn;

	$kodetugas = $data["Kode_tugas"];
	$matkul = htmlspecialchars($data["Matkul"]);
	$deadline = htmlspecialchars($data["Deadline"]);
	$deskripsi = htmlspecialchars($data["Deskripsi"]);
	$kodekelas = htmlspecialchars($data["Kode_kelas"]);

		//query insert data
	$query = "UPDATE tugas SET 
				Matkul = '$matkul',
				Deadline = '$deadline',
				Deskripsi = '$deskripsi',
				Kode_kelas = '$kodekelas'

			WHERE Kode_tugas = $kodetugas
			";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);

}

function register($data) {
	global $conn;

	$username = strtolower(stripslashes($data["username"]));
	$password = mysqli_real_escape_string($conn, $data["password"]);
	$password2 = mysqli_real_escape_string($conn, $data["password2"]);

	//cek double list username
	$result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
	if( mysqli_fetch_assoc($result) ){
		echo "
			<script>
				alert('username already taken');
			</script>
		";
		return false;
	}

	//cek konfirmasi password
	if( $password != $password2 ) {
		echo "
			<script>
				alert('password different!');
			</script>
		";
		return false;
	}

	//enkripsi password
	$password = password_hash($password, PASSWORD_DEFAULT);

	//tambahkan user ke db
	mysqli_query($conn, "INSERT INTO user VALUES('','$username','$password')");

	return mysqli_affected_rows($conn);

}

function profile($data) {
	global $conn;

}

function read($query){
        global $conn;

        $result = mysqli_query($conn, $query);

        $rows = [];

        while($data = mysqli_fetch_assoc($result)){
            $rows[] = $data;
        }

        return $rows;
    }

?>