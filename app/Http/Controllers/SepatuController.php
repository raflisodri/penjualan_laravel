<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sepatu;
use Illuminate\Support\Facades\Auth;
use App\Models\Suplier;
class SepatuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth()->User()->level == 'Kasir') {
            Auth::logout(); // Log out the kasir user
            return redirect('/login')->with('error', 'You do not have permission to access this page.');
        } else{
        $sepatu = Sepatu::all();
        $suplier = Suplier::all();
        return view('sepatu.index',compact('sepatu','suplier'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $suplier = Suplier::all();
        return view('sepatu.tambah',compact('suplier'));
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
            'nama_sepatu' => 'required',
            'merk' => 'required',
            'stok' => 'required',
            'warna' => 'required',
        ]);

        $img = $request->file('foto');
        $name = hexdec(uniqid());
        $ext = strtolower($img->getClientOriginalExtension());
        $foto = $name.'.'.$ext;
        $img->move('foto/', $foto);

        Sepatu::create([
            'id_suplier'=> $request->id_suplier, 
            'nama_sepatu'=> $request->nama_sepatu, 
            'merk'=> $request->merk, 
            'stok' => $request->stok, 
            'warna'=> $request->warna, 
            'foto'=> $foto, 
            $request->except(['_token']),
        ]);
        return redirect('/sepatu')->with($validated);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sepatu = Sepatu::find($id);
        $suplier = Suplier::all();
        return view('sepatu.edit',compact('sepatu','suplier'));
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
            'nama_sepatu' => 'required',
            'merk' => 'required',
            'stok' => 'required',
            'warna' => 'required',
        ]);

        $img = $request->file('foto');
        $name = hexdec(uniqid());
        $ext = strtolower($img->getClientOriginalExtension());
        $foto = $name.'.'.$ext;
        $img->move('foto/', $foto);

        $sepatu = Sepatu::find($id);
        $sepatu->update([
            'id_suplier'=> $request->id_suplier, 
            'nama_sepatu'=> $request->nama_sepatu, 
            'merk'=> $request->merk, 
            'stok' => $request->stok, 
            'warna'=> $request->warna, 
            'foto'=> $foto, 
            $request->except(['_token']),
        ]);
        return redirect('/sepatu')->with($validated);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sepatu = Sepatu::find($id);
        $sepatu->delete();
        return redirect('/sepatu');
    }
}
