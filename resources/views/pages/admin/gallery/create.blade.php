@extends('layouts.admin')

@section('content')
<div class="container-fluid">

     <!-- Page Heading -->
     <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add Gallery Product</h1>
    </div>


    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }} </li>
            @endforeach
        </ul>
    </div>
    @endif


    <div class="card">
        <div class="card-body">
            <form action="{{route('gallery.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('post')
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Product Name</label>
                    <div class="col-sm-10">
                        <select name="products_id" class="form-control" required>
                            <option selected disabled>Pilih Produk</option>
                            @foreach ($products as $product)
                                <option value="{{ $product->id }} ">
                                    {{ $product->title }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Image</label>
                    <div class="col-sm-10">
                        <input type="file" name="image" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary btn-md">
                            Simpan
                        </button>
                    </div>
                </div>



            </form>
        </div>
    </div>



</div>
@endsection
