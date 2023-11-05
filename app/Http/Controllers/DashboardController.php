<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penjualan;
use App\Models\Sepatu;
use App\Models\User;
use App\Models\Member;
use Illuminate\Support\Carbon;
class DashboardController extends Controller
{
    
    function index() {
        $jumlah_member = Member::count();
        $jumlah_user = User::count();
        $jumlah_sepatu = Sepatu::count();
        $penjualan = Penjualan::Select()->orderBy ('tgl_bayar','DESC')
        ->limit(5)
        ->get();

        $today = Carbon::today();
        $start = Carbon::today()->subDays(7);
        $total_minggu = Penjualan::Select(Penjualan::raw ('SUM(jumlah_bayar) as total_price'))
       
        ->whereBetween('tgl_bayar',[$start, $today])->first();

        return view('dashboard',compact('jumlah_member','jumlah_user','jumlah_sepatu','penjualan'),['total_minggu'=>$total_minggu]);
    }
}
