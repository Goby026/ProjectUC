
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Registrarse</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0,
          maximun-scale=1.0, minium-scale=1.0" />
    <link href="estilos/EstilosRegUsuario.css" rel="stylesheet" />
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

</head>
<body>
    <div class="contenedor">
        <form action="procedimientos.php" method="post" class="form">
            <div class="form-header">
                <h1 class="form-title">
                    <label>REGISTRARSE LIMA 2019</label><br />
                </h1>
            </div>

            <label for="nombre" class="form-label">Nombres:</label>
            <input type="text" id="nombre" name="nombre" class="form-input" placeholder="Escriba sus Nombres" />

            <label for="apellido" class="form-label">Apellidos:</label>
            <input type="text" id="apellido" name="apellido" class="form-input" placeholder="Escriba sus Apellidos" />

            <label for="email" class="form-label">Email:</label>
            <input type="text" id="email" name="email" class="form-input" placeholder="Escriba su Email" />

            <label for="celular" class="form-label">Celular:</label>
            <input type="text" id="celular" name="celular" class="form-input" placeholder="Escriba su numero de celular" />

            <label for="password" class="form-label">Password:</label>
            <input type="password" id="password" name="password" class="form-input" placeholder="Escriba su Password" />

            <label for="documento" class="form-label">Documento Identidad:</label>
            <input type="text" id="documento" name="documento" class="form-input" placeholder="Escriba su documento" />

            
            <div class="btns">
                <input type="submit" class="btn-submit" value="Registrar" />

            </div>


        </form>

    </div>




</body>
</html>