<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();


class AdminController extends Controller
{
    public function AuthLogin(){
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return Redirect::to('dashboard');
        }else{
            return Redirect::to('admin')->send();
        }
    }

    public function index(){
    	return view('admin_login');
    }
    public function show_dashboard(){
        $this->AuthLogin();
    	return view('backend.dashboard');
    }
    public function dashboard(Request $request){
        $admin_email = $request->admin_email;
        $admin_password = md5($request->admin_password);
        $login = DB::table('tbl_user')->where('admin_email',$admin_email)->where('admin_password',$admin_password)->first();
        if($login){
            Session::put('admin_name',$login->admin_name);
            Session::put('admin_id',$login->admin_id);
            return Redirect::to('/dashboard');
        }else{
                Session::put('message','Mật khẩu hoặc tài khoản không đúng. Vui lòng nhập lại !');
                return Redirect::to('/admin');
        }
    }
    public function logout(){
        $this->AuthLogin();
        Session::put('admin_name',null);
        Session::put('admin_id',null);
        return Redirect::to('/admin');
    }
    //brand
    public function add_brand(){
        $this->AuthLogin();
        return view('backend.add_brand');
    }
    public function save_brand(Request $request){
        $this->AuthLogin();
    	$data = array();
    	$data['brand_name'] = $request->brand_name;
    	$data['brand_status'] = $request->brand_status;
    	DB::table('tbl_brand')->insert($data);
    	Session::put('message','Thêm hãng xe thành công !');
    	return Redirect::to('add-brand');
    }
    public function all_brand(){
        $this->AuthLogin();
    	$all_brand= DB::table('tbl_brand')->get();
    	return view('backend.all_brand')->with('all_brand',$all_brand);
    }
    public function active_brand($brand_id){
        $this->AuthLogin();
        DB::table('tbl_brand')->where('brand_id',$brand_id)->update(['brand_status'=>1]);
        Session::put('message','Hiển thị hãng xe thành công !');
        return Redirect::to('all-brand');
    }
    public function inactive_brand($brand_id){
        $this->AuthLogin();
        DB::table('tbl_brand')->where('brand_id',$brand_id)->update(['brand_status'=>0]);
        Session::put('message','Ẩn hãng xe thành công !');
        return Redirect::to('all-brand');
    }
    public function delete_brand($brand_id){
        $this->AuthLogin();
        DB::table('tbl_brand')->where('brand_id',$brand_id)->delete();
        Session::put('message','Xóa hãng xe thành công !');
        return Redirect::to('all-brand');
    }
    //car
    public function add_car(){
        $this->AuthLogin();
        $brand = DB::table('tbl_brand')->where('brand_status','1')->get();
        $type = DB::table('tbl_type')->where('type_status','1')->get();
        $tp = DB::table('tbl_tinhthanhpho')->get();
        return view('backend.add_car')->with('brand',$brand)->with('type',$type)->with('tp',$tp);
    }
    public function save_car(Request $request){
        $this->AuthLogin();
    	$data = array();
    	$data['sell_name'] = $request->sell_name;
    	$data['sell_email'] = $request->sell_email;
    	$data['sell_phone'] = $request->sell_phone;
    	$data['sell_add'] = $request->sell_add;
    	$data['brand_id'] = $request->brand_id;
        $data['type_id'] = $request->type_id;
        $data['matp']= $request->matp;
    	$data['car_year'] = $request->car_year;
    	$data['car_name'] = $request->car_name;
    	$data['car_type'] = $request->car_type;
    	$data['car_con'] = $request->car_con;
    	$data['car_des'] = $request->car_des;
    	$data['car_price'] = $request->car_price;
        $data['car_status'] = $request->car_status;
        $data['car_image'] = $request->car_status;
        $get_image = $request->file('car_image');
        if($get_image){
            $get_name_image1 = $get_image->getClientOriginalName();
            $name_image1 = current(explode('.',$get_name_image1));
            $new_image1 =  $name_image1.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/uploads/car/ava',$new_image1);
            $data['car_image'] = $new_image1;
            DB::table('tbl_car')->insert($data);
        }
        $car = DB::table('tbl_car')->orderBy('car_id','desc')->first();
        if(!empty($request -> filename))
        {
            foreach($request -> filename as $filename)
            {
                $data2 = array();
                $data2['car_id'] = $car->car_id;
                $data2['filename'] = $request->car_status;
                if($filename)
                {
                        $get_name_image = $filename->getClientOriginalName();
                        $name_image = current(explode('.',$get_name_image));
                        $new_image =  $name_image.rand(0,99).'.'.$filename->getClientOriginalExtension();
                        $filename->move('public/uploads/car',$new_image);
                        $data2['filename'] = $new_image;
                        DB::table('tbl_img')->insert($data2);
                }
            }
            Session::put('message','Thêm xe thành công !');
            return Redirect::to('add-car');
        }
    	Session::put('message','Thêm xe thành công !');
    	return Redirect::to('add-car');
    }
    public function all_car(){
        $this->AuthLogin();
        $all_car= DB::table('tbl_car')        
        ->join('tbl_type','tbl_type.type_id','=','tbl_car.type_id')
        ->join('tbl_brand','tbl_brand.brand_id','=','tbl_car.brand_id')
        ->get();
    	return view('backend.all_car')->with('all_car',$all_car);
    }
    public function active_car($car_id){
        $this->AuthLogin();
        DB::table('tbl_car')->where('car_id',$car_id)->update(['car_status'=>1]);
        Session::put('message','Chuyển thành xe đã bán thành công !');
        return Redirect::to('all-car');
    }
    public function inactive_car($car_id){
        $this->AuthLogin();
        DB::table('tbl_car')->where('car_id',$car_id)->update(['car_status'=>0]);
        Session::put('message','Chuyển thành xe chưa bán thành công !');
        return Redirect::to('all-car');
    }
    public function delete_car($car_id){
        $this->AuthLogin();
        DB::table('tbl_car')->where('car_id',$car_id)->delete();
        Session::put('message','Xóa xe thành công !');
        return Redirect::to('all-car');
    }
}
