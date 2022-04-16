<!--
=========================================================
* Argon Dashboard - v1.2.0
=========================================================
* Product Page: https://www.creative-tim.com/product/argon-dashboard

* Copyright  Creative Tim (http://www.creative-tim.com)
* Coded by www.creative-tim.com
=========================================================
* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Argon Dashboard - Free Dashboard for Bootstrap 4</title>
  
  <!-- Favicon -->
  <link rel="icon" href="{{asset('assets/img/brand/favicon.png')}}" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="{{asset('assets/vendor/nucleo/css/nucleo.css')}}" type="text/css">
  <link rel="stylesheet" href="{{asset('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css')}}" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" type="text/css">

  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="{{asset('assets/css/argon.css?v=1.2.0" type="text/css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/app.css?v=1.2.0" type="text/css')}}">

</head>

<body class="bg-default">
  <!-- Navbar -->
  <nav id="navbar-main" class="navbar navbar-horizontal navbar-transparent navbar-main navbar-expand-lg navbar-light">
    <div class="container">
      <a class="navbar-brand" href="dashboard.html">
        <!-- <img src="../assets/img/brand/white.png"> -->
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-collapse navbar-custom-collapse collapse" id="navbar-collapse">
        <div class="navbar-collapse-header">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="dashboard.html">
                <!-- <img src="../assets/img/brand/blue.png"> -->
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        <!-- <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a href="dashboard.html" class="nav-link">
              <span class="nav-link-inner--text">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="login.html" class="nav-link">
              <span class="nav-link-inner--text">Login</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="register.html" class="nav-link">
              <span class="nav-link-inner--text">Register</span>
            </a>
          </li>
        </ul> -->
        <!-- <hr class="d-lg-none" />
        <ul class="navbar-nav align-items-lg-center ml-lg-auto">
          <li class="nav-item">
            <a class="nav-link nav-link-icon" href="https://www.facebook.com/creativetim" target="_blank" data-toggle="tooltip" data-original-title="Like us on Facebook">
              <i class="fab fa-facebook-square"></i>
              <span class="nav-link-inner--text d-lg-none">Facebook</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-link-icon" href="https://www.instagram.com/creativetimofficial" target="_blank" data-toggle="tooltip" data-original-title="Follow us on Instagram">
              <i class="fab fa-instagram"></i>
              <span class="nav-link-inner--text d-lg-none">Instagram</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-link-icon" href="https://twitter.com/creativetim" target="_blank" data-toggle="tooltip" data-original-title="Follow us on Twitter">
              <i class="fab fa-twitter-square"></i>
              <span class="nav-link-inner--text d-lg-none">Twitter</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link nav-link-icon" href="https://github.com/creativetimofficial" target="_blank" data-toggle="tooltip" data-original-title="Star us on Github">
              <i class="fab fa-github"></i>
              <span class="nav-link-inner--text d-lg-none">Github</span>
            </a>
          </li>
          <li class="nav-item d-none d-lg-block ml-lg-4">
            <a href="https://www.creative-tim.com/product/argon-dashboard-pro?ref=ad_upgrade_pro" target="_blank" class="btn btn-neutral btn-icon">
              <span class="btn-inner--icon">
                <i class="fas fa-shopping-cart mr-2"></i>
              </span>
              <span class="nav-link-inner--text">Upgrade to PRO</span>
            </a>
          </li>
        </ul> -->
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content">
    <!-- Header -->
    <div class="header bg-gradient-primary py-lg-8 pt-lg-9">
      <div class="container">
        <div class="header-body text-center mb-7">
          <div class="row justify-content-center">
          <div class="col-xl-5 col-lg-6 col-md-8 px-5">
              <h1 class="text-white">Add Moderator Record</h1>
            </div>
          </div>
        </div>
      </div>
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </div>
    <!-- Page content -->
    <div class="container mt--8 pb-5" >
      <div class="row justify-content-center" style="width:100%; margin:0 auto" >
        <div class="col-lg-8 col-md-7">
          <div class="card bg-secondary border-0 mb-0">
            <div class="card-header bg-transparent pb-5" >
              <!-- <div class="text-muted text-center mt-2 mb-3"><small>Sign in with</small></div>
              <div class="btn-wrapper text-center">
                <a href="#" class="btn btn-neutral btn-icon">
                  <span class="btn-inner--icon"><img src="../assets/img/icons/common/github.svg"></span>
                  <span class="btn-inner--text">Github</span>
                </a>
                <a href="#" class="btn btn-neutral btn-icon">
                  <span class="btn-inner--icon"><img src="../assets/img/icons/common/google.svg"></span>
                  <span class="btn-inner--text">Google</span>
                </a>
              </div> -->
            </div>
            <div class="card-body px-lg-5 py-lg-5" >
              <div class="text-center text-muted">
                <!-- <small>Sign in with credentials</small> -->
                <!-- @if (session()->has('msg'))
                    <h3>{{session('msg')}}</h3>
                @endif -->
              </div>
              <form role="form" action="{{url('moderator/save')}}"  method="post">
                @csrf
                <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fa-solid fa-at"></i></span>
                    </div>
                    <input class="form-control" placeholder="Name" name="name" value="{{old('name')}}" type="text">
                    <span class="text-danger">@error('name'){{$message}} @enderror</span>


                    <span class="input-group-text"><i class="fa-solid fa-at"></i></span>
                    <input class="form-control" placeholder="Surname" name="surname" value="{{old('sname')}}" type="text">
                    <span class="text-danger">@error('sname'){{$message}} @enderror</span>
                    
                  </div>
                </div>

                <!-- <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fa-solid fa-at"></i></span>
                    </div>
                  </div>
                </div> -->

                <!-- <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fa-solid fa-at"></i></span>
                    </div>
                        <Select value="">
                        <option value="">Role</option>
                            <option value="{{old('Role')}}">Student</option>
                            <option value="{{old('Role')}}">Admin</option>
                            <option value="{{old('Role')}}">Moderator</option>
                        </Select>
                  </div>
                </div> -->



                <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fa-solid fa-at"></i></span>
                    </div>
                     <input class="form-control" placeholder="CNIC" name="cnic" type="number" value="{{old('CNIC')}}">
                     <span class="text-danger">@error('CNIC'){{$message}} @enderror</span>

                  </div>
                </div>

                <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fa-solid fa-at"></i></span>
                    </div>
                     <input class="form-control" placeholder="Contact" name="contact" type="number" value="{{old('number')}}">
                     <span class="text-danger">@error('number'){{$message}} @enderror</span>
                 
                    </div>
                </div>

                <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fa-solid fa-at"></i></span>
                    </div>
                     <input class="form-control" placeholder="Department" name="department" type="text" value="{{old('department')}}">
                     <span class="text-danger">@error('department'){{$message}} @enderror</span>
                  
                    </div>
                </div>

                <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fa-solid fa-at"></i></span>
                    </div>
                     <input class="form-control" placeholder="Employee Numnber" name="emp_no" type="text" value="{{old('emp_no')}}">
                     <span class="text-danger">@error('emp_no'){{$message}} @enderror</span>      
                    </div>
                </div>


                <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fa-solid fa-at"></i></span>
                    </div>
                     <input class="form-control" placeholder="Address" name="address" type="text" value="{{old('address')}}">
                     <span class="text-danger">@error('address'){{$message}} @enderror</span>

                    </div>
                </div>



<!-- 
                <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fa-solid fa-at"></i></span>
                    </div>
                    
                    <input class="form-control" placeholder="Roll No" name="rollnum" type="text">

                  </div>
                </div> -->

                <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fa-solid fa-at"></i></span>
                    </div>
                      <input class="form-control" placeholder="Username/Email" name="email" value="{{old('email')}}" type="email">
                      <span class="text-danger">@error('email'){{$message}} @enderror</span>

                  </div>
                </div>

                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fa-solid fa-key"></i></span>
                    </div>
                    <input class="form-control" placeholder="Password" name="password" type="password" value="{{old('password')}}">
                    <span class="text-danger">@error('password'){{$message}} @enderror</span>

                  </div>
                </div>
                <!-- <div class="custom-control custom-control-alternative custom-checkbox">
                  <input class="custom-control-input" id=" customCheckLogin" type="checkbox">
                  <label class="custom-control-label" for=" customCheckLogin">
                    <span class="text-muted">Remember me</span>
                  </label>
                </div> -->
                <div class="text-center">
                  <button type="sumbit" class="btn btn-primary my-4">Submit</button>
                </div>
              </form>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-6">
              <a href="#" class="text-light"><small>Forgot password?</small></a>
            </div>
            <div class="col-6 text-right">
              <!-- <a href="#" class="text-light"><small>Create new account</small></a> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer -->
  <footer class="py-5" id="footer-main">
    <div class="container">
      <div class="row align-items-center justify-content-xl-between">
        <div class="col-xl-6">
          <div class="copyright text-center text-xl-left text-muted">
            &copy; 2020 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Creative Tim</a>
          </div>
        </div>
        <div class="col-xl-6">
          <ul class="nav nav-footer justify-content-center justify-content-xl-end">
            <li class="nav-item">
              <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
            </li>
            <li class="nav-item">
              <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
            </li>
            <li class="nav-item">
              <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
            </li>
            <li class="nav-item">
              <a href="https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md" class="nav-link" target="_blank">MIT License</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="../assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="../assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Argon JS -->
  <script src="../assets/js/argon.js?v=1.2.0"></script>
</body>

</html>
