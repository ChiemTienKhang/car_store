@extends('front.template')

@section('main')

    <div class="row">
        <div class="col-lg-12">

        </div>
   </div>

   <div class="row">
        @foreach($managers as $manager)
            <div class="box">
                    <div class="col-lg-12 text-center">
                        <h2>
                            {{ $manager->cost }}
                            <br>
                            <small>{{ $manager->title }}</small>
                        </h2>
                    </div>
                    
                    <div class="col-lg-12">
                        <p>{!! $manager->image !!}</p>
                        @if($manager->is_sell === 1)
                            <p>Tồn kho: <i style="color: green">Không</i></p>
                        @else
                            <p>Tồn kho: <i style="color: red"> Có</i></p>
                    @endif
                </div>
            </div>
        @endforeach
   </div>

@stop