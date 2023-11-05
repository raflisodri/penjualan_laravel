<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
       
            $member = Member::all();
            return view('member.index',compact('member'));
        
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('member.tambah');
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
            'nama' => 'required|string|min:3',
            'alamat' => 'required',
            'no_telp' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
        ]);
        Member::create([
            'nama'=> $request->nama, 
            'alamat'=> $request->alamat, 
            'no_telp'=> $request->no_telp, 
            $request->except(['_token']),
        ]);
        return redirect('/member')->with($validated);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $member = Member::find($id);
        return view('member.edit',compact('member'));
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
            'nama' => 'required|string|min:3',
            'alamat' => 'required',
            'no_telp' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
        ]);
        $member = Member::find($id);
        $member->update([
            'nama'=> $request->nama, 
            'alamat'=> $request->alamat, 
            'no_telp'=> $request->no_telp, 
            $request->except(['_token']),
        ]);
        return redirect('/member')->with($validated);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $member = Member::find($id);
        $member->delete();
        return redirect('/member');
    }
}
