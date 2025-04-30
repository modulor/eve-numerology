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
            <p class="text-end"><?php echo $today ?></p>
            <h1>Estudio Numerológico</h1>
            <h3><?php echo $_POST['full_name'] ?></h3>
            <h3 class="mb-4"><?php echo $_POST['day'] . "-" . $_POST['month'] . "-" . $_POST['year'] ?></h3>
            <p>En Numerología nos basamos en leer las vibraciones positivas y negativas de los números de nuestro nombre completo y fecha de nacimiento. Los número nos brindan la información necesaria para poder interpretar y poder tomar mejores decisiones para nuestra vida.</p>
            <p>En el estudio del nombre obtenemos 3 números: El número de <strong>Deseo del Alma</strong>, lo que nuestra alma verdaderamente anhela conseguir, el número de <strong>Potencial Latente</strong>, la personalidad y habilidades que tal vez todavía no somos consientes pero ahí están listas para descubrirse y el número de <strong>Expresión Personal</strong>, en que profesión o actividades podemos desenvolvernos bien y ganar dinero. La profesión no es lo mismo que la vocación, ese numero nos lo da la misión de vida que veremos en la fecha de nacimiento.</p>
            <p>De tu nombre nos salieron los números</p>
            <table class="table table-bordered">
              <tr>
                <td>Deseo del Alma</td>
                <td class="text-end"><?php echo $souls_desire ?></td>
              </tr>
              <tr>
                <td>Potencial Latente</td>
                <td class="text-end"><?php echo $latent_potential ?></td>
              </tr>
              <tr>
                <td>Expresión Personal</td>
                <td class="text-end"><?php echo $personal_expression ?></td>
              </tr>
            </table>
            <p><strong>Deseo del Alma:</strong> <?php echo $souls_desire_text ?></p>
            <p><strong>Potencial Latente:</strong> <?php echo $latent_potential_text ?></p>
            <p><strong>Expresión Personal:</strong> <?php echo $personal_expression_text ?></p>

            <!-- fecha de nacimiento -->

            <p>En el <strong>estudio de la fecha de nacimiento</strong> tenemos un espectro de números mayor a estudiar. Aquí obtengo el número de <strong>Esencia</strong>, quien realmente somos sin máscaras, el número de <strong>Personalidad Kármica</strong>, nos muestra una de las máscaras que usamos para poder interactuar con los demás y que tal vez no nos ayuda y debemos superar, el número de <strong>Vidas Pasadas</strong>, que nos muestra un reto que no superamos en otra vida y venimos a repetir el examen en esta, el número de <strong>Regalo Divino</strong>, un habilidad que cuando se hace consciente y se práctica todo mejora en nuestra vida. Y el número de <strong>Misión de Vida</strong>, nos muestra en quién venimos a convertirnos y nuestra verdadera vocación.</p>

            <table class="table table-bordered">
              <tr>
                <td>Esencia</td>
                <td class="text-end"><?php echo $essence_number ?></td>
              </tr>
              <tr>
                <td>Personalidad Kármica</td>
                <td class="text-end"><?php echo $karma_number ?></td>
              </tr>
              <tr>
                <td>Vidas Pasadas</td>
                <td class="text-end"><?php echo $past_lives_number ?></td>
              </tr>
              <tr>
                <td>Regalo Divino</td>
                <td class="text-end"><?php echo $gifts_number ?></td>
              </tr>
              <tr>
                <td>Misión de Vida</td>
                <td class="text-end">
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
                <td class="text-end"><?php echo $personal_year ?></td>
              </tr>
            </table>

            <p><strong>En Esencia tenemos el número <?php echo $essence_number ?></strong>. <?php echo $essence_number_text ?></p>

            <p><strong>En Personalidad Kármica tenemos el número <?php echo $karma_number ?>.</strong> <?php echo $karma_number_text ?></p>

            <p><strong>En vidas pasadas tenemos el número <?php echo $past_lives_number ?>.</strong> <?php echo $past_lives_number_text ?></p>

            <p><strong>En Regalo Divino tenemos el número <?php echo $gifts_number ?>.</strong> <?php echo $gifts_number_text ?></p>

            <p><strong>En Misión de Vida tenemos el número <?php echo $life_mission_number ?>.</strong> <?php echo $life_mission_text ?></p>

            <p><strong>El año personal nos dice la vibración principal que tendremos en el año en curso, el cual nos da el número <?php echo $personal_year ?>.</strong></p>

            <p><?php echo $personal_year_text ?></p>
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

        <!-- <div class="card mb-4">
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
        </div> -->
      </div>
    </div>
  </div>
</body>

</html>