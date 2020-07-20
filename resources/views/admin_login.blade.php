<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="{{('public/backend/img/logo/logo.png')}}" rel="icon">
  <title>ĐĂNG NHẬP ADMIN</title>
  <link href="{{('public/backend/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{('public/backend/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{('public/backend/css/ruang-admin.min.css')}}" rel="stylesheet">

</head>

<body class="bg-gradient-login">
  <!-- Login Content -->
  <div class="container-login">
    <div class="row justify-content-center">
      <div class="col-xl-10 col-lg-12 col-md-9">
        <div class="card shadow-sm my-5">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-lg-12">
                <div class="login-form">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Đăng nhập</h1>
                  </div>
                  <?php
                  $message = Session::get('message');
                  if($message)
                  {
                      echo '<script language="javascript">';
                      echo 'alert("'.$message.'")';
                      echo '</script>';
                      Session::put('message',null);
                  }
                  ?>
                  <form class="user" action="{{URL::to('/admin-dashboard')}}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <input type="email" class="form-control" name="admin_email" placeholder="Điền email" >
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control" name="admin_password" placeholder="Điền password">
                    </div>
                    <div class="clearfix"></div>
                    <input type="submit" class="btn btn-primary btn-block" value="Đăng nhập" name="login">
                  </form>
                  <hr>
                  <div class="text-center">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Login Content -->
  <script src="{{('public/backend/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{('public/backend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{('public/backend/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
  <script src="{{('public/backend/js/ruang-admin.min.js')}}"></script>
</body>

</html>