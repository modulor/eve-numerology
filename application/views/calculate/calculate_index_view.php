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
      <div class="col-md-8 offset-md-2">
        <div class="card mb-4">
          <div class="card-body">
            <p class="mb-0 text-muted"><strong>Nombre completo:</strong></p>
            <h3><?php echo $_POST['full_name'] ?></h3>
            <p class="mb-0 text-muted"><strong>Fecha de nacimiento:</strong></p>
            <h3 class="mb-0"><?php echo $_POST['day']."-".$_POST['month']."-".$_POST['year'] ?></h3>
          </div>
        </div>

        <div class="card">
          <div class="card-body pt-5 pb-5">
            <div class="row mb-4">
              <div class="col-1"></div>
              <div class="col-1"></div>
              <div class="col-1"></div>
              <div class="col-1"></div>
              <div class="col-1 text-center">
                <h5><span class="badge text-bg-secondary rounded-circle"><?php echo $karma_and_past_lives ?></span></h5>
              </div>
              <div class="col-1"></div>
              <div class="col-1"></div>
              <div class="col-1"></div>
              <div class="col-1"></div>
              <div class="col-1"></div>
              <div class="col-1"></div>
              <div class="col-1"></div>
            </div>
            <div class="row mb-4">
              <div class="col-1"></div>
              <div class="col-1"></div>
              <div class="col-1"></div>
              <div class="col-1"></div>
              <div class="col-1 text-center">
                <h5><span class="badge text-bg-secondary rounded-circle"><?php echo $karma_essence_and_essence_past_lives ?></span></h5>
              </div>
              <div class="col-1"></div>
              <div class="col-1"></div>
              <div class="col-1"></div>
              <div class="col-1"></div>
              <div class="col-1"></div>
              <div class="col-1"></div>
              <div class="col-1"></div>
            </div>
            <div class="row mb-4">
              <div class="col-1"></div>
              <div class="col-1"></div>
              <div class="col-1"></div>
              <div class="col-1 text-center">
                <h5><span class="badge text-bg-secondary rounded-circle"><?php echo $karma_and_essence ?></span></h5>
              </div>
              <div class="col-1 text-center">
                <h5><span class="badge text-bg-secondary rounded-circle"><?php echo $karma_essence_past_lives_combination ?></span></h5>
              </div>
              <div class="col-1 text-center">
                <h5><span class="badge text-bg-secondary rounded-circle"><?php echo $essence_and_past_lives ?></span></h5>
              </div>
              <div class="col-1"></div>
              <div class="col-1"></div>
              <div class="col-1"></div>
              <div class="col-1"></div>
              <div class="col-1"></div>
              <div class="col-1"></div>
            </div>
            <div class="row mb-4">
              <div class="col-1"></div>
              <div class="col-1"></div>
              <div class="col-1 text-center">
                <h5><span class="badge text-bg-info rounded-circle"><?php echo $karma_number ?></span></h5>
              </div>
              <div class="col-1"></div>
              <div class="col-1 text-center">
                <h5><span class="badge text-bg-info rounded-circle"><?php echo $essence_number ?></span></h5>
              </div>
              <div class="col-1"></div>
              <div class="col-1 text-center">
                <h5><span class="badge text-bg-info rounded-circle"><?php echo $past_lives_number ?></span>  </h5>
              </div>
              <div class="col-1"></div>
              <div class="col-1"></div>
              <div class="col-1 text-center">
                <h5><span class="badge text-bg-danger rounded-circle"><?php echo $life_mission[sizeof($life_mission)-1] ?></span>  </h5>
              </div>
              <div class="col-1"></div>
              <div class="col-1"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>