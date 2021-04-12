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
        <a class="btn btn-info btn-sm text-white float-right" href="{{ route('user.create') }}">Create</a>
    </div>
    <div class="card-body">
      <div class="input-group mb-3">
        <input id="myInput" type="text" onkeyup="searchData()" placeholder="Cari..." class="form-control">
      </div>
        <table class="table table-striped"  id="myTable">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Username</th>
                <th scope="col">No telp</th>
                <th scope="col">Akses</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($user as $item)
              <tr>
                <th scope="row">{{ ++$i }}</th>
                <td>{{ $item->name }}</td>
                <td>{{ $item->username }}</td>
                <td>{{ $item->telpon }}</td>
                <td>{{ $item->akses }}</td>
                <td>
                  <form action="{{route('user.destroy',[$item->id])}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" onclick="return confirm('apakah anda yakin ingin menghapus user: {{$item->name}}')">Hapus</button>
                    <a href="{{route('user.edit',[$item->id])}}" class="btn btn-warning btn-sm">Ubah</a>
                </td>
                    
                </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          {{ $user->links() }}
    </div>
    
</div>
@endsection

@push('script')
  <script src="{{ asset('js/searchsort.js') }}"></script>
@endpush