<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <title>Registro de Pacientes</title>
</head>
<body>
    <div class="row">
    <div class="col-4">
        <div class="container">
            <form>
                <div class="form-group">
                    <label>Nombre</label>
                    <input type="text" class="form-control" name="nombre" id="usuario" placeholder="introduzca el nombre del paciente">
                </div>
                <div class="form-group">
                    <label>Fecha de nacimiento</label>
                    <input type="text" class="form-control" name="fecha_nacimiento" id="fecha_nacimineto" placeholder="introduzca la fecha de nacimiento">
                </div>
                <div class="form-group">
                    <label>Cedula</label>
                    <input type="text" class="form-control" name="cedula" id="cedula" placeholder="introduzca la cedula">
                </div>
                <div class="form-group">
                    <label>Direccion de habitacion</label>
                    <input type="text" class="form-control" name="domicilio" id="domicilio" placeholder="introduzca la direccion de habitacion">
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button><br><br>
                <a href="form_psi.php">Psicologo</a>
                <a href="form_repre.php">Representante</a>
            </form>
        </div>
    </div>
<div class="col-8">
</body>
</html>