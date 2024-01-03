<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>El Poder de Tu Numerología</title>
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
                <input type="text" class="form-control" id="full_name">
              </div>
              <div class="mb-3">
                <label for="full_name" class="form-label">Fecha de Nacimiento</label>
                <div class="row">
                  <div class="col-4">
                    <select name="day" id="day" class="form-control">
                      <option disabled selected>Día</option>
                      <?php
                        for($i = 1; $i < 32; $i++):
                      ?>
                      <option value="<?php echo $i; ?>">
                        <?php echo $i; ?>
                      </option>
                      <?php
                        endfor;
                      ?>
                    </select>
                  </div>
                  <div class="col-4">
                    <select name="month" id="month" class="form-control">
                      <option disabled selected>Mes</option>
                      <?php
                        for($i = 1; $i < 13; $i++):
                      ?>
                      <option value="<?php echo $i; ?>">
                        <?php echo $i; ?>
                      </option>
                      <?php
                        endfor;
                      ?>
                    </select>
                  </div>
                  <div class="col-4">
                    <select name="year" id="year" class="form-control">
                      <option disabled selected>Año</option>
                      <?php
                        for($i = date('Y'); $i > 1899; $i-- ):
                      ?>
                      <option value="<?php echo $i; ?>">
                        <?php echo $i; ?>
                      </option>
                      <?php
                        endfor;
                      ?>
                    </select>
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