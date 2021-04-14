@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            {{ __('Create Buku') }}
        </div>
        <div class="card-body">
            <form action="{{ route('buku.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="text" class="form-control" name="judul" id="judul">
                </div>
                <div class="form-group">
                    <label for="noisbn">No ISBN</label>
                    <input type="text" class="form-control" name="noisbn" id="noisbn">
                </div>
                <div class="form-group">
                    <label for="penulis">Penulis</label>
                    <input type="text" class="form-control" name="penulis" id="penulis">
                </div>
                <div class="form-group">
                    <label for="penerbit">Penerbit</label>
                    <input type="text" class="form-control" name="penerbit" id="penerbit">
                </div>
                <div class="form-group">
                    <label for="tahun">Tahun</label>
                    <input type="number" class="form-control" name="tahun" id="tahun">
                </div>
                <div class="form-group">
                    <label for="stok">Stok</label>
                    <input type="number" class="form-control" name="stok" id="stok">
                </div>
                <div class="form-group">
                    <label for="harga_pokok">Harga Pokok</label>
                    <input type="number" class="form-control" name="harga_pokok" id="harga_pokok">
                </div>
                <div class="form-group">
                    <label for="harga_jual">Harga Jual</label>
                    <input type="number" class="form-control" name="harga_jual" id="harga_jual">
                </div>
                <div class="form-group">
                    <label for="ppn">PPN</label>
                    <input type="number" class="form-control" name="ppn" id="ppn">
                </div>
                <div class="form-group">
                    <label for="diskon">Diskon</label>
                    <input type="number" class="form-control" name="diskon" id="diskon">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
