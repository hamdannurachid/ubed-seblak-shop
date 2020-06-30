@extends('layouts.admin')

@section('content')
<div class="container-fluid">

     <!-- Page Heading -->
     <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Product List</h1>
        <a href="{{route('product.create')}} " class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-pencil fa-sm text-white-50"></i> Add Product</a>
      </div>

    <div class="">
        <div class="card shadow mb-4">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th width="5%">No</th>
                      <th>Product Name</th>
                      <th>Description</th>
                      <th>Price</th>
                      <th>Option</th>
                    </tr>
                  </thead>
                  <tbody>


                    @php
                        $no = 1;
                    @endphp

                    @forelse ($items as $item)
                        <tr>
                            <td>{{ $no++ }} </td>
                            <td>{{ $item->title}} </td>
                            <td>{{ $item->description}} </td>
                            <td>{{ $item->price}} </td>
                            <td>
                                <a href="{{route('product.edit',$item->id)}}" class="btn btn-info">
                                <i class="fa fa-pencil-alt"></i>
                                </a>

                                <form action="{{ route('product.destroy',$item->id)}} " method="post" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">
                                    <i class="fa fa-trash-alt"></i>
                                </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center">Data Kosong</td>
                        </tr>
                    @endforelse
                  </tbody>
                </table>
              </div>
            </div>
          </div>
    </div>



</div>
@endsection

@push('addstyle')
      <!-- Custom styles for this page -->
  <link href="{{url('backend/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@endpush

@push('addscript')
<script src="{{url('backend/vendor/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{url('backend/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
@endpush
