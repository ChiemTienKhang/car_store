@extends('front.template')

@section('main')

   <div class="row">
        <div class="col-lg-12">

        </div>
   </div>

   <div class="row">

        @foreach($cars as $car)
            <div class="box">
                <div class="col-lg-12 text-center">
                    <h2>
                        {{ $car->cost }}
                        <br>
                        <small>{{ $car->title }}</small>
                    </h2>
                </div>
                
                <div class="col-lg-12">
                    <p>{!! $car->image !!} {!! $car->summary !!}</p>
                </div>
            </div>
        @endforeach

   </div>

@stop

