<?php

namespace App\Http\Controllers;

use App\DeclarationStatistic as AppDeclarationStatistic;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Models\DeclarationStatistic;
use App\Models\PersonStatistic;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Session;
use Illuminate\Support\Facades\Redirect;
use PhpParser\Node\Expr\Cast\Array_;

session_start();


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
        // $data = $request->all();
        $from_date = $request->from_date;
        $to_date = $request->to_date;
        // $from_date = $data['from_date'];
        // $to_date = $data['to_date'];

        // $gets = DeclarationStatistic::all();
        $gets = DeclarationStatistic::whereBetween('ngay',[$from_date, $to_date])->orderBy('ngay','ASC')->get();
        $chart_data = new Collection();
        foreach($gets as $get){
            $chart_data->push([
                'ngay' => $get->ngay,
                'sl_diChuyenNoiDia' => $get->sl_diChuyenNoiDia,
                'sl_nguoiNhapCanh' => $get->sl_nguoiNhapCanh,
                'sl_khaiBaoToanDan' => $get->sl_khaiBaoToanDan  
            ]);
        }
        return json_encode($chart_data);
    }
    public function filter_by_date1(Request $request){
        $from_date = $request->from_date;
        $to_date = $request->to_date;

        $gets = PersonStatistic::whereBetween('ngay',[$from_date, $to_date])->orderBy('ngay','ASC')->get();
        $chart_data = new Collection();
        foreach($gets as $get){
            $chart_data->push([
                'ngay' => $get->ngay,
                'sl_nguoiCoDauHieu' => $get->sl_nguoiCoDauHieu,
                'sl_nguoiKhongCo' => $get->sl_nguoiKhongCo
            ]);
        }
        return json_encode($chart_data);
    }
}
