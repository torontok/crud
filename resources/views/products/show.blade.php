@extends('layout.app')
@section('title', 'Create Product')

@section('content')
    <div class="container">

        <h1>Show Product</h1>


            <div>
                <b>ID:</b>{{$product->id}}
            </div>

            <div>
                <b>Name:</b>{{$product->name}}
            </div>

            <div>
                <b>Description:</b>{{$product->description}}
            </div>

            <div>
                <b>Created AT:</b>{{$product->created_at}}
            </div>

            <div>
                <b>Updated AT:</b>{{$product->updated_at}}
            </div>
            <a href="{{ route('products.index') }}" class="btn btn-secondary"><i class="bi bi-arrow-left"></i> Back out</a>
    </div>

@endsection
