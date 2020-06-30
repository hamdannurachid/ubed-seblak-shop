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


<div class="section-product-payment">
    <div class="container">
        <h1 class="product-name">Rincian Pesanan</h1>
        <div class="row pt-4">
            <div class="col-sm-12 col-md-6 col-lg-6 mb-3">
                <div class="payment-item">
                    <div class="card card-payment">
                        <div class="card-body">
                            <div class="info-order">
                                <h6>Detail Pesanan #DER33444</h6>
                                <p>*) Pastikan pesanan Anda benar. Item produk tidak dapat diubah setelah pembayaran. </p>
                            </div>

                            <form action="">
                                <table class="table table-sm table-borderless table-order col-12">
                                    <tbody>
                                        <tr>
                                            <td width="50%">Menu</td>
                                            <td width="50%" class="text-right">Seblak Tulang</td>
                                        </tr>
                                        <tr>
                                            <td width="50%" class="align-baseline">Tambahan Topping</td>
                                            <td width="50%" class="text-right">
                                                +Bakso <br>
                                                +Sosis <br>
                                                +Tahu <br>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="50%">Level Pedas</td>
                                            <td width="50%" class="text-right">Level 1</td>
                                        </tr>
                                        <tr>
                                            <td width="50%" class="align-baseline">Catatan</td>
                                            <td width="50%" class="text-right">Level 1 tambah setengah Lorem ipsum dolor sit amet consectetur adipisicing elit. </td>
                                        </tr>

                                    </tbody>
                                </table>

                                <div class="row mt-5 price-total">
                                    <div class="col-6">
                                       <strong>Jumlah</strong>
                                        <h6>Rp. 15.000</h6>
                                    </div>
                                    <div class="col-6">
                                        <a href="" class="btn btn-change float-right">Ubah</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <div class="payment-method">
                    <div class="card">
                        <div class="card-header title-card">
                            Pembayaran
                        </div>
                        <div class="card-body">
                            <form>
                                <ul class="list-group ui-choose list_bank d-flex justify-content-center choose-type-right" id="list_bank">
                                    <li>
                                        <h6>Tunai</h6>
                                        <p>Serahkan uang ke kasir</p>
                                    </li>
                                    <li>
                                        <h6>OVO / GOPAY / DANA</h6>
                                        <p>Transfer ke 08977654466</p>
                                    </li>
                                    <li>
                                        <h6>BRI</h6>
                                        <p>Transfer 4438-01-9878-0987 a.n Kang Seblak</p>
                                    </li>
                                </ul>

                                <hr>

                                <div class="form-group row">
                                    <label for="inputPassword" class="col-6 col-form-label"><strong>Total</strong></label>

                                        <label for="inputPassword" class="col-6 col-form-label price">Rp. 15.000</label>

                                </div>
                              </form>
                        </div>
                    </div>
                    <div class="final-button text-center">
                        <a href="{{ route('success')}} " class="btn btn-block btn-fix-order mb-3">
                            PESAN
                        </a>
                        <a href="{{ route('detail') }}" class="btn-cancel">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


@push('addstyle')
<link rel="stylesheet" href="{{ url('frontend/libraries/jquery-select/ui-choose.css')}}">


@endpush

@push('addscript')
<script src="{{ url('frontend/libraries/jquery-select/ui-choose.js')}}"></script>

<script>
    $('.ui-choose').ui_choose();
    var list_bank = $('#list_bank').data('ui-choose');
    list_bank.click = function(index, item) {
        console.log('click', index, item.text())
    }
    list_bank.change = function(index, item) {
        console.log('change', index, item.text())
    }

    </script>
@endpush
