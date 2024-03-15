<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Update Profile</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('admin_assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('admin_assets/css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>
<body>

@section('title', 'Profile')

@section('contents')

<h3 class="mb-0 mt-2 ml-3">Profile :</h3>

<hr />

<form method="POST" enctype="multipart/form-data" id="profile_setup_frm" action="">
    @csrf

    <div class="row">

      <div class="col-md-12 border-right">

        <div class="p-3 py-5">

          <div class="d-flex justify-content-between align-items-center mb-3">

            <h4 class="text-right text-danger">Profile Settings</h4>

          </div>

          <div class="row" id="res"></div>

          <div class="row mt-2">

            <div class="col-md-6">

              <label class="labels">Name</label>

              <input type="text" name="name" class="form-control" placeholder="first name" value="{{ auth()->user()->name }}">

            </div>

            <div class="col-md-6">

              <label class="labels">Email</label>

              <input type="text" name="email" disabled class="form-control" value="{{ auth()->user()->email }}" placeholder="">

            </div>

          </div>

          <div class="row mt-2">

            <div class="col-md-6">

              <label class="labels">Phone</label>

              <input type="text" name="phone" class="form-control" placeholder="Phone Number" value="{{ auth()->user()->phone }}">

            </div>

            <div class="col-md-6">

              <label class="labels">Address</label>

              <input type="text" name="address" class="form-control" value="{{ auth()->user()->address }}" placeholder="Address">

            </div>

          </div>

          <button type="submit" class="btn btn-danger mt-5"> Update !!</button>

        </div>

      </div>

    </div>

  </form>
      <!-- Bootstrap core JavaScript-->
      <script src="{{asset('admin_assets/vendor/jquery/jquery.min.js')}}"></script>
      <script src="{{asset('admin_assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

      <!-- Core plugin JavaScript-->
      <script src="{{asset('admin_assets/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

      <!-- Custom scripts for all pages-->
      <script src="{{asset('admin_assets/js/sb-admin-2.js')}}"></script>
</body>
</html>
