<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <title>Registro de Representantes</title>
</head>
<body>
  <div class="row">
    <div class="col-4">
      <div class="container">
        <form>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" placeholder="nombre del representante">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Cedula</label>
            <input type="text" class="form-control" id="cedula" placeholder="cedula del representante">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Grado de escolaridad</label>
            <input type="text" class="form-control" id="grado_escolaridad" placeholder="grado de instruccion">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Profesion u oficio</label>
            <input type="text" class="form-control" id="profesion" placeholder="ocupacion">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Cantidad de hijos</label>
            <input type="text" class="form-control" id="hijos" placeholder="cantidad de hijos">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Contacto</label>
            <input type="text" class="form-control" id="telefono" placeholder="Telefono">
          </div>
          <button type="submit" class="btn btn-primary">Guardar</button>
          <a href="form_psi.php">Psicologo</a>
          <a href="form_paciente.php">Paciente</a>
        </form>
      </div>
    </div>
  </div>
</body>
</html>