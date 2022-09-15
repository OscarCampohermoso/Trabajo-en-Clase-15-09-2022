<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Contactos</title>
    <link rel="stylesheet" href="stylecontactos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
</head>
<body>
    <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Autos UCB</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Catálogo</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Registro</a>
              </li>
            </ul>
          
          </div>
        </div>
      </nav>
    </header>
    <form id="formajax" method="POST">
    <section>
      <div class="contenedor">
        <div class="items">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6175.056995029377!2d-68.11370572178062!3d-16.52336201772722!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x915f20ee187a3103%3A0x2f2bb2b7df32a24d!2sUniversidad%20Cat%C3%B3lica%20Boliviana%20%22San%20Pablo%22%20Regional%20La%20Paz!5e0!3m2!1ses!2sbo!4v1662445024494!5m2!1ses!2sbo"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="derecho">
            <h2 style="color: white;">Formulario de Contacto</h2>
            <input type="text" name="nombre" class="datos" placeholder="Nombre"><br>
            <input type="text" name="apellido" class="datos" placeholder="Apellidos"><br>
            <input type="text" name="cell" class="datos" placeholder="Nro. Celular"><br>
            <input type="text" name="mail" class="datos" placeholder="Correo Electronico"><br>
            <input id="btnEnviar" name="btnEnviar" type="submit" value="Enviar"/>
        </div>
      </div>
    </section>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>
<script type="text/javascript">
	$(document).ready(function(){
		$('#btnEnviar').click(function(){
			var datos = $('#formajax').serialize();
            $.ajax({
				type: "POST", 
				url: "form.php",
				data: datos,
				success: function(r){
					if(r==1){
						alert("Envío Registrado");
					}else{
						alert("fallo el server");
					}
				}
			});
			return false;
		});
	});
</script>