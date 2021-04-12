@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            {{ __('Edit Buku') }}
            <a class="btn btn-info btn-sm text-white float-right" href="#">Create</a>
        </div>
        <div class="card-body">
            <form action="{{ route('buku.update', $buku->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="text" class="form-control" name="judul" id="judul" value="{{ $buku->judul }}">
                </div>
                <div class="form-group">
                    <label for="noisbn">No ISBN</label>
                    <input type="text" class="form-control" name="noisbn" id="noisbn" value="{{ $buku->noisbn }}">
                </div>
                <div class="form-group">
                    <label for="penulis">Penulis</label>
                    <input type="text" class="form-control" name="penulis" id="penulis" value="{{ $buku->penulis }}">
                </div>
                <div class="form-group">
                    <label for="penerbit">Penerbit</label>
                    <input type="text" class="form-control" name="penerbit" id="penerbit" value="{{ $buku->penerbit }}">
                </div>
                <div class="form-group">
                    <label for="tahun">Tahun</label>
                    <input type="number" class="form-control" name="tahun" id="tahun" value="{{ $buku->tahun }}">
                </div>
                <div class="form-group">
                    <label for="stok">Stok</label>
                    <input type="number" class="form-control" name="stok" id="stok" value="{{ $buku->stok }}">
                </div>
                <div class="form-group">
                    <label for="harga_pokok">Harga Pokok</label>
                    <input type="number" class="form-control" name="harga_pokok" id="harga_pokok" value="{{ $buku->harga_pokok }}">
                </div>
                <div class="form-group">
                    <label for="harga_jual">Harga Jual</label>
                    <input type="number" class="form-control" name="harga_jual" id="harga_jual" value="{{ $buku->harga_jual }}">
                </div>
                <div class="form-group">
                    <label for="ppn">PPN</label>
                    <input type="number" class="form-control" name="ppn" id="ppn" value="{{ $buku->ppn }}">
                </div>
                <div class="form-group">
                    <label for="diskon">Diskon</label>
                    <input type="number" class="form-control" name="diskon" id="diskon" value="{{ $buku->diskon }}">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
