@extends('layout')
@section('content')
<div class="page-heading">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="page-title">
                    <h2>Đăng Xe</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
    $message = Session::get('message');
    if($message)
    {
        echo '<script language="javascript">';
        echo 'alert("'.$message.'")';
        echo '</script>';
        Session::put('message',null);
    }
?>
<section class="main-container col2-left-layout bounceInUp animated">
    <div class="container">
        <div class="row">
            <div class="col-main col-sm-12 product-grid">
                <article class="col-main">
                    <div class="category-products">
                        <ul class="products-grid">
                            <form role="form" action="{{URL::to('/save-car-front')}}" enctype="multipart/form-data" method="post" required id="contactForm">
                            {{ csrf_field() }}
                                <div class="static-contain">
                                    <fieldset class="group-select">
                                        <ul>
                                            <li id="billing-new-address-form">
                                                <fieldset class="">
                                                    <ul>
                                                        <div class="form-group">
                                                            <label>Tên người bán</label>
                                                            <input type="text" name="sell_name" class="form-control"
                                                                placeholder="Tên người bán">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Email người bán</label>
                                                            <input type="email" name="sell_email" class="form-control"
                                                                placeholder="Email người bán">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Số điện thoại người bán</label>
                                                            <input type="text" name="sell_phone" class="form-control"
                                                                placeholder="Số điện thoại người bán">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Địa chỉ người bán</label>
                                                            <input type="text" name="sell_add" class="form-control"
                                                                placeholder="Địa chỉ người bán">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Tỉnh / Thành Phố </label>
                                                            <select name="matp" class="form-control">
                                                                <option value="" selected data-default>Chọn tỉnh / thành phố</option>
                                                                @foreach($tp as $tp)
                                                                <option value="{{$tp -> matp}}">{{$tp -> name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Tên hãng xe</label>
                                                            <select name="brand_id" class="form-control">
                                                                <option value="" selected data-default>Chọn hãng xe
                                                                </option>
                                                                @foreach($brand as $brand)
                                                                <option value="{{$brand -> brand_id}}">
                                                                    {{$brand -> brand_name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Loại xe</label>
                                                            <select name="type_id" class="form-control">
                                                                <option value="" selected data-default>Chọn loại xe
                                                                </option>
                                                                @foreach($type as $type)
                                                                <option value="{{$type -> type_id}}">
                                                                    {{$type -> type_name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Năm sản xuất</label>
                                                            <?php
                                                            echo '<select class="form-control" name="car_year">';
                                                                echo '<option value="" selected data-default>Chọn năm sản xuất</option>';
                                                                for ($year = 1950; $year <= 2020; $year++) {
                                                                    echo "<option value=\"$year\">$year</option>";
                                                                }
                                                                echo '</select>';
                                                            ?>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Tên xe</label>
                                                            <input type="text" name="car_name" class="form-control"
                                                                placeholder="Tên xe">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Loại hộp số và chuyền động</label>
                                                            <select name="car_type" class="form-control">
                                                                <option value="" selected data-default>Chọn loại hộp số
                                                                    và chuyền động</option>
                                                                <option value="0">Số tự động 2WD</option>
                                                                <option value="1">Số tự động 4WD</option>
                                                                <option value="2">Số sàn 2WD</option>
                                                                <option value="3">Số sàn 4WD</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Tình trạng</label>
                                                            <select name="car_con"
                                                                class="form-control input-sm m-bot15">
                                                                <option value="" selected data-default>Chọn tình trạng
                                                                    xe</option>
                                                                <option value="1">Mới</option>
                                                                <option value="0">Cũ</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Mô tả về xe</label>
                                                            <textarea name="car_des" class="form-control" rows="3"
                                                                placeholder="Mô tả về xe"></textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Giá bán</label>
                                                            <input type="number" name="car_price" class="form-control"
                                                                placeholder="Nhập giá bán">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Hình ảnh đại diện</label>
                                                            <input type="file" name="car_image" class="form-control"
                                                                placeholder="Hình ảnh đại diện">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Hình ảnh chi tiết</label>
                                                            <input type="file" name="filename[]" multiple
                                                                class="form-control" placeholder="Hình ảnh chi tiết">
                                                        </div>
                                                        <input type="hidden" name="car_status" value="2">
                                                    </ul>
                                                </fieldset>
                                            </li>
                                            <div class="buttons-set">
                                                <button type="submit" title="Submit"
                                                    class="button submit"><span><span>Submit</span></span></button>
                                            </div>
                                        </ul>
                                    </fieldset>
                                </div>
                            </form>
                        </ul>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>
@endsection
