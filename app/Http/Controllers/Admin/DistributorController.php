<?php

namespace App\Http\Controllers\Admin;

use App\Distributor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DistributorController extends Controller
{
    public function _validation(Request $request)
    {
        $validation = $request->validate([
            'nama_distributor' => 'required',
            'alamat' => 'required',
            'telpon' => 'required',
        ]);
    }

    public function index()
    {
        $distributor = Distributor::paginate(5);
        return view('admin.distributor.index', compact('distributor'))
            ->with('i',(request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('admin.distributor.create');
    }

    public function store(Request $request)
    {
        $this->_validation($request);
        Distributor::create([
            'nama_distributor' => $request->nama_distributor,
            'alamat' => $request->alamat,
            'telpon' => $request->telpon,
        ]);

        return redirect('distributor');
    }

    public function edit($id)
    {
        $distributor = Distributor::findorFail($id);
        return view('admin.distributor.edit',compact('distributor'));
    }

    public function update(Request $request, $id)
    {
        $this->_validation($request);
        $distributor = Distributor::findorFail($id);
        $distributor->update($request->all());
        return redirect('distributor');
    }

    public function destroy($id)
    {
        $distributor = Distributor::findorFail($id);
        $distributor->delete();
        return back();
    }
}
