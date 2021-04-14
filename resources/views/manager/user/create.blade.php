@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        {{ __('Create User') }}
    </div>
    <div class="card-body">
        <form action="{{ route('user.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nama</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Masukkan nama">
               </div>
            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" class="form-control" name="username" id="username" placeholder="Masukkan username">
             </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" name="password" id="password" placeholder="Masukkan password">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea class="form-control" id="alamat" name="alamat" rows="2"></textarea>
            </div>
            <div class="form-group">
                <label for="telpon">No Telp</label>
                <input type="number" class="form-control" name="telpon" id="telpon" placeholder="Masukkan no telp">
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <select class="form-control" id="status" name="status">
                  <option value="disable">Pilih Status</option>
                  <option value="Aktif">Aktif</option>
                  <option value="Tidak aktif">Tidak aktif</option>
                </select>
            </div>
            <div class="form-group">
                <label for="akses">Akses</label>
                <select class="form-control" id="akses" name="akses">
                  <option value="disable">Pilih Akses</option>
                  <option value="Admin">Admin</option>
                  <option value="Manager">Manager</option>
                  <option value="Kasir">Kasir</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
</div>
@endsection