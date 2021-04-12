@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        {{ __('Create User') }}
        <a class="btn btn-info btn-sm text-white float-right" href="#">Create</a>
    </div>
    <div class="card-body">
        <form action="{{route('user.update',[$user->id])}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Nama</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Masukkan nama" value="{{ $user->name }}">
               </div>
            <div class="form-group">
              <label for="email">Email address</label>
              <input type="email" class="form-control" name="email" id="email" placeholder="Masukkan email" value="{{ $user->email }}">
             </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" name="password" id="password" placeholder="Masukkan password" value="{{ $user->password }}">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea class="form-control" id="alamat" name="alamat" rows="2">{{ $user->alamat }}</textarea>
            </div>
            <div class="form-group">
                <label for="telpon">No Telp</label>
                <input type="number" class="form-control" name="telpon" id="telpon" placeholder="Masukkan no telp" value="{{ $user->telpon }}">
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <select class="form-control" id="status" name="status">
                  <option value="{{ $user->status }}">{{ $user->status }}</option>
                  <option value="Aktif">Aktif</option>
                  <option value="Tidak aktif">Tidak aktif</option>
                </select>
            </div>
            <div class="form-group">
                <label for="akses">Akses</label>
                <select class="form-control" id="akses" name="akses">
                  <option value="{{ $user->akses }}">{{ $user->akses }}</option>
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