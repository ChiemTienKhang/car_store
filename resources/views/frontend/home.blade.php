@extends('layout')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="home-slider5">
                <div id="thmg-slideshow" class="thmg-slideshow">
                    <div id='rev_slider_4_wrapper' class='rev_slider_wrapper fullwidthbanner-container'>
                        <div id='rev_slider_4' class='rev_slider fullwidthabanner'>
                            <ul>
                                <li data-transition='random' data-slotamount='7' data-masterspeed='1000'
                                    data-thumb='{{('public/frontend/images/slide-img1.jpg')}}'><img
                                        src='{{('public/frontend/images/slide-img1.jpg')}}' data-bgfit='cover'
                                        data-bgrepeat='no-repeat' alt="banner" />
                                    <div class="container">
                                        <div class="content_slideshow">
                                            <div class="row">
                                                <div>
                                                    <div class="info">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li data-transition='random' data-slotamount='7' data-masterspeed='1000'
                                    data-thumb='{{('public/frontend/images/slide-img2.jpg')}}'><img
                                        src='{{('public/frontend/images/slide-img2.jpg')}}' data-bgfit='cover'
                                        data-bgrepeat='no-repeat' alt="banner" />
                                    <div class="container">
                                        <div class="content_slideshow">
                                            <div class="row">
                                                <div>
                                                    <div class="info">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="tp-bannertimer"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Category slider Start-->
    <div class="section-filter">
        <div class="b-filter__inner bg-grey container">
            <h2>Tìm kiếm chiếc xe phù hợp</h2>
            <form form="role" id="form" class="b-filter" method="post" action="{{URL::to('/search-car')}}">
                {{ csrf_field() }}
                <div class="btn-group bootstrap-select">
                    <select name="brand_id" class="selectpicker" data-width="100%" tabindex="-98">
                        <option>Chọn hãng sản xuất</option>
                        @foreach($all_brand as $brand)
                        <option value="{{$brand -> brand_id}}">{{$brand -> brand_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="btn-group bootstrap-select">
                    <select name="car_con" class="selectpicker" data-width="100%" tabindex="-98">
                        <option>Chọn tình trạng của xe</option>
                        <option value="1">Mới</option>
                        <option value="0">Cũ</option>
                    </select>
                </div>
                <div class="btn-group bootstrap-select">
                    <?php
                    echo '<select class="selectpicker" data-width="100%" tabindex="-98" name="car_year">';
                        echo '<option>Chọn năm sản xuất</option>';
                        for ($year = 1950; $year <= 2020; $year++) {
                            echo "<option value=\"$year\">$year</option>";
                        }
                        echo '</select>';
                    ?>
                    </select>
                </div>
                <div class="btn-group bootstrap-select">
                    <select name="matp" class="selectpicker" data-width="100%" tabindex="-98">
                        <option>Chọn tỉnh / thành</option>
                        @foreach($all_tp as $tp)
                        <option value="{{$tp -> matp}}">{{$tp -> name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="btn-group bootstrap-select">
                    <select name="type_id" class="selectpicker" data-width="100%" tabindex="-98">
                        <option>Chọn kiểu xe</option>
                        @foreach($all_type as $type)
                        <option value="{{$type -> type_id}}">{{$type -> type_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="btn-group bootstrap-select">
                    <select name="car_type" class="selectpicker" data-width="100%" tabindex="-98">
                        <option>Chọn loại hộp số & truyền động</option>
                        <option value="0">Số tự động 2WD</option>
                        <option value="1">Số tự động 4WD</option>
                        <option value="2">Số sàn 2WD</option>
                        <option value="3">Số sàn 4WD</option>
                    </select>
                </div>
                <br>
                <div class="btn-group bootstrap-select">
                    <div class="b-filter__btns">
                        <button type="submit" class="btn btn-lg btn-primary">Tìm Xe</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- best Pro Slider -->
    <section class=" wow bounceInUp animated">
        <div class="best-pro slider-items-products container">
            <div class="new_title">
                <h2>Xe vừa cập nhật</h2>
            </div>
            <div id="best-seller" class="product-flexslider hidden-buttons">
                <div class="slider-items slider-width-col4 products-grid">
                    @foreach($new_car as $car)
                    <div class="item">
                        <div class="item-inner">
                            <div class="item-img">
                                <div class="item-img-info">
                                    <a href="#" class="product-image">
                                        <img style="width:100%; height:152px"
                                            src="{{URL::to('/public/uploads/car/ava/'.$car->car_image)}}" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="item-info">
                                <div class="info-inner">
                                    <div class="item-title">
                                        <form form="role" id="form" class="b-filter" method="post" action="{{URL::to('/get-car')}}">
                                            {{ csrf_field() }}
                                            <input type="hidden" value="{{$car->car_id}}" name="id">
                                            <input type="submit"
                                                style=" background-color:Transparent;background-repeat:no-repeat;border: none;cursor:pointer;overflow: hidden;  "
                                                value="{{$car->brand_name}} {{$car->car_name}}">
                                        </form>
                                    </div>
                                    <div class="item-content">
                                        <div class="item-price">
                                            <div class="price-box"><span class="regular-price"><span
                                                        class="price">{{number_format($car->car_price ,0,',','.')}}
                                                        đ</span> </span> </div>
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
                                            <div class="col-date"><i class="fa fa-calendar"
                                                    aria-hidden="true"></i>{{$car->car_year}}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
