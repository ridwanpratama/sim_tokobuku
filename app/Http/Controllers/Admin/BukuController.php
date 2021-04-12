<?php

namespace App\Http\Controllers\Admin;

use App\Buku;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BukuController extends Controller
{
    public function _validation(Request $request)
    {
        $validation = $request->validate([
            'judul' => 'required',
            'noisbn' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'tahun' => 'required',
            'stok' => 'required',
            'harga_pokok' => 'required',
            'harga_jual' => 'required',
            'ppn' => 'required',
            'diskon' => 'required'
        ]);
    }

    public function index()
    {
        $buku = Buku::paginate(5);
        return view('admin.buku.index', compact('buku'))
            ->with('i',(request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('admin.buku.create');
    }

    public function store(Request $request)
    {
        $this->_validation($request);
        Buku::create([
            'judul' => $request->judul,
            'noisbn' => $request->noisbn,
            'penulis' => $request->penulis,
            'penerbit' => $request->penerbit,
            'tahun' => $request->tahun,
            'stok' => $request->stok,
            'harga_pokok' => $request->harga_pokok,
            'harga_jual' => $request->harga_jual,
            'ppn' => $request->ppn,
            'diskon' => $request->diskon
        ]);

        return redirect('buku');
    }

    public function edit($id)
    {
        $buku = Buku::find($id);
        return view('admin.buku.edit',compact('buku'));
    }

    public function update(Request $request, $id)
    {
        $this->_validation($request);
        $buku = Buku::find($id);
        $buku->update($request->all());
        return redirect('buku');
    }

    public function destroy($id)
    {
        $buku = Buku::findorFail($id);
        $buku->delete();
        return back();
    }
}
