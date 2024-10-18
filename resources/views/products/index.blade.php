@extends('layout.app')
@section('title', 'Products List')
@section('content')

    <div class="container">
        <h1>Products List</h1>
        @if(@session('success'))
            <div class="alert alert-success mt-2">
                {{session('success')}}
            </div>
        @endif
        <div class="text-end">
        <a href="{{route('products.create')}}" class="btn btn-primary"><i class="bi bi-plus"></i>Create</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NAME</th>
                    <th scope="col">DESCRIPTION</th>
                    <th scope="col">PRICE</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                <tr>
                    <th scope="row">{{$product->id}}</th>
                    <td>{{$product->name}}</td>
                    <td>{{$product->description}}</td>
                    <td>{{$product->price}}</td>
                    <td class="d-flex justify-content-end align-items-center">
                        <a href="{{ route('products.show', $product->id) }}" class="btn btn-primary btn-sm mx-1">
                            <i class="bi bi-eye"></i> View
                        </a>
                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary btn-sm mx-1">
                            <i class="bi bi-pencil-square"></i> Edit
                        </a>
                
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="d-inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm mx-1" onclick="return confirm('Estás seguro de eliminar este producto?')">
                                <i class="bi bi-trash"></i> Delete
                            </button>
                        </form>
                    </td>
                </tr>
                
                @endforeach



            </tbody>
        </table>
    </div>

@endsection
