<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Suplier;
use Illuminate\Support\Facades\Auth;
class SuplierController extends Controller
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
            $suplier = Suplier::all();
            return view('suplier.index',compact('suplier'));
        }
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('suplier.tambah');
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
            'nama_suplier' => 'required|string|min:3',
            'nama_perusahaan' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
        ]);
        Suplier::create([
            'nama_suplier'=> $request->nama_suplier, 
            'nama_perusahaan'=> $request->nama_perusahaan, 
            'alamat'=> $request->alamat, 
            'no_telp'=> $request->no_telp, 
            $request->except(['_token']),
        ]);
        return redirect('/suplier')->with($validated);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $suplier = Suplier::find($id);
        return view('suplier.edit',compact('suplier'));
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
            'nama_suplier' => 'required|string|min:3',
            'nama_perusahaan' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
        ]);
        $suplier = Suplier::find($id);
        $suplier->update([
            'nama_suplier'=> $request->nama_suplier, 
            'nama_perusahaan'=> $request->nama_perusahaan, 
            'alamat'=> $request->alamat, 
            'no_telp'=> $request->no_telp, 
            $request->except(['_token']),
        ]);
        return redirect('/suplier')->with($validated);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $suplier = Suplier::find($id);
        $suplier->delete();
        return redirect('/suplier');
    }
}
