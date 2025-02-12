
<!doctype html>
<html lang="es">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href= "css/bootstrap.min.css">
    <link rel="shortcut icon" type="image/png" href="https://www.technovation.org/wp-content/themes/technovation_1.0.6_HC/favicon.png?v=1.0"/>
    <title>Inicio | Technovation Girl</title>
    <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
  </head>
  <body>
  <a href="#" class="logo-holder">
        <img src="https://www.technovation.org/wp-content/themes/technovation_1.0.6_HC/assets/img/logo.png" alt="logo" class="logo" />
      </a>
  <div class="container">
  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
      <div class="login d-flex align-items-center py-5">
        <div class="container">
          <div class="row">
            <div class="col-md-9 col-lg-8 mx-auto">
            
              <h3 class="login-heading mb-4">Inicio sesión</h3> 
             
              <!-- Sign In Form -->
              <form method="POST" action="">
                <div class="form-floating mb-3">
                  <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com">
                  <label for="floatingInput">Correo electrónico</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="password" class="form-control" id="contraseña" name="contraseña" placeholder="Password">
                  <label for="floatingPassword">Contraseña</label>
                </div>

                <div class="form-check mb-3">
                  <input class="form-check-input" type="checkbox" value="" id="REMEMBERMEFORFUTUREVISITS">
                  <label class="form-check-label" for="REMEMBERMEFORFUTUREVISITS">
                    Recuérdame
                  </label>
                </div>

                <?php
                include "archivos/conexion.php";
                include "archivos/controlador_index.php";
                ?>

                <div class="d-grid">
                  <input type="submit" name="iniciar" class="btn btn-lg btn-primary btn-login text-uppercase fw-bold mb-2" value="INICIAR">
                  <!--<button class="btn btn-lg btn-primary btn-login text-uppercase fw-bold mb-2" type="submit" name="iniciar">Inicia</button>-->
                  <div class="text-center">
                    <a class="small" href="registro.php">Registrarse</a>
                  </div>
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   
  </body>
</html>