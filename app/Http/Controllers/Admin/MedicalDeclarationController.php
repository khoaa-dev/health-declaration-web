<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DomesticGuestDeclaration;
use Illuminate\Support\Facades\DB;

class MedicalDeclarationController extends Controller
{
    public function index() {
        // $domesticGuests = DomesticGuestDeclaration::panigate(10);
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
}
