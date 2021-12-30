<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();
use App\DeclarationStatistic;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.admin_login');
    }

    public function show_dashboard()
    {
        return view('admin.index');
    }

    public function dashboard(Request $request)
    {
        $admin_email = $request->admin_email;
        $admin_password = md5($request->admin_password);

        $result = DB::table('admin')->where('admin_email',$admin_email)->where('admin_password',$admin_password)->first();
        if($result){
            Session::put('admin_name',$result->admin_name);
            Session::put('admin_id',$result->admin_id);
            Session::put('countUser', 12);
            return Redirect::to('/dashboard');
        }else{
            Session::put('message', 'Mật khẩu hoặc tài khoản bị sai. Vui lòng kiểm tra lại!');
            return Redirect::to('/admin-login');
        }
    }

    public function logout()
    {
        Session::put('admin_name',null);
        Session::put('admin_id',null);
        return Redirect::to('/admin-login');
    }

    public function filter_by_date(Request $request){
        $data = $request->all();
        $from_date = $data['from_date'];
        $to_date = $data['to_date'];

        $get = DeclarationStatistic::whereBetween('ngay',[$from_date, $to_date])->orderBy('ngay','ASC')->get();
        foreach($get as $key => $val){
            $chart_data[] = array(
                'sl_diChuyenNoiDia' => $val->sl_diChuyenNoiDia,
                'sl_nguoiNhapCanh' => $val->sl_nguoiNhapCanh,
                'sl_khaiBaoToanDan' => $val->sl_khaiBaoToanDan,
                'ngay' => $val->ngay
            );
        }
        echo $data = json_encode($chart_data);
    }
}
