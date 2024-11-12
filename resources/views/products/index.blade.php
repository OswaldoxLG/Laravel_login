@extends('layouts.app')

@section('title', 'Product List')

@section('content')
<div class="container">
    <h1>Product List</h1>
    <div class="text-end">
        <a href="{{ route('products.create') }}" class="btn btn-primary"><i class="bi bi-plus"></i>Create</a>
    </div>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col"></th>
            <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
    @foreach ($products as $product)
    <tr>
        <th scope="row">{{ $product->id }}</th>
        <td>{{ $product->name }}</td>
        <td>
            <a href="{{ route('products.show' , $product->id) }}" class="btn btn-primary">View</a>
            <a href="{{ route('products.edit' , $product->id) }}" class="btn btn-primary">Edit</a>
            <form action="{{ route('products.destroy' , $product->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
    </tbody>
</table>
</div>
@endsection