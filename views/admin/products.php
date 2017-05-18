<?php

	$action = $_POST['action'];

	if($action == "getProducts")
		getProducts();
	else if($action == "getProductById")
		getProductById();
	else if($action == "insertProduct")
		insertProduct();
	else if($action == "updateProduct")
		updateProduct();
	else if($action == "deleteProduct")
		deleteProduct();


	function getProducts() {

		include 'conn.php';

		$sql = "SELECT p.prod_id, p.nombre, p.descripcion, p.precio_pz, p.precio_kg, c.nombre AS categoria, l.nombre AS lugar, m.nombre AS marca
				FROM Producto p, Categoria c, LugarOrigen l, Marca m
				WHERE p.cat_id = c.cat_id AND p.marca_id = m.marca_id AND p.lugar_id = l.lugar_id";

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

	function getProductById() {

		include 'conn.php';

		$prod_id = $_POST['prod_id'];

		$sql = "SELECT nombre, descripcion, cat_id, lugar_id, marca_id, precio_pz, precio_kg
				FROM Producto
				WHERE prod_id = $prod_id";

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

	function insertProduct() {

		include 'conn.php';

		$nombre = $_POST['nombre'];
		$descripcion = $_POST['descripcion'];
		$cat_id = $_POST['cat_id'];
		$lugar_id = $_POST['lugar_id'];
		$marca_id = $_POST['marca_id'];
		$precio_pz = $_POST['precio_pz'];
		$precio_kg = $_POST['precio_kg'];

		$sql = "INSERT INTO Producto (nombre, descripcion, cat_id, lugar_id, marca_id, precio_pz, precio_kg)
				VALUES ('$nombre', '$descripcion', $cat_id, $lugar_id, $marca_id, $precio_pz, $precio_kg)";

		if ($conn->query($sql) === TRUE) {
		    $res = '{"status":"ok", "msj":"Producto agregado exitosamente"}';
		} else {
		    $res = '{"status":"error", "msj":"' . $conn->error . '"}';
		}

		echo json_encode($res);

		$conn->close();

	}

	function updateProduct() {

		include 'conn.php';

		$prod_id = $_POST['prod_id'];
		$nombre = $_POST['nombre'];
		$descripcion = $_POST['descripcion'];
		$cat_id = $_POST['cat_id'];
		$lugar_id = $_POST['lugar_id'];
		$marca_id = $_POST['marca_id'];
		$precio_pz = $_POST['precio_pz'];
		$precio_kg = $_POST['precio_kg'];

		$sql = "UPDATE Producto 
				SET nombre = '$nombre', descripcion = '$descripcion', cat_id = $cat_id, lugar_id = $lugar_id, marca_id = $marca_id, precio_pz = $precio_pz, precio_kg = $precio_kg
				WHERE prod_id = $prod_id";

		if ($conn->query($sql) === TRUE) {
		    $res = '{"status":"ok", "msj":"Producto modificado exitosamente"}';
		} else {
		    $res = '{"status":"error", "msj":"' . $conn->error . '"}';
		}

		echo json_encode($res);

		$conn->close();

	}

	function deleteProduct() {

		include 'conn.php';

		$prod_id = $_POST['prod_id'];

		$sql = "DELETE FROM Producto WHERE prod_id = $prod_id";

		if ($conn->query($sql) === TRUE) {
		    $res = '{"status":"ok", "msj":"Producto eliminado exitosamente"}';
		} else {
		    $res = '{"status":"error", "msj":"' . $conn->error . '"}';
		}

		echo json_encode($res);

		$conn->close();

	}

	

?>