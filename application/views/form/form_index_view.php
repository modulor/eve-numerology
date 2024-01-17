<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>El Poder de tu Numerología</title>
  <link rel="stylesheet" href="<?php echo base_url('assets/libs/bootstrap-5.3.2/css/bootstrap.min.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/css/main.css') ?>">
</head>

<body>
  <div class="container mt-5">
    <div class="row">
      <div class="col-xl-6 offset-xl-3">
        <h2 class="text-center mb-4">El Poder de Tu Numerología</h2>
        <form action="<?php echo base_url('calculate') ?>" method="post">
          <div class="card">
            <div class="card-body">
              <div class="mb-3">
                <label for="full_name" class="form-label">Nombre completo</label>
                <input type="text" class="form-control" name="full_name" id="full_name">
              </div>
              <div class="mb-3">
                <label for="full_name" class="form-label">Fecha de Nacimiento</label>
                <div class="row">
                  <div class="col-4">
                    <input type="text" name="day" class="form-control" placeholder="Día">
                  </div>
                  <div class="col-4">
                    <input type="text" name="month" class="form-control" placeholder="Mes">
                  </div>
                  <div class="col-4">
                    <input type="text" name="year" class="form-control" placeholder="Año">
                  </div>
                </div>
              </div>
            </div>
            <div class="card-footer text-end">
              <button class="btn btn-primary btn-lg">
                Calcular
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>

</html>