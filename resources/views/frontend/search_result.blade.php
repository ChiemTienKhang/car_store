@extends('layout')
@section('content')
<div class="page-heading">
  <div class="breadcrumbs">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <ul>
            <li class="home"> <a href="{{URL::to('/home')}}" title="Go to Home Page">Trang chủ</a> <span>&rsaquo; </span> </li>
            <li class="category1599"> <a title="">Tìm kiếm</a> <span>&rsaquo; </span> </li>
          </ul>
        </div>
        <!--col-xs-12--> 
      </div>
      <!--row--> 
    </div>
    <!--container--> 
  </div>
  <div class="page-title">
    <h2>Kết Quả Tìm Kiếm</h2>
    <br><br><br>
    <p style="color:white;font-size:15px">{{$count}} kết quả được tìm thấy.</p>
  </div>
</div>
<!--breadcrumbs--> 
<!-- BEGIN Main Container col2-left -->
<section class="main-container col2-left-layout bounceInUp animated"> 
  <!-- For version 1, 2, 3, 8 --> 
  <!-- For version 1, 2, 3 -->
  <div class="container">
    <div class="row">
      <div class="col-main col-sm-12 product-grid">
      <div class="pro-coloumn">
        <article class="col-main">
          <div class="category-products">
            <ul class="products-grid">
            @foreach($car as $car)
              <li class="item col-lg-4 col-md-3 col-sm-4 col-xs-6">
              <div class="item-inner">
              <div class="item-img">
                <div class="item-img-info">
                    <a href="#"class="product-image">
                        <img style="width:100%; height:152px" src="{{URL::to('/public/uploads/car/ava/'.$car->car_image)}}" alt="">
                    </a>
                </div>
              </div>
              <div class="item-info">
                <div class="info-inner">
                  <div class="item-title"><form form="role" id="form" class="b-filter" method="post" action="{{URL::to('/get-car')}}">
                                            {{ csrf_field() }}
                                            <input type="hidden" value="{{$car->car_id}}" name="id">
                                            <input type="submit"
                                                style=" background-color:Transparent;background-repeat:no-repeat;border: none;cursor:pointer;overflow: hidden;  "
                                                value="{{$car->brand_name}} {{$car->car_name}}">
                                        </form></div>
                  <div class="item-content">
                    <div class="item-price">
                      <div class="price-box"><span class="regular-price"><span class="price">{{number_format($car->car_price ,0,',','.')}} đ</span> </span> </div>
                    </div>
                    <div class="other-info">
                      <div class="col-km"><i class="fa fa-tachometer"></i><?php
                                if($car->car_con==0){
                                ?>
                                Xe Cũ
                                <?php
                                    }else{
                                ?>
                                Xe Mới
                                <?php
                                }
                                ?>
                        </div>
                      <div class="col-engine"><i class="fa fa-gear"></i>{{$car->type_name}}</div>
                      <div class="col-date"><i class="fa fa-calendar" aria-hidden="true"></i>{{$car->car_year}}</div>
                    </div>
                  </div>
                </div>  
              </div>
            </div>
              </li>
            @endforeach
            </ul>
          </div>
        </article>
        </div>
        <!--	///*///======    End article  ========= //*/// --> 
      </div>
      <!--col-right sidebar--> 
    </div>
    <!--row--> 
  </div>
  <!--container--> 
</section>
@endsection
