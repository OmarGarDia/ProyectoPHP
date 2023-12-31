<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="Sleek Dashboard - Free Bootstrap 4 Admin Dashboard Template and UI Kit. It is very powerful bootstrap admin dashboard, which allows you to build products like admin panels, content management systems and CRMs etc.">

  <title>Sign Up - Sleek Admin Dashboard Template</title>

  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500" rel="stylesheet" />
  <link href="https://cdn.materialdesignicons.com/4.4.95/css/materialdesignicons.min.css" rel="stylesheet" />

  <!-- SLEEK CSS -->
  <link id="sleek-css" rel="stylesheet" href="assets/css/sleek.css" />

  <!-- FAVICON -->
  <link href="assets/img/favicon.png" rel="shortcut icon" />

  <script src="./assets/plugins/nprogress/nprogress.js"></script>
</head>

<body class="" id="body">
  <div class="container d-flex align-items-center justify-content-center vh-100">
    <div class="row justify-content-center">
      <div class="col-lg-6 col-md-10">
        <div class="card">
          <div class="card-header bg-primary">
            <div class="app-brand">
              <a href="/index.html">
                <svg class="brand-icon" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid" width="30" height="33" viewBox="0 0 30 33">
                  <g fill="none" fill-rule="evenodd">
                    <path class="logo-fill-blue" fill="#7DBCFF" d="M0 4v25l8 4V0zM22 4v25l8 4V0z" />
                    <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
                  </g>
                </svg>

                <span class="brand-name">Sleek Dashboard</span>
              </a>
            </div>
          </div>

          <div class="card-body p-5">
            <h4 class="text-dark mb-5">Registrate</h4>

            <form action="./usuarioAjax" method="POST" class="FormularioAjax" data-form="save" autocomplete="off">
              <div class="row">
                <div class="form-group col-md-12 mb-4">
                  <input type="text" class="form-control input-lg" id="name" name="name" aria-describedby="nameHelp" placeholder="Nombre">
                </div>
                <div class="form-group col-md-12 mb-4">
                  <input type="email" class="form-control input-lg" id="surname" name="surname" aria-describedby="emailHelp" placeholder="Apellidos">
                </div>
                <div class="form-group col-md-12 mb-4">
                  <input type="text" class="form-control input-lg" id="dni" name="dni" aria-describedby="deniHelp" placeholder="Dni">
                </div>
                <div class="form-group col-md-12 ">
                  <input type="password" class="form-control input-lg" id="password" name="password" placeholder="Contraseña">
                </div>

                <div class="form-group col-md-12 ">
                  <input type="password" class="form-control input-lg" id="cpassword" name="cpassword" placeholder="Confirmar Contraseña">
                </div>
                <div class="form-group col-md-12 ">
                  <input type="password" class="form-control input-lg" id="email" name="email" placeholder="Correo electronico">
                </div>

                <div class="col-md-12">
                  <div class="d-inline-block mr-3">
                    <label class="control control-checkbox">
                      <input type="checkbox" />
                      <div class="control-indicator"></div>
                      Acepto los terminos y condiciones
                    </label>
                  </div>

                  <button type="submit" class="btn btn-lg btn-primary btn-block mb-4">Registrarse</button>
            </form>
            <p>¿Ya tienes una cuenta?
              <a class="text-blue" href="login">Entrar</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>