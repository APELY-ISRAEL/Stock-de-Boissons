<!DOCTYPE html>
<html lang="fr">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Connexion</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../../vendors/feather/feather.css">
  <link rel="stylesheet" href="../../vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="../../images/bb.png" alt="logo">
              </div>
              <h4>Salut! Commençons</h4>
              <h6 class="font-weight-light">Connectez-vous pour commmencer.</h6>
              <x-auth-session-status class="mb-4" :status="session('status')" />
              <form method="POST" action="{{ route('login') }}" class="pt-3">
                @csrf
                <div class="form-group">
                  <input type="email" class="form-control form-control-lg"  name="email" id="exampleInputEmail1" placeholder="Entrer votre email">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" name="password" id="exampleInputPassword1" placeholder="Entrer votre mot de passe">
                </div>
                <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">
                  Connexion
                  </button>
                  <hr>
                </form>
              <hr>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  @if (Route::has('password.request'))
                  <a class="small" href="{{ route('password.request') }}">Mot de passe oublié?</a>
                  @endif
                </div>
                <div class="text-center mt-4 font-weight-light">
                 Vous avez pas de compte? <a href="{{ route('register') }}" class="text-primary">Creer un compte</a>
                </div>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../../vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/template.js"></script>
  <script src="../../js/settings.js"></script>
  <script src="../../js/todolist.js"></script>
  <!-- endinject -->
</body>

</html>
