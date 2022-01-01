<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Models\DeclarationStatistic;
use App\Models\PersonStatistic;
use Carbon\Carbon;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Session;
use Illuminate\Support\Facades\Redirect;
use PhpParser\Node\Expr\Cast\Array_;

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
                                ->orderBy('created_at', 'desc')
                                ->paginate(10);

        $domesticMoves = DB::table('domestic_move_declarations')
                                ->join('users', 'domestic_move_declarations.idUser', '=', 'users.id')
                                ->select('users.fullName', 'domestic_move_declarations.created_at')
                                ->orderBy('created_at', 'desc')
                                ->paginate(10);
        $entrys = DB::table('entry_declarations')
                                ->join('users', 'entry_declarations.idUser', '=', 'users.id')
                                ->select('users.fullName', 'entry_declarations.created_at')
                                ->orderBy('created_at', 'desc')
                                ->paginate(10);
        $i1 = 0;
        $i2 = 0;
        $i3 = 0;

        return view('admin.medicalManager')->with('domesticGuests', $domesticGuests)
                                            ->with('domesticMoves', $domesticMoves)
                                            ->with('entrys', $entrys)
        
                                            ->with('i1', $i1)
                                            ->with('i2', $i2)
                                            ->with('i3', $i3);
    }

    public function dashboard(Request $request)
    {
        $admin_email = $request->admin_email;
        $admin_password = md5($request->admin_password);

        $result = DB::table('admin')->where('admin_email',$admin_email)->where('admin_password',$admin_password)->first();
        if($result){
            Session::put('admin_name',$result->admin_name);
            Session::put('id',$result->id);
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
        Session::put('id',null);
        return Redirect::to('/admin-login');
    }

    public function show_statistic()
    {
        return view('admin.statistic');
    }

    public function filter_by_date3(Request $request){
        $from_date = Carbon::createFromFormat('m/d/Y', $request->from_date)->format('Y-m-d');
        $to_date = Carbon::createFromFormat('m/d/Y', $request->to_date)->format('Y-m-d');

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
        // $from_date = $request->from_date;
        $from_date = Carbon::createFromFormat('m/d/Y', $request->from_date)->format('Y-m-d');
        $to_date = Carbon::createFromFormat('m/d/Y', $request->to_date)->format('Y-m-d');
        // $to_date = $request->to_date;

        $gets = PersonStatistic::whereBetween('ngay',[$from_date, $to_date])->orderBy('ngay','ASC')->get();
        // $gets = PersonStatistic::all();

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

    public function getSeach()
    {
        return view('admin.medicalManager');
    }

    public function action(Request $request){
        // if($request->ajax()){
        //     $query = $request->get('query');
        //     if($query != ''){
        //         $domesticGuests = DB::table('domestic_guest_declarations')
        //                         ->join('users', 'domestic_guest_declarations.idUser', '=', 'users.id')
        //                         ->where('fullName','like','%'.$query.'%')
        //                         ->orderBy('created_at', 'desc')
        //                         ->paginate(10);
        //     }
        //     else{
        //         $domesticGuests = DB::table('domestic_guest_declarations')
        //                         ->join('users', 'domestic_guest_declarations.idUser', '=', 'users.id')
        //                         ->select('users.fullName', 'domestic_guest_declarations.created_at')
        //                         ->orderBy('created_at', 'desc')
        //                         ->paginate(10);
        //     }
        //     $total_row = $data->count();
        //     if($total_row > 0){
        //         foreach($data as $row){
        //             $output .= '
        //             <tr>
        //                 <td></td>
        //             </tr>';
        //         }
        //     }
        // }
    }
}
