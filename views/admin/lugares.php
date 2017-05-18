<?php

	$action = $_POST['action'];

	if($action == "getLugares")
		getLugares();
	else if($action == "getLugarById")
		getLugarById();
	else if($action == "insertLugar")
		insertLugar();
	else if($action == "updateLugar")
		updateLugar();
	else if($action == "deleteLugar")
		deleteLugar();

	function getLugares() {

		include 'conn.php';

		$sql = "SELECT lugar_id, nombre
				FROM LugarOrigen";

		$result = $conn->query($sql);

		$myArray = array();

		if ($result->num_rows > 0) {

			while($row = $result->fetch_assoc()) {

				$myArray[] = $row;
	    	}

	    	echo json_encode($myArray);
		}
		else echo "";
		
		$conn->close();

	}

	function getLugarById() {

		include 'conn.php';

		$lugar_id = $_POST['lugar_id'];

		$sql = "SELECT nombre
				FROM LugarOrigen
				WHERE lugar_id = $lugar_id";

		$result = $conn->query($sql);

		$myArray = array();

		if ($result->num_rows > 0) {

			while($row = $result->fetch_assoc()) {
				$myArray[] = $row;
	    	}

	    	echo json_encode($myArray);
		}
		else echo "";
		
		$conn->close();

	}

	function insertLugar() {

		include 'conn.php';

		$nombre = $_POST['nombre'];

		$sql = "INSERT INTO LugarOrigen (nombre)
				VALUES ('$nombre')";

		if ($conn->query($sql) === TRUE) {
			$new_id = $conn->insert_id;
		    $res = '{"status":"ok", "msj":"Lugar agregado exitosamente", "id": ' . $new_id . ' }';
		} else {
		    $res = '{"status":"error", "msj":"' . $conn->error . '"}';
		}

		echo json_encode($res);

		$conn->close();

	}

	function updateLugar() {

		include 'conn.php';

		$lugar_id = $_POST['lugar_id'];
		$nombre = $_POST['nombre'];

		$sql = "UPDATE LugarOrigen 
				SET nombre = '$nombre'
				WHERE lugar_id = $lugar_id";

		if ($conn->query($sql) === TRUE) {
		    $res = '{"status":"ok", "msj":"Lugar modificado exitosamente"}';
		} else {
		    $res = '{"status":"error", "msj":"' . $conn->error . '"}';
		}

		echo json_encode($res);

		$conn->close();

	}

	function deleteLugar() {

		include 'conn.php';

		$lugar_id = $_POST['lugar_id'];

		$sql = "DELETE FROM LugarOrigen WHERE lugar_id = $lugar_id";

		if ($conn->query($sql) === TRUE) {
		    $res = '{"status":"ok", "msj":"Lugar eliminado exitosamente"}';
		} else {
		    $res = '{"status":"error", "msj":"' . $conn->error . '"}';
		}

		echo json_encode($res);

		$conn->close();

	}

?>