<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="public/css/login.css">
</head>
<body>
<div class="container-fluid ps-md-0">
  <div class="row g-0">
    <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
    <div class="col-md-8 col-lg-6">
      <div class="login d-flex align-items-center py-5">
        <div class="container">
          <div class="row">
            <div class="col-md-9 col-lg-8 mx-auto">
              <h3 class="login-heading mb-4">LOGIN</h3>

              <!-- Sign In Form -->
              <form>
                <div class="form-floating mb-3">
                  <input type="text" class="form-control" id="usuario" placeholder="usuario">
                  <label for="floatingInput">USUARIO</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="password" class="form-control" id="password" placeholder="Password">
                  <label for="floatingPassword">CONTRASEÑA</label>
                </div>

                <div class="d-grid">
                  <button class="btn btn-lg btn-primary btn-login text-uppercase fw-bold mb-2" type="submit">INGRESAR</button>
                  <div class="text-center">
                    <a class="small" href="registro.php">olvido su contraseña?</a>
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

<script src="js/bootstrap.min.js"></script>
</body>
</html>