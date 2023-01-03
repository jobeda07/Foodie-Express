<!DOCTYPE html>
<html lang="en">

<head>
@yield('myselfstyle')
<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Login</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{url('backend/assets/img/favicon.png')}}" rel="icon">
  <link href="{{url('backend/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{url('backend/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{url('backend/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{url('backend/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{url('backend/assets/vendor/quill/quill.snow.css')}}" rel="stylesheet">
  <link href="{{url('backend/assets/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
  <link href="{{url('backend/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{url('backend/assets/vendor/simple-datatables/style.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{url('backend/assets/css/style.css')}}" rel="stylesheet">


</head>

<body>



<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-secondary text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="md-5 mt-md-4 ">

              <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
              <p class="text-white-50 mb-5">Please enter your login and password!</p>
        <form action="{{route('login.submit')}}" method="post">
            @csrf
        <div class="form-outline form-white mb-4">
              <label class="form-label" for="typeEmailX">Email</label>
                <input type="email" name="email" id="typeEmailX" class="form-control form-control-lg"/>
               
              </div>

              <div class="form-outline form-white mb-4">
              <label class="form-label" for="typePasswordX">Password</label>
                <input type="password" name="password" id="typePasswordX" class="form-control form-control-lg" />
              </div>

              <button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button>
        </form>
             

              <p class="small mb-2 mt-3 pb-lg-2"><a class="text-white-50" href="#!">Forgot password?</a></p>

            </div>

            <div>
              <p class="mb-0">Don't have an account? <a href="#!" class="text-white-50 fw-bold">Sign Up</a>
              </p>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>

</html>