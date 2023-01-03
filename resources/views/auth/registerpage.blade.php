<!DOCTYPE html>
<html lang="en">

<head>
@yield('myselfstyle')
<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Register</title>
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

<section class="vh-100 ">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px; margin-top:15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-4 fw-bold" >Create an account</h2>

              <form action="{{route('register.submit')}}" method="post">
                @csrf
             
                <div class="form-outline mb-3">
                <label class="form-label" for="form3Example1cg">Your Name</label>
                  <input type="text" name="name" id="form3Example1cg" class="form-control form-control-lg" />
                </div>

                <div class="form-outline mb-3">
                <label class="form-label" for="form3Example3cg">Your Email</label>
                  <input type="email" name="email" id="form3Example3cg" class="form-control form-control-lg" />
                </div>

                <div class="form-outline mb-3">
                <label class="form-label" for="form3Example4cg">Password</label>
                  <input type="password" name="password" id="form3Example4cg" class="form-control form-control-lg" />
                </div>

                <!-- <div class="form-outline mb-4">
                <label class="form-label" for="form3Example4cdg">Repeat your password</label>
                  <input type="password" id="form3Example4cdg" class="form-control form-control-lg" />
                </div> -->

                <div class="form-check d-flex justify-content-center mb-3">
                  <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3cg" />
                  <label class="form-check-label" for="form2Example3g">
                    I agree all statements in <a href="#!" class="text-body"><u>Terms of service</u></a>
                  </label>
                </div>

                <div class="d-flex justify-content-center">
                  <button type="submit"
                    class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</button>
                </div>

                <p class="text-center text-muted mt-2 mb-0">Have already an account? <a href="{{route('login')}}"
                    class="fw-bold text-body"><u>Login here</u></a></p>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>






</body>

</html>