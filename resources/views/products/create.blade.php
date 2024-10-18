@extends('layout.app')
@section('title', 'Create Product')

@section('content')
    <div class="container">

        <h1>Create Product</h1>
        <form action="{{ route('products.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name of product</label>
                <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}" placeholder="Name of product">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description of product</label>
                <textarea class="form-control" id="description" name="description" rows="3">{{old('description')}}</textarea>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price of product</label>
                <input type="text" class="form-control" id="price" name="price" value="{{old('price')}}" placeholder="Price of product">
            </div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>

                @endif
            <button type="submit" class="btn btn-primary"><i class="bi bi-save"></i> Submit</button>
            <a href="{{ route('products.index') }}" class="btn btn-secondary"><i class="bi bi-arrow-left"></i> Back out</a>
        </form>
    </div>

@endsection
