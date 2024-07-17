<?php

namespace App\Http\Controllers;

use  RealRashid\SweetAlert\Facades\Alert;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function index()
    {
        $user = User::all();
        confirmDelete('Delete', 'Apakah Kamu Yakin?');
        return view('user.index', compact('user'));

    }

    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|unique:user',
            'password' => 'required|min:8', // Add 'confirmed' if
            'isAdmin' => 'required',
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = hash::make($request->password);
        $user->isAdmin = $request->isAdmin;
        $user->save();
        Alert::success('Success', 'data Berhasil Disimpan')->autoClose(1000);
        return redirect()->route('user.index')->with('success', 'User created successfully.');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('user.edit', compact('user'));

        $user->save();
        return redirect()->route('user.index');
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required',
            'password' => 'required|min:8', // Add 'confirmed' if
            'isAdmin' => 'required',
        ]);
        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = hash::make($request->password);
        $user->isAdmin = $request->isAdmin;
        $user->save();
        Alert::success('Success', 'Data Berhasil Di Edit')->autoClose(1000);
        return redirect()->route('user.index')->with('success', 'User update successfully.');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        Alert::success('Success', 'Data Berhasil Di Hapus')->autoClose(1000);
        return redirect()->route('user.index')->with('success', 'Koperasi deleted successfully');

    }
}
