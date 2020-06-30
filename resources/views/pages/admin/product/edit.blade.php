@extends('layouts.admin')

@section('content')
<div class="container-fluid">

     <!-- Page Heading -->
     <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Product {{ $item->title }} </h1>
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


    <div class="card-shadow">
        <div class="card-body">
            <form action="{{route('product.update',$item->id)}}" method="post">
                @csrf
                @method('put')
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Product Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword" placeholder="" name="title" value="{{ $item->title }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Description</label>
                    <div class="col-sm-10">
                        <textarea name="description" rows="5" class="form-control">
                            {{ $item->description }}
                        </textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="price" class="col-sm-2 col-form-label">Price</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="price" placeholder="" name="price" value="{{$item->price}}
                        ">
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
