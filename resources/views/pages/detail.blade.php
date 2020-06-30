@extends('layouts.system')

@section('content')

<div class="container mt-2">
    <!-- Breadcrumb  -->
    <div class="row navmenu mx-xs-0 mx-md-0">
        <div class="col-sm-12 col-md-12-col-lg-12 p-0 ">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb" style="background-color: #fff;">
                    <li class="breadcrumb-item"><a href="#"><span class="fa fa-home" style="color: #C9C9C9;"></span></a></li>
                    <li class="breadcrumb-item" aria-current="page">Product</li>
                    <li class="breadcrumb-item active" aria-current="page"><b>Seblak</b></li>
                </ol>
            </nav>
        </div>
    </div>
</div>


<div class="section-product-information">
    <div class="container">
        <h1 class="product-name"> {{$item->title}} </h1>
        <div class="row pt-4">
            <div class="col-sm-12 col-md-6 col-lg-6">
                @if ($item->galleries->count())
                <div class="detail-img">
                    <div class="xzoom-container">
                        <img src="{{ url('storage/'.$item->galleries->first()->image) }} " class="xzoom" id="xzoom-default" xoriginal="{{ url('storage/'.$item->galleries->first()->image) }}" class="x-zoom big-img">
                    </div>
                    <div class="xzoom-thumbs mt-2">

                        @foreach ($item->galleries as $gallery)
                        <a href="{{ url('storage/'.$gallery->image) }}">
                            <img src="{{ url('storage/'.$gallery->image) }}" class="xzoom-gallery" width="120" xpreview="{{ url('storage/'.$gallery->image) }}">
                        </a>
                        @endforeach
                    </div>
                </div>
                @endif
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <div class="topping-set">
                    <div class="card">
                        <div class="card-header title-card">
                            Tambahkan Topping
                        </div>
                        <div class="card-body">
                            <form action="" method="">
                                @csrf
                                <div class="form-group ">


                                    @if ($item->toppings->count())
                                    <label for="exampleFormControlInput1">Pilih Varian</label>
                                    <br>
                                    <div class="form-check form-check-inline">
                                        @foreach ($item->toppings as $topping)
                                        <input type="checkbox" class="form-check-input" value="{{ $topping->id }}" name="toppings_id">
                                        <label for="" class="form-check-label pr-4"> {{ $topping->name }} </label>

                                        @endforeach
                                    </div>

                                    @else

                                    @endif
                                </div>


                                <a href="" class="btn btn-sm btn-info">Tambah Topping</a>
                                <p>Harga topping: Rp. 5000</p>
                                <div class="form-group row">
                                    <label for="inputPassword" class="col-sm-3 col-form-label">Level Pedas</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" id="exampleFormControlSelect1" name="level_pedas">
                                            <option value="" selected disabled>Pilihan pedas</option>
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                          </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword" class="col-sm-3 col-form-label">Catatan</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="catatan"></textarea>
                                    </div>
                                </div>
                                <hr>
                                <div class="form-group row">
                                    <label for="inputPassword" class="col-6 col-form-label"><strong>Total</strong></label>

                                        <label for="inputPassword" class="col-6 col-form-label price">Rp. {{$item->price}}</label>

                                </div>
                              </form>
                        </div>
                    </div>
                    <a href="{{ route('payment')}} " class="btn btn-block btn-cook">
                        MASAK
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('addstyle')
<link rel="stylesheet" href="{{ url('frontend/libraries/xzoom/xzoom.css')}}">
<link rel="stylesheet" href="{{ url('frontend/libraries/jquery-select/ui-choose.css')}}">
@endpush

@push('addscript')
<script src="{{ url('frontend/libraries/xzoom/xzoom.min.js')}}"></script>
<script src="{{ url('frontend/libraries/jquery-select/ui-choose.js')}}"></script>

<script>
    $(document).ready(function(){
            $('.xzoom, .xzoom-gallery').xzoom({
                zoomWidth: 450,
                title: false,
                titn: '#333',
                xoffset: 15,
            });
        });
</script>
<script>
    $('.ui-choose').ui_choose({
  itemWidth: null,
  skin: '',
  multi: true,
  active: 'selected',
  full: false,
  colNum: null, // items per column
  dataKey: 'ui-choose',
  change: null, // callback
  click: null // callback
});

</script>

@endpush
