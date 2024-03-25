<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Panel</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('admin_assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('admin_assets/css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>

@section('title', 'Create Product')

<h1 class="mb-6 ml-3 mt-2">Add |MANGA|</h1>
<button class="btn btn-primary sm no-padding" ><a href="{{ route('products.index') }}" style="text-decoration: none;" class="text-black"> Product List</a></button>

@section('contents')

<hr />
<form action="{{ Route('Product.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row mb-3">

        <div class="col">
            <input type="text" name="title" class="form-control" placeholder="Title">
        </div>
        <div class="col">
            <input type="text" name="price" class="form-control" placeholder="Price">
        </div>
    </div>
    <div class="row mb-3">

        <div class="col">
            <input type="text" id="product_code" name="product_code" class="form-control" placeholder="Product Code">
        </div>


        <div class="col">
            <textarea class="form-control" name="description" placeholder="Description"></textarea>
        </div>
    </div>

    <div class="row">
        <div class="d-grid">

        </div>
        <button type="submit" class="btn btn-danger ml-3 p-1 pr-2 pl-2">Add</button>


</form>
</div>
<script src="{{asset('admin_assets/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('admin_assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- Core plugin JavaScript-->
<script src="{{asset('admin_assets/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

<!-- Custom scripts for all pages-->
<script src="{{asset('admin_assets/js/sb-admin-2.js')}}"></script>
