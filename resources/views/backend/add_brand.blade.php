@extends('admin_layout')
@section('admin_content')
<div class="card mb-4">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">THÊM HÃNG XE</h6>
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
    </div>
    <div class="card-body">
        <form role="form" action="{{URL::to('/save-brand')}}" method="post">
        {{ csrf_field() }}
            <div class="form-group">
                <label >Tên hãng</label>
                <input type="text" name="brand_name" class="form-control"  placeholder="Tên hãng">
            </div>
            <div class="form-group">
                <label >Hiển thị hãng</label>
                <select name="brand_status" class="form-control input-sm m-bot15">
                        <option value="1">Hiển thị</option>
                        <option value="0">Ẩn</option>
                </select>
            </div>
            <button type="submit" name="add_category_product" class="btn btn-info">Thêm hãng xe</button>
        </form>
    </div>
</div>
@endsection