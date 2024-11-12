@extends('layouts.app')

@section('title', 'create product')

@section('content')
<div class="container">

    @if($errors->any())
        <div class="alert alert-danger mt-2">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <h1>Create Product</h1>

    <form action="{{ route('products.store') }}" method="POST">
        @csrf   

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" placeholder="name" value="{{ old ('name') }}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" rows="3">{{ old('description') }}</textarea>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" class="form-control" id="price" placeholder="price" value="{{ old('price') }}">
        </div>
        <button type="submit" class="btn btn-primary"><i class="bi bi-save"></i>Submit</button>
        <a href="{{ route('products.index') }}" class="btn btn-secondary"><i class="bi bi-arrow-left"></i> Back</a>
    </form>
</div>
@endsection