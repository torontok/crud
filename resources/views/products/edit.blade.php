@extends('layout.app')
@section('title', 'Create Product')

@section('content')
    <div class="container">

        <h1>Edit Product</h1>
        
        <form action="{{ route('products.update', $product->id) }}" method="POST">
            @csrf
            @method('PATCH')
            <div>
                <b>ID:</b>{{$product->id}}
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Name of product</label>
                <input type="text" class="form-control" id="name" name="name" value="{{$product->name}}" placeholder="Name of product">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description of product</label>
                <textarea class="form-control" id="description" name="description" rows="3">{{$product->description}}</textarea>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price of product</label>
                <input type="text" class="form-control" id="price" name="price" value="{{$product->price}}" placeholder="Price of product">
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
            <button type="submit" class="btn btn-primary"><i class="bi bi-save"></i> Save</button>
            <a href="{{ route('products.index') }}" class="btn btn-secondary"><i class="bi bi-arrow-left"></i> Back out</a>
        </form>
    </div>

@endsection
