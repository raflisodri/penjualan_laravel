<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penjualan;
use App\Models\Sepatu;
use App\Models\User;
use App\Models\Member;
class PenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penjualan = Penjualan::all();
        $user = User::all();
        $member = Member::all();
        $sepatu = Sepatu::all();
        return view('penjualan.index',compact('penjualan','user','member','sepatu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $user = User::all();
        $member = Member::all();
        $sepatu = Sepatu::all();
        return view('penjualan.tambah',compact('user','member','sepatu'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'tgl_bayar' => 'required',
            'jumlah_bayar' => 'required',
        ]);
        Penjualan::create([
            'id_user'=> $request->id_user, 
            'id_member'=> $request->id_member, 
            'id_sepatu'=> $request->id_sepatu, 
            'tgl_bayar'=> $request->tgl_bayar, 
            'jumlah_bayar'=> $request->jumlah_bayar, 
            $request->except(['_token']),
        ]);
        return redirect('/penjualan')->with($validated);
        
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $penjualan = Penjualan::find($id);
        $user = User::all();
        $member = Member::all();
        $sepatu = Sepatu::all();
        return view('penjualan.edit',compact('penjualan','user','member','sepatu'));
    }

  

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'tgl_bayar' => 'required',
            'jumlah_bayar' => 'required',

        ]);
        $penjualan = Penjualan::find($id);
        $penjualan->update([
            'id_user'=> $request->id_user, 
            'id_member'=> $request->id_member, 
            'id_sepatu'=> $request->id_sepatu, 
            'tgl_bayar'=> $request->tgl_bayar, 
      
            'jumlah_bayar'=> $request->jumlah_bayar, 

            $request->except(['_token']),
        ]);
        return redirect('/penjualan')->with($validated);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $penjualan = Penjualan::find($id);
        $penjualan->delete();
        return redirect('/penjualan');
    }

    public function cetak()
    {
        $penjualan = Penjualan::all();
        $user = User::all();
        $member = Member::all();
        $sepatu = Sepatu::all();
        return view('penjualan.cetak',compact('penjualan','user','member','sepatu'));
    }

    public function struk($id)
    {
        $penjualan = Penjualan::find($id);
        $user = User::all();
        $member = Member::all();
        $sepatu = Sepatu::all();
        return view('penjualan.struk',compact('penjualan','user','member','sepatu'));
    }
}
