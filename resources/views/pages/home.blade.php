@extends('layouts.system')

@section('content')
<header class="text-center typed-strings">

    <div class="features row d-flex justify-content-center">
        <div class="col-md-4 d-flex justify-content-center">
            <div class="description mr-2">
                <h4>all about</h4>
            </div>
            <img src="{{ url ('frontend/images/icoo.png') }}" alt="" class="features-image">
        </div>
    </div>
    <h1 class="animate__animated animate__fadeInLeft">Seblak</h1>

    <div id="typed-strings" :loop="true">
        <p class="mt-3">Juara pedas pool ala <strong>milenial!</strong></p>
        <p>Semua suka <strong>pedassss!</strong></p>
        <p>Have a nice day!</p>
    </div>
    <span id="typed"></span>
    <br>
    <a href="" class="btn btn-md btn-topping px-4 mt-5">TOPPING</a>
</header>


<section class="section-brand ">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <img src="{{ url ('frontend/images/gb-1.png') }}" alt="" class="product-img">
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <div class="brand-heading">
                    <h1>
                        Kami <span class="coloring">Berbeda</span>
                    </h1>
                    <p>Satukan apa yang kamu mau dan pilih pedas sesuai selera</p>
                </div>

                <div class="row benefit px-3">
                    <div class="col-12 mt-4">
                        <img src="{{ url ('frontend/images/ic_1.png') }}" alt="">
                        <div class="sub-title">
                            <h3>Bebas Pilih Topping</h3>
                            <p>Tidak ada batasan, masak apa yang kamu mau.</p>
                        </div>
                    </div>
                    <div class="col-12 mt-4">
                        <img src="{{ url ('frontend/images/ic_2.png') }}" alt="">
                        <div class="sub-title">
                            <h3>Level Pedas</h3>
                            <p>Pedas biasa atau pedas gila? Buktikan keberanian.</p>
                        </div>
                    </div>
                    <div class="col-12 mt-4">
                        <img src="{{ url ('frontend/images/ic_3.png') }}" alt="">
                        <div class="sub-title">
                            <h3>Garansi Masak</h3>
                            <p>Tidak menunggu lama, bisa pesan dulu lalu ambil kemudian.</p>
                        </div>
                    </div>
                    <!-- <div class="col-12 mt-4">
                        {{-- <img src="{{ url ('frontend/images/ic_3.png') }}" alt=""> --}}
                        <div class="sub-title">
                            <h3>Garansi Masak</h3>
                            <p>Pesan dulu lalu ambil kemudian. </p>
                        </div>
                    </div> -->
                    <div class="clear-fix"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="row section-product" id="product">
    <div class="container">
        <div class="product-title text-center">
            <h1>
                Apa saja yang  <span class="coloring">kami punya?</span>
            </h1>
            <p>Makanan dan cemilan favorit dengan selera milenial.</p>
        </div>
    </div>
</section>

<section class="section-product-have">
    <div class="container">
        <div class="row d-flex justify-content-center">
            @foreach ($items as $item)
            <div class="col-sm-6 col-md-3 col-lg-3 text-center mb-4">
                <div class="card">
                    <img src="{{ $item->galleries->count() ? url('storage/'.$item->galleries->first()->image) : '' }}" alt="gallery" class="card-img-top" />
                    <div class="card-footer">
                      <h5 class="card-title pt-2">
                          <a href="{{route('detail', $item->slug)}} ">{{ $item->title }} </a>
                      </h5>
                      <p> Rp.{{ $item->price }} </p>
                    </div>
                </div>
            </div>
            @endforeach
    </div>
</section>


<section class="section-testimoni">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="testimoni-title">
                    <div class="is-title">
                        <h1>Testimoni</h1>
                        <p>Apa kata pelanggan?</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-8 col-lg-8">
                <div class="testimoni-say">
                    <div class="row">
                        <div class="owl-carousel owl-theme">
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="profile">
                                            <img src="{{ url ('frontend/images/ava-1.png') }}" alt="" class="img-ava">
                                            <h5 class="card-title mt-2">Sendi</h5>
                                        </div>
                                        <div class="comment">
                                            <p class="card-text mt-2">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptate, expedita!Enak.... bisa bebas pilih topping,
                                                Next order lagi kak.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="profile">
                                            <img src="{{ url ('frontend/images/ava-1.png') }}" alt="" class="img-ava">
                                            <h5 class="card-title mt-2">
                                                Sendi
                                            </h5>
                                        </div>
                                        <div class="comment">
                                            <p class="card-text mt-2">Enak.... bisa bebas pilih topping,
                                                Next order lagi kak. Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, suscipit?
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="profile">
                                            <img src="{{ url ('frontend/images/ava-1.png') }}" alt="" class="img-ava">
                                            <h5 class="card-title mt-2">
                                                Sendi Rian
                                            </h5>
                                        </div>
                                        <div class="comment">
                                            <p class="card-text mt-2">Enak.... adipisicing elit. Minima, suscipit? HAhahahahhh jnk
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="mt-5 mb-4">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="footer-title">
                    <h1>Pesan Antar</h1>
                </div>
                <br>
                <a href="" class="btn btn-call">
                    <i class="fa fa-whatsapp" aria-hidden="true"></i>
                    <span>wa.me/seblakubed</span>
                </a>
            </div>
        </div>
    </div>
</footer>


@endsection


