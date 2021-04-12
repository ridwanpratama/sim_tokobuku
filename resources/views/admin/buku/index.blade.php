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
        {{ __('Data User') }}
        <a class="btn btn-info btn-sm text-white float-right" href="{{ route('buku.create') }}">Create</a>
    </div>
    <div class="card-body">
      <div class="input-group mb-3">
        <input id="myInput" type="text" onkeyup="searchData()" placeholder="Cari..." class="form-control">
      </div>
        <table class="table table-striped"  id="myTable">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Judul</th>
                <th scope="col">No ISBN</th>
                <th scope="col">Penulis</th>
                <th scope="col">Penerbit</th>
                <th scope="col">Tahun</th>
                <th scope="col">Stok</th>
                <th scope="col">Harga pokok</th>
                <th scope="col">Harga jual</th>
                <th scope="col">PPN</th>
                <th scope="col">Diskon</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
          @foreach ($buku as $item)
              <tr>
                <th scope="row">{{ ++$i }}</th>
                <td>{{ $item->judul }}</td>
                <td>{{ $item->noisbn }}</td>
                <td>{{ $item->penulis }}</td>
                <td>{{ $item->penerbit }}</td>
                <td>{{ $item->tahun }}</td>
                <td>{{ $item->stok }}</td>
                <td>{{ $item->harga_pokok }}</td>
                <td>{{ $item->harga_jual }}</td>
                <td>{{ $item->ppn }}</td>
                <td>{{ $item->diskon }}</td>
                <td>
                  <form action="{{ route('buku.destroy', $item->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" onclick="return confirm('apakah anda yakin ingin menghapus data?')">Hapus</button>
                    <a href="{{ route('buku.edit', $item->id) }}" class="btn btn-warning btn-sm mt-1">Ubah</a>
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