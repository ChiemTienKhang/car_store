@extends('admin_layout')
@section('admin_content')
<!-- Row -->
<div class="row">
<!-- Datatables -->
    <div class="col-lg-12">
        <div class="card mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Danh sách hãng xe</h6>
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
                        <th style="width:50px;"></th>
                        <th style="width:500px;">Tên hãng xe</th>
                        <th>Trạng thái</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($all_brand as $key => $brand)
                    <tr>
                        <td>{{ $brand->brand_id }}</td>
                        <td>{{ $brand->brand_name }}</td>
                        <td>
                            <span class="text-ellipsis">
                                <?php
                                if($brand->brand_status==1){
                                ?>
                                    <a href="{{URL::to('/inactive-brand/'.$brand->brand_id)}}"><span style="color:green"> Hiển thị</span></a>
                                <?php
                                    }else{
                                ?>  
                                    <a href="{{URL::to('/active-brand/'.$brand->brand_id)}}"><span style="color:red"> Ẩn</span></a>
                                <?php
                                }
                                ?>
                            </span>
                        </td>
                        <td>
                            <a onclick="return confirm('Bạn có chắc là muốn xóa hãng xe này không ?')" href="{{URL::to('/delete-brand/'.$brand->brand_id)}}" class="active styling-edit" ui-toggle-class="">
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