@extends('layouts.system')

@section('content')
<div class="section-success d-flex align-items-center">
    <div class="col text-center">
        <img src="{{url('frontend/images/ico-success.png')}}" alt="">
        <h6 class="mt-4">Terima Kasih</h6>
        <p>Pesanan Anda akan segera di masak.</p>
        <a href="{{route('home')}}" class="btn btn-home btn-warning px-4">Home</a>

    </div>
</div>
@endsection
