@extends('admin_layout')
@section('admin_content')
<!-- Row -->
<div class="row">
    <div class="col-lg-12">
        <div class="card mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Danh sách xe</h6>
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
            <div class="table-responsive p-3">
                <table class="table align-items-center table-flush" id="dataTable">
                    <thead class="thead-light">
                        <tr>
                            <th></th>
                            <th>Tên xe</th>
                            <th>Tên hãng xe</th>
                            <th>Tên người bán</th>
                            <th>Điện thoại người bán</th>
                            <th>Loại xe</th>
                            <th>Hệ thống dẫn động</th>
                            <th>Tình trạng xe</th>
                            <th>Giá xe</th>
                            <th>Trạng thái</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($all_car as $key => $car)
                        <tr>
                            <td>{{ $car->car_id }}</td>
                            <td>{{ $car->car_name }}</td>
                            <td>{{ $car->brand_name }}</td>
                            <td>{{ $car->sell_name }}</td>
                            <td>{{ $car->sell_phone }}</td>
                            <td>{{ $car->type_name }}</td>
                            <td>
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
                            <td>
                                <?php
                            if($car->car_con==0){
                            ?>
                                Cũ
                                <?php
                                }else{
                            ?>
                                Mới
                                <?php
                            }
                            ?>
                            </td>
                            <td>{{number_format($car->car_price ,0,',','.')}}đ</td>
                            <td>
                                <span class="text-ellipsis">
                                    <?php
                                if($car->car_status==1){
                                ?>
                                    <a href="{{URL::to('/inactive-car/'.$car->car_id)}}"><span style="color:green"> Chưa
                                            bán</span></a>
                                    <?php
                                    }elseif($car->car_status==2){
                                ?>
                                    <a href="{{URL::to('/active-car/'.$car->car_id)}}"><span style="color:red"> Chưa
                                            duyệt</span></a>
                                    <?php
                                    }else{
                                ?>
                                    <a href="{{URL::to('/active-car/'.$car->car_id)}}"><span style="color:red"> Đã
                                            bán</span></a>
                                    <?php
                                }
                                ?>
                                </span>
                            </td>
                            <td>
                                <a onclick="return confirm('Bạn có chắc là muốn xóa xe này không ?')"
                                    href="{{URL::to('/delete-car/'.$car->car_id)}}" class="active styling-edit"
                                    ui-toggle-class="">
                                    <i class="fa fa-times text-danger text"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
