<?php

	$action = $_POST['action'];

	if($action == "getCategorias")
		getCategorias();
	else if($action == "getCategoriasPadres")
		getCategoriasPadres();
	else if($action == "getCategoriaById")
		getCategoriaById();
	else if($action == "getCategoriasByProduct")
		getCategoriasByProduct();
	else if($action == "insertCategoria")
		insertCategoria();
	else if($action == "updateCategoria")
		updateCategoria();
	else if($action == "deleteCategoria")
		deleteCategoria();

	function getCategorias() {

		include 'conn.php';

		$sql = "SELECT cat_id, nombre
				FROM Categoria";

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

	function getCategoriasPadres() {

		include 'conn.php';

		$sql = "SELECT hijo.cat_id, hijo.nombre AS hijo, root.nombre  AS padre, hijo.visible
  				FROM Categoria AS root
				RIGHT OUTER JOIN Categoria AS hijo ON hijo.cat_padre = root.cat_id";

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

	function getCategoriaById() {

		include 'conn.php';

		$cat_id = $_POST['cat_id'];

		$sql = "SELECT nombre, cat_padre, visible
				FROM Categoria
				WHERE cat_id = $cat_id";

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

	function getCategoriasByProduct() {

		include 'conn.php';

		$prod_id = $_POST['prod_id'];

		$sql = "SELECT c.nombre
				FROM Categoria c, Producto_Categoria pc
				WHERE pc.prod_id = $prod_id AND c.cat_id = pc.cat_id";

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

	function insertCategoria() {

		include 'conn.php';

		$nombre = $_POST['nombre'];
		$cat_padre = $_POST['cat_padre'];
		$visible = $_POST['visible'];

		$sql = "INSERT INTO Categoria (nombre, cat_padre, visible)
				VALUES ('$nombre', $cat_padre, $visible)";

		if ($conn->query($sql) === TRUE) {
		    $new_id = $conn->insert_id;
		    $res = '{"status":"ok", "msj":"Categoria agregada exitosamente", "id": ' . $new_id . '}';
		} else {
		    $res = '{"status":"error", "msj":"' . $conn->error . '"}';
		}

		echo json_encode($res);

		$conn->close();

	}

	function updateCategoria() {

		include 'conn.php';

		$cat_id = $_POST['cat_id'];
		$nombre = $_POST['nombre'];
		$cat_padre = $_POST['cat_padre'];
		$visible = $_POST['visible'];

		$sql = "UPDATE Categoria 
				SET nombre = '$nombre', cat_padre = $cat_padre, visible = $visible
				WHERE cat_id = $cat_id";

		if ($conn->query($sql) === TRUE) {
		    $res = '{"status":"ok", "msj":"Categoria modificada exitosamente"}';
		} else {
		    $res = '{"status":"error", "msj":"' . $conn->error . '"}';
		}

		echo json_encode($res);

		$conn->close();

	}

	function deleteCategoria() {

		include 'conn.php';

		$cat_id = $_POST['cat_id'];

		$sql = "DELETE FROM Categoria WHERE cat_id = $cat_id";

		if ($conn->query($sql) === TRUE) {
		    $res = '{"status":"ok", "msj":"Categoria eliminada exitosamente"}';
		} else {
		    $res = '{"status":"error", "msj":"' . $conn->error . '"}';
		}

		echo json_encode($res);

		$conn->close();

	}

?>