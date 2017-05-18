<?php

	$action = $_POST['action'];

	if($action == "getMarcas")
		getMarcas();
	else if($action == "getMarcaById")
		getMarcaById();
	else if($action == "insertMarca")
		insertMarca();
	else if($action == "updateMarca")
		updateMarca();
	else if($action == "deleteMarca")
		deleteMarca();

	function getMarcas() {

		include 'conn.php';

		$sql = "SELECT marca_id, nombre
				FROM Marca";

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

	function getMarcaById() {

		include 'conn.php';

		$marca_id = $_POST['marca_id'];

		$sql = "SELECT nombre
				FROM Marca
				WHERE marca_id = $marca_id";

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

	function insertMarca() {

		include 'conn.php';

		$nombre = $_POST['nombre'];

		$sql = "INSERT INTO Marca (nombre)
				VALUES ('$nombre')";

		if ($conn->query($sql) === TRUE) {
			$new_id = $conn->insert_id;
		    $res = '{"status":"ok", "msj":"Marca agregada exitosamente", "id": ' . $new_id . '}';
		} else {
		    $res = '{"status":"error", "msj":"' . $conn->error . '"}';
		}

		echo json_encode($res);

		$conn->close();

	}

	function updateMarca() {

		include 'conn.php';

		$marca_id = $_POST['marca_id'];
		$nombre = $_POST['nombre'];

		$sql = "UPDATE Marca 
				SET nombre = '$nombre'
				WHERE marca_id = $marca_id";

		if ($conn->query($sql) === TRUE) {
		    $res = '{"status":"ok", "msj":"Marca modificada exitosamente"}';
		} else {
		    $res = '{"status":"error", "msj":"' . $conn->error . '"}';
		}

		echo json_encode($res);

		$conn->close();

	}

	function deleteMarca() {

		include 'conn.php';

		$marca_id = $_POST['marca_id'];

		$sql = "DELETE FROM Marca WHERE marca_id = $marca_id";

		if ($conn->query($sql) === TRUE) {
		    $res = '{"status":"ok", "msj":"Marca eliminada exitosamente"}';
		} else {
		    $res = '{"status":"error", "msj":"' . $conn->error . '"}';
		}

		echo json_encode($res);

		$conn->close();

	}

?>