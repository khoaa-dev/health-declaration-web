<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();
use App\DeclarationStatistic;
use Illuminate\Support\Facades\DB;

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
        $domesticGuests = DB::table('domestic_guest_declarations')
                                ->join('users', 'domestic_guest_declarations.idUser', '=', 'users.id')
                                ->select('users.fullName', 'domestic_guest_declarations.created_at')
                                ->paginate(10);

        $domesticMoves = DB::table('domestic_move_declarations')
                                ->join('users', 'domestic_move_declarations.idUser', '=', 'users.id')
                                ->select('users.fullName', 'domestic_move_declarations.created_at')
                                ->paginate(10);

        $i1 = 0;
        $i2 = 0;
        $i3 = 0;

        return view('admin.medicalManager')->with('domesticGuests', $domesticGuests)
                                            ->with('domesticMoves', $domesticMoves)
        
                                            ->with('i1', $i1)
                                            ->with('i2', $i2)
                                            ->with('i3', $i3);
    }

    public function dashboard(Request $request)
    {
        $admin_email = $request->admin_email;
        $admin_password = $request->admin_password;

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
