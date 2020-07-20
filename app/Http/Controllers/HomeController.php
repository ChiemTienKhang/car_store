<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    public function index()
    {
        $all_brand= DB::table('tbl_brand')->get();
        $all_type= DB::table('tbl_type')->get();
        $all_tp= DB::table('tbl_tinhthanhpho')->get();
        $new_car = DB::table('tbl_car')
        ->join('tbl_type','tbl_type.type_id','=','tbl_car.type_id')
        ->join('tbl_tinhthanhpho','tbl_tinhthanhpho.matp','=','tbl_car.matp')
        ->join('tbl_brand','tbl_brand.brand_id','=','tbl_car.brand_id')
        ->where('car_status','1')->orderby('car_id','desc')->paginate(4);
        return view('frontend.home')->with('all_brand',$all_brand)->with('all_type',$all_type)->with('all_tp',$all_tp)->with('new_car',$new_car);
    }
    public function car_add()
    {
        $brand = DB::table('tbl_brand')->where('brand_status','1')->get();
        $type = DB::table('tbl_type')->where('type_status','1')->get();
        $tp = DB::table('tbl_tinhthanhpho')->get();
        return view('frontend.car_add')->with('brand',$brand)->with('type',$type)->with('tp',$tp);
    }
    public function search_car(Request $request)
    {
        $br_id = $request -> brand_id;
        $con = $request -> car_con;
        $year = $request -> car_year;
        $tp = $request -> matp;
        $ty_id = $request -> type_id;
        $type = $request -> car_type;
        $searched = DB::table('tbl_car')
        ->where('brand_id',$br_id)
        ->where('car_con',$con)
        ->where('car_year',$year)
        ->where('matp',$tp)
        ->where('type_id',$ty_id)
        ->where('car_type',$type)
        ->where('car_status','1')
        ->get();
        foreach($searched as $search)
        {
            $car_id = $search -> car_id;
        }
        $car = DB::table('tbl_car')
        ->join('tbl_type','tbl_type.type_id','=','tbl_car.type_id')
        ->join('tbl_tinhthanhpho','tbl_tinhthanhpho.matp','=','tbl_car.matp')
        ->join('tbl_brand','tbl_brand.brand_id','=','tbl_car.brand_id')
        ->where('car_id',$car_id)->get();
        $count = count($searched);
        return view('frontend.search_result')->with('car',$car)->with('count',$count);
    }
    public function car_all()
    {
        $all_brand= DB::table('tbl_brand')->get();
        $all_type= DB::table('tbl_type')->get();
        $all_tp= DB::table('tbl_tinhthanhpho')->get();
        $all_car = DB::table('tbl_car')
        ->join('tbl_type','tbl_type.type_id','=','tbl_car.type_id')
        ->join('tbl_tinhthanhpho','tbl_tinhthanhpho.matp','=','tbl_car.matp')
        ->join('tbl_brand','tbl_brand.brand_id','=','tbl_car.brand_id')
        ->where('car_status','1')->orderby('car_id','desc')->get();
        return view('frontend.car_all')->with('all_brand',$all_brand)->with('all_type',$all_type)->with('all_tp',$all_tp)->with('all_car',$all_car);
    }
    public function save_car_front(Request $request){
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
            Session::put('message','Thêm xe thành công, chờ admin duyệt !');
            return Redirect::to('car-add');
        }
    	Session::put('message','Thêm xe thành công, chờ admin duyệt !');
    	return Redirect::to('car-add');
    }
    public function details_car(Request $request){
        $id = $request-> id;
        $all_brand= DB::table('tbl_brand')->get();
        $all_type= DB::table('tbl_type')->get();
        $all_tp= DB::table('tbl_tinhthanhpho')->get();

        $details_car = DB::table('tbl_car')
        ->join('tbl_type','tbl_type.type_id','=','tbl_car.type_id')
        ->join('tbl_brand','tbl_brand.brand_id','=','tbl_car.brand_id')
        ->join('tbl_tinhthanhpho','tbl_tinhthanhpho.matp','=','tbl_car.matp')
        ->where('tbl_car.car_id',$id)->get();

        $details_img = DB::table('tbl_img')
        ->where('car_id',$id)
        ->get();
        return view('frontend.detail')->with('details_img',$details_img)->with('all_brand',$all_brand)->with('all_type',$all_type)->with('all_tp',$all_tp)->with('details_car',$details_car);
   }
}
