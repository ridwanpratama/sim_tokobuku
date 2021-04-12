<div class="list-group">
    <a class="list-group-item" href="{{ route('home') }}">Home</a>

    @if (auth()->user()->akses=="Manager")
    <a class="list-group-item" href="{{ route('user.index') }}">Data User</a>
    @endif

    @if (auth()->user()->akses=="Admin")
    <a class="list-group-item" href="{{ route('buku.index') }}">Data Buku</a>
    @endif

    @if (auth()->user()->akses=="Admin")
    <a class="list-group-item" href="">Data Distributor</a>
    @endif

    @if (auth()->user()->akses=="Kasir")
    <a class="list-group-item" href="#">Transaksi</a>
    @endif
</div>