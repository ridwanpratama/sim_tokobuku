<?php

namespace App\Http\Controllers\Manager;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $user = User::paginate(5);
        return view('manager.user.index', compact('user'))
            ->with('i',(request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('manager.user.create');
    }

    public function store(Request $request)
    {
        $this->_validation($request);

        User::create([
            'name' => $request->name,
            'password' => Hash::make($request->password),
            'akses' => $request->akses,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'telpon' => $request->telpon,
            'status' => $request->status,
            'akses' => $request->akses
        ]);

        return redirect('user');
    }

    public function _validation(Request $request)
    {
        $validation = $request->validate([
            'name' => 'required|max:100|min:2',
            'akses' => 'required|min:3',
            'password' => 'required|min:5',
            'email' => 'required',
            'alamat' => 'required',
            'telpon' => 'required|max:12',
            'status' => 'required',
            'akses' => 'required'
        ]);
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('manager.user.edit',compact('user'));
    }

    public function update(Request $request, $id)
    {
        $this->_validation($request);
        $user = User::find($id);
        $request->merge(['password'=>bcrypt($request->password)]);
        $user->update($request->all());
        return redirect('user');
    }

    public function destroy($id)
    {
        $user = User::findorfail($id);
        $user->delete();
        return back();
    }
}
