<!DOCTYPE html>
<html>
<head>
	<title>Bienvenido</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.1/css/bootstrap.min.css" />
</head>
<body>
    <div class="container py-3">
        <div class="row row-cols-1 row-cols-md-1 mb-1 text-center ">
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-header py-3">
                        <h4 class="my-0 fw-normal">Bienvenido</h4>
                    </div>
                    <div class="card-body">
                    <?php
			$nombre = $_POST["nombre"];
			$direccion = $_POST["direccion"];
			$email = $_POST["email"];
			$edad = $_POST["edad"];

			if (!is_numeric($edad)) {
				echo "<div class='alert alert-danger'>La edad debe ser un número.</div>";
			} else if ($edad < 18) {
				echo "<div class='alert alert-danger'>Solo se admiten usuarios mayores de edad.</div>";
			} else {

				echo "<p>Hola $nombre.</p>";
				echo "<p>Tu dirección es $direccion.</p>";
				echo "<p>Tienes $edad años y tu correo es $email.</p>";
			}
		?>
                    </div>
                </div>
            </div>
            
        </div>
    </div>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.1/js/bootstrap.bundle.min.js"></script>
</body>
</html>
