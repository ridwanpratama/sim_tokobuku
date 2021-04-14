@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            {{ __('Create Distributor') }}
        </div>
        <div class="card-body">
            <form action="{{ route('distributor.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nama_distributor">Nama Distributor</label>
                    <input type="text" class="form-control" name="nama_distributor" id="nama_distributor">
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea class="form-control" id="alamat" name="alamat" rows="2"></textarea>
                </div>
                <div class="form-group">
                    <label for="telpon">No Telpon</label>
                    <input type="number" class="form-control" name="telpon" id="telpon">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
