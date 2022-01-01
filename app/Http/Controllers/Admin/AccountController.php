<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    public function index() {
        // $domesticGuests = DomesticGuestDeclaration::panigate(10);
        $accountUsers = DB::table('users')
                                ->select('fullName', 'email', 'created_at')->paginate(10);

        $accountAdmins = DB::table('admin')
                                ->select('id', 'admin_name', 'admin_email', 'created_at')->get();

        $i1 = 0;
        $i2 = 0;

        return view('admin.accountManager')->with('accountUsers', $accountUsers)
                                            ->with('accountAdmins', $accountAdmins)
                                            ->with('i1', $i1)
                                            ->with('i2', $i2);
    }

    function addAccountAdmin(Request $request) {
        $admin = new Admin;
        $admin->admin_email = $request->admin_email;
        $admin->admin_password = $request->admin_password;
        $admin->admin_name = $request->admin_name;
        $admin->admin_phone = $request->admin_phone;
        $admin->save();

        return redirect()->route('accountManagement');

        
    }

    public function deleteAccountAdmin($id) {
        DB::table('admin')->where('id', $id)->delete();
        return redirect()->route('accountManagement');
    }
}
