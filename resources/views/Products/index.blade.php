@extends('layouts.app')
@section('title', 'HomeProduct')

@section('contents')
<div class="d-flex align-item-center justify-content-between">
    <h1 class="mb-0 ml-1"> List Products</h1>
    <button class="btn btn-danger sm no-padding" ><a href="{{ route('products.create') }}" style="text-decoration: none;" class="text-black"> Add products</a></button>
</div>

<hr />

<table class="table table-hover">
    <thead class="table-danger">
        <tr>
            <th>id</th>
            <th>Title</th>
            <th>Price</th>
            <th>Product Code</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->title }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->product_code }}</td>
                <td>{{ $product->description }}</td>
                <td>
                    <!-- Actions for each product (e.g., Edit, Delete) -->
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@if (Session::has('success'))
    <div class="alert alert-success" role="alert">
        {{ Session::get('success') }}
    </div>
@endif

@endsection

