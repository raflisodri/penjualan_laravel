<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
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
        }else{
            $user = User::all();
            return view('user.index',compact('user'));
        }

     
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.tambah');
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
            'name' => 'required|string|min:10',
            'username' => 'required',
            'password' => 'required|min:8',
            'level' => 'in:Kasir,Admin',
        ]);

        $img = $request->file('foto');
        $name = hexdec(uniqid());
        $ext = strtolower($img->getClientOriginalExtension());
        $foto = $name.'.'.$ext;
        $img->move('foto/', $foto);

        User::create([
            'name'=> $request->name, 
            'foto'=> $foto, 
            'username'=> $request->username, 
            'password' => bcrypt($request->password), 
            'level'=> $request->level, 
            $request->except(['_token']),
        ]);
        return redirect('/user')->with($validated);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('user.edit',compact('user'));
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
            'name' => 'required|string|min:10',
            'username' => 'required',
            'password' => 'required|min:8',
            'level' => 'in:Kasir,Admin',
        ]);

        $img = $request->file('foto');
        $name = hexdec(uniqid());
        $ext = strtolower($img->getClientOriginalExtension());
        $foto = $name.'.'.$ext;
        $img->move('foto/', $foto);

        $user = User::find($id);
        $user->update([
            'name'=> $request->name, 
            'foto'=> $foto, 
            'username'=> $request->username, 
            'password' => bcrypt($request->password), 
            'level'=> $request->level, 
            $request->except(['_token']),
        ]);
        return redirect('/user')->with($validated);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/user');
    }
}
