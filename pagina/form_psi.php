<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <title>Registro de Psicologos</title>
</head>
<body>
  <div class="row">
    <div class="col-4">
      <div class="container">
        <form>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" placeholder="nombre del psicologo">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Cedula</label>
            <input type="text" class="form-control" id="cedula" placeholder="cedula del representante">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Contacto</label>
            <input type="text" class="form-control" id="telefono" placeholder="Telefono">
          </div>
          <button type="submit" class="btn btn-primary">Guardar</button><br><br>
          <a href="form_paciente.php">Paciente</a>
          <a href="form_repre.php">Representante</a>
        </form>
      </div>
    </div>
  </div>
</body>
</html>