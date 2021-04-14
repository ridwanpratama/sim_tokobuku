@extends('layouts.app')
@push('style')
    <style>
        th {
            cursor: pointer;
        }
    </style>    
@endpush
@section('content')
<div class="card">
    <div class="card-header">
        {{ __('Data Distributor') }}
        <a class="btn btn-info btn-sm text-white float-right" href="{{ route('distributor.create') }}">Create</a>
    </div>
    <div class="card-body">
      <div class="input-group mb-3">
        <input id="myInput" type="text" onkeyup="searchData()" placeholder="Cari..." class="form-control">
      </div>
        <table class="table table-striped"  id="myTable">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Distributor</th>
                <th scope="col">Alamat</th>
                <th scope="col">No Telp</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
          @foreach ($distributor as $item)
              <tr>
                <th scope="row">{{ ++$i }}</th>
                <td>{{ $item->nama_distributor }}</td>
                <td>{{ $item->alamat }}</td>
                <td>{{ $item->telpon }}</td>
                <td>
                  <form action="{{ route('distributor.destroy', $item->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" onclick="return confirm('apakah anda yakin ingin menghapus data?')">Hapus</button>
                    <a href="{{ route('distributor.edit', $item->id) }}" class="btn btn-warning btn-sm mt-1">Ubah</a>
                </td>
                </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          
    </div>
    
</div>
@endsection

@push('script')
  <script src="{{ asset('js/searchsort.js') }}"></script>
@endpush