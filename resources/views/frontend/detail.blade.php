@extends('layout')
@section('content')
<div class="page-heading">
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <ul>
                        <li class="home"> <a href="{{URL::to('/home')}}" title="Go to Home Page">Trang chủ</a>
                            <span>&rsaquo; </span> </li>
                        <li class="category1599"> <a title="">Sản phẩm</a> <span>&rsaquo; </span> </li>
                    </ul>
                </div>
                <!--col-xs-12-->
            </div>
            <!--row-->
        </div>
        <!--container-->
    </div>
    <div class="page-title">
        <h2>Tất Cả Xe</h2>
    </div>
</div>
<div class="main-container col1-layout wow bounceInUp animated">
    <div class="main">
        <div class="col-main">
            
            <div class="product-view wow bounceInUp animated" itemscope="" itemtype="http://schema.org/Product"
                itemid="#product_base">

                <div id="messages_product_view"></div>
                <div class="product-essential container">
                    <div class="row">
                    @foreach($details_car as $car)
                        <form action="#" method="post" id="product_addtocart_form">
                            <div class="product-img-box col-lg-5 col-sm-5 col-xs-12">
                                <div class="product-image">
                                    <div class="product-full"> <img id="product-zoom1" src="{{URL::to('/public/uploads/car/ava/'.$car->car_image)}}"
                                            data-zoom-image="{{URL::to('/public/uploads/car/ava/'.$car->car_image)}}" alt="product-image" /> </div>
                                </div>
                                <!-- end: more-images -->
                                <div class="toll-free"><a href="#"><i class="fa fa-phone"></i> {{$car->sell_phone}}</a></div>
                            </div>
                            <!--End For version 1,2,6-->
                            <!-- For version 3 -->
                            <div class="product-shop col-lg- col-sm-7 col-xs-12">
                                <div class="brand"></div>
                                <div class="product-name">
                                    <h1>{{$car->brand_name}} {{$car->car_name}}</h1>
                                </div>
                                <div class="price-block">
                                    <div class="price-box">

                                        <p class="special-price"> <span class="price-label">Giá bán</span> <span
                                                id="product-price-48" class="price">{{number_format($car->car_price ,0,',','.')}} đ</span> </p>
                                    </div>
                                </div>

                                <div class="spec-row" id="summarySpecs">
                                    <h2>Chi tiết sản phẩm</h2>
                                    <table width="100%">
                                        <tbody>
                                            <tr>
                                                <td class="label-spec"> Thương hiệu <span class="coln">:</span></td>
                                                <td class="value-spec"> {{$car->brand_name}} </td>
                                            </tr>
                                            <tr>
                                                <td class="label-spec"> Hộp số và dẫn động <span class="coln">:</span>
                                                </td>
                                                <td class="value-spec">{{$car->type_name}}</td>
                                            </tr>
                                            <tr class="odd">
                                                <td class="label-spec"> Năm sản xuất <span class="coln">:</span></td>
                                                <td class="value-spec">{{$car->car_year}}</td>
                                            </tr>
                                            <tr class="odd">
                                                <td class="label-spec"> Loại xe <span class="coln">:</span></td>
                                                <td class="value-spec"> 
                                                    <?php
                                                    if($car->car_type==0){
                                                    ?>
                                                        Số tự động 2WD
                                                        <?php
                                                        }elseif($car->car_type==1){
                                                    ?>
                                                        Số tự động 4WD
                                                        <?php
                                                        }elseif($car->car_type==2){
                                                    ?>
                                                        Số sàn 2WD
                                                        <?php
                                                        }elseif($car->car_type==3){
                                                    ?>
                                                        Số sàn 4WD
                                                        <?php
                                                    }
                                                    ?> 
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="label-spec"> Tình trạng xe <span class="coln">:</span></td>
                                                <td class="value-spec"> <?php
                            if($car->car_con==0){
                            ?>
                                Cũ
                                <?php
                                }else{
                            ?>
                                Mới
                                <?php
                            }
                            ?> </td>
                                            </tr>
                                            <tr>
                                                <td class="label-spec"> Tỉnh / thành <span class="coln">:</span></td>
                                                <td class="value-spec"> {{$car->name}} </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="email-addto-box">
                                    <ul class="add-to-links">
                                    </ul>
                                </div>
                                <div class="social">
                                    <ul class="link">
                                    </ul>
                                </div>
                                <ul class="shipping-pro">
                                </ul>
                            </div>
                            <!--product-shop-->
                            <!--Detail page static block for version 3-->
                        </form>
                    </div>
                </div>
                <!--product-essential-->
                <div class="product-collateral container">
                    <ul id="product-detail-tab" class="nav nav-tabs product-tabs">
                        <li class="active"> <a href="#product_tabs_description" data-toggle="tab"> Mô tả chi tiết xe
                            </a> </li>
                    </ul>
                    <div id="productTabContent" class="tab-content">
                        <div class="tab-pane fade in active" id="product_tabs_description">
                            <div class="std">
                                <p>{{$car->car_des}}</p>
                                <h3>Một vài hình ảnh chi tiết:</h3>
                                <br>
                                @foreach($details_img as $img)
                                <div>
                                    <img style="width:70%" src="{{URL::to('/public/uploads/car/'.$img->filename)}}"/>
                                    </div>    
                                    <br><br>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
