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
            <p>En Numerología nos basamos en leer las vibraciones positivas y negativas de los números de nuestro nombre completo y fecha de nacimiento. Los número nos brindan la información necesaria para poder interpretar y poder tomar mejores decisiones para nuestra vida.</p>
            <p>En el estudio del nombre obtenemos 3 números: El número de Deseo del Alma, lo que nuestra alma verdaderamente anhela conseguir, el número de Potencial Latente, la personalidad y habilidades que tal vez todavía no somos consientes pero ahí están listas para descubrirse y el número de Expresión Personal, en que profesión o actividades podemos desenvolvernos bien y ganar dinero. La profesión no es lo mismo que la vocación, ese numero nos lo da la misión de vida que veremos en la fecha de nacimiento.</p>
            <p>De tu nombre nos salieron los números</p>
            <table class="table table-bordered">
              <tr>
                <td>Deseo del Alma</td>
                <td><?php echo $souls_desire ?></td>
              </tr>
              <tr>
                <td>Potencial Latente</td>
                <td><?php echo $latent_potential ?></td>
              </tr>
              <tr>
                <td>Expresión Personal</td>
                <td><?php echo $personal_expression ?></td>
              </tr>
            </table>
            <p>Deseo del Alma: <?php echo $souls_desire_text ?></p>
            <p>Potencial Latente: <?php echo $latent_potential_text ?></p>
            <p>Expresión Personal: <?php echo $personal_expression_text ?></p>
          </div>
        </div>

        <div class="card mb-4">
          <div class="card-body">
            <p class="mb-0 text-muted"><strong>Fecha de nacimiento:</strong></p>
            <h3><?php echo $_POST['day'] . "-" . $_POST['month'] . "-" . $_POST['year'] ?></h3>
            <table class="table table-bordered">
              <tr>
                <td>Esencia</td>
                <td><?php echo $essence_number ?></td>
              </tr>
              <tr>
                <td>Personalidad Kármica</td>
                <td><?php echo $karma_number ?></td>
              </tr>
              <tr>
                <td>Vidas Pasadas</td>
                <td><?php echo $past_lives_number ?></td>
              </tr>
              <tr>
                <td>Regalo Divino</td>
                <td><?php echo $gifts_number ?></td>
              </tr>
              <tr>
                <td>Misión de Vida</td>
                <td>
                  <?php
                  if (sizeof($life_mission) > 2) {
                    echo $life_mission[0] . $life_mission[1] . "/" . $life_mission[2];
                  } else {
                    echo $life_mission[0];
                  }
                  ?>
                </td>
              </tr>
              <tr>
                <td>Año Personal</td>
                <td><?php echo $personal_year ?></td>
              </tr>
            </table>
          </div>
        </div>

        <div class="card mb-4">
          <div class="card-body pt-5 pb-5">
            <div class="row mb-4">
              <div class="col-1"></div>
              <div class="col-1"></div>
              <div class="col-1"></div>
              <div class="col-1"></div>
              <div class="col-1"></div>
              <div class="col-1 text-center">
                <h5><span class="badge text-bg-secondary rounded-circle"><?php echo $destiny ?></span></h5>
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
              <div class="col-1"></div>
              <div class="col-1"></div>
              <div class="col-1"></div>
              <div class="col-1 text-center">
                <h5><span class="badge text-bg-secondary rounded-circle"><?php echo $a1 ?></span></h5>
              </div>
              <div class="col-1"></div>
              <div class="col-1"></div>
              <div class="col-1">
                <h5><span class="badge text-bg-secondary rounded-circle"><?php echo $subconscious_positive ?></span></h5>
              </div>
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
                <h5><span class="badge text-bg-secondary rounded-circle"><?php echo $b1 ?></span></h5>
              </div>
              <div class="col-1 text-center">
                <h5><span class="badge text-bg-secondary rounded-circle"><?php echo $b2 ?></span></h5>
              </div>
              <div class="col-1 text-center">
                <h5><span class="badge text-bg-secondary rounded-circle"><?php echo $b3 ?></span></h5>
              </div>
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
                <h5><span class="badge text-bg-info rounded-circle"><?php echo $karma_number ?></span></h5>
              </div>
              <div class="col-1"></div>
              <div class="col-1 text-center">
                <h5><span class="badge text-bg-info rounded-circle"><?php echo $essence_number ?></span></h5>
              </div>
              <div class="col-1"></div>
              <div class="col-1 text-center">
                <h5><span class="badge text-bg-info rounded-circle"><?php echo $past_lives_number ?></span> </h5>
              </div>
              <div class="col-1"></div>
              <div class="col-1 text-center">
                <h5><span class="badge text-bg-danger rounded-circle"><?php echo $life_mission[sizeof($life_mission) - 1] ?></span> </h5>
              </div>
              <div class="col-1"></div>
              <div class="col-1"></div>
            </div>
            <div class="row mb-4">
              <div class="col-1"></div>
              <div class="col-1"></div>
              <div class="col-1"></div>
              <div class="col-1"></div>
              <div class="col-1 text-center">
                <h5>
                  <span class="badge text-bg-secondary rounded-circle">
                    <?php echo $c1 ?>
                  </span>
                </h5>
              </div>
              <div class="col-1 text-center">
                <h5>
                  <span class="badge text-bg-secondary rounded-circle">
                    <?php echo $c2 ?>
                  </span>
                </h5>
              </div>
              <div class="col-1 text-center">
                <h5>
                  <span class="badge text-bg-secondary rounded-circle">
                    <?php echo $c3 ?>
                  </span>
                </h5>
              </div>
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
                <h5>
                  <span class="badge text-bg-secondary rounded-circle">
                    <?php echo $subconscious_negative ?>
                  </span>
                </h5>
              </div>
              <div class="col-1"></div>
              <div class="col-1"></div>
              <div class="col-1 text-center">
                <h5>
                  <span class="badge text-bg-secondary rounded-circle">
                    <?php echo $d1 ?>
                  </span>
                </h5>
              </div>
              <div class="col-1"></div>
              <div class="col-1"></div>
              <div class="col-1"></div>
              <div class="col-1"></div>
              <div class="col-1"></div>
              <div class="col-1"></div>
            </div>
            <div class="row">
              <div class="col-1"></div>
              <div class="col-1"></div>
              <div class="col-1"></div>
              <div class="col-1"></div>
              <div class="col-1"></div>
              <div class="col-1 text-center">
                <h5>
                  <span class="badge text-bg-secondary rounded-circle">
                    <?php echo $e1 ?>
                  </span>
                </h5>
              </div>
              <div class="col-1"></div>
              <div class="col-1"></div>
              <div class="col-1"></div>
              <div class="col-1"></div>
              <div class="col-1"></div>
              <div class="col-1"></div>
            </div>
          </div>
        </div>

        <div class="card mb-4">
          <div class="card-body">
            <h3>Etapas de Vida</h3>

            <p>Etapa 1</p>
            <p>Etapa 2</p>
            <p>Etapa 3</p>
            <p>Etapa N</p>
          </div>
        </div>

        <div class="card">
          <div class="card-body">
            <label for="conclusion">Conclusión</label>
            <textarea name="conclusion" id="conclusion" rows="10" class="form-control">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatibus dolore deleniti blanditiis ratione placeat iure natus quidem. Ab ratione corporis, voluptates consequatur porro delectus perferendis, eum iste hic numquam blanditiis.</textarea>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>