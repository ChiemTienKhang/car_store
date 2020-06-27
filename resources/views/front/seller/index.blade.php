@extends('front.template')

@section('main')

   <div class="row">
        <div class="col-lg-12">

        </div>
   </div>

   <div class="row">

        @foreach($sellers as $seller)
            <div class="box">
                <div class="col-lg-12 text-center">
                    <h2>
                        {{ $seller->cost }}
                        <br>
                        <small>{{ $seller->title }}</small>
                    </h2>
                </div>
                
                <div class="col-lg-12">
                    <p>{!! $seller->image !!}</p>
                    @if($seller->is_sell === 1)
                        <p>Trạng thái: <i style="color: green">Đã bán</i></p>
                        <p>Khách hàng: {{$seller->name}}</p>
                    @else
                        <p>Trạng thái: <i style="color: red"> Chưa bán</i></p>
                    @endif
                </div>
            </div>
        @endforeach

        <div class="col-lg-12 text-center">
            {!! $pages !!}
        </div>

   </div>

@stop

