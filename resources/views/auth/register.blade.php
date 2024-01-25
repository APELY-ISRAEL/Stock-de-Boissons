<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Skydash Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset('../../vendors/feather/feather.css') }}">
  <link rel="stylesheet" href="{{ asset('../../vendors/ti-icons/css/themify-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('../../vendors/css/vendor.bundle.base.css') }}">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('../../css/vertical-layout-light/style.css') }}">
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
              <h4>Nouveau ici?</h4>
    <form method="POST" action="{{ route('register') }}" class="pt-3">
        @csrf
        <!-- Name -->
        <div class="form-group">
          <input type="text" class="form-control form-control-lg" name="name"  placeholder="Nom" required autocomplete="Name">
        </div>
        
        <div class="form-group">
          <input type="text" class="form-control form-control-lg" name="prenom" placeholder="Prenom" required autocomplete="Prenom">
        </div>

        <div class="form-group">
          <input type="text" class="form-control form-control-lg" name="adresse" placeholder="Adresse"  required autocomplete="Adresse">
        </div>

        <div class="form-group">
          <input type="number" class="form-control form-control-lg" name="telephone"  placeholder="Telephone"  required autocomplete="Telephone">
        </div>

        <div class="form-group">
          <input type="email" class="form-control form-control-lg" name="email"  placeholder="Email"  required autocomplete="Email">
        </div>
       

        <!-- Password -->
        
        <div class="form-group">

            <x-text-input id="password" class="form-control form-control-lg" placeholder="Password"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />
        </div>

        <!-- Confirm Password -->
        <div class="form-group">
            <x-text-input id="password_confirmation" class="form-control form-control-lg"  placeholder="Confirm password"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
    <div class="text-center mt-4 font-weight-light">
        Vous avez deja un compte? <a href="{{ route('login') }}" class="text-primary">Connexion</a>
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
