<?php 

require 'func.php';

	$kodetugas = $_GET["Kode_tugas"];

	if( delete($kodetugas) > 0 ) {
		echo "
			<script>
				alert('success delete data');
				document.location.href = 'todolist.php';
			</script>
		";
	} else {
		echo mysqli_error($conn);
	}

?>