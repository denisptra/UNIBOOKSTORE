@extends('master.app')
@section('breadcrumb')
    <li class="breadcrumb-item">Penerbit</li>
    <li class="breadcrumb-item active">Tambah Data</li>
@endsection
@section('konten')
    <div class="container-fluid">
        <div class="page-heading">
            <div class="page-title">
                <div class="row">
                    <div class="col-7 order-md-1 order-last">
                        <div style="float: right">
                            <a href="{{ route('kategori') }}">
                                <button class="btn btn-warning">
                                    <i class="fa fa-arrow-circle-left"></i> Kembali
                                </button>
                            </a>
                        </div>
                        <h3>Tambah Data</h3>
                    </div>
                </div>
            </div>
            <div class="page-content mt-4">
                <section class="section">
                    <div class="row" id="basic-table">
                        <div class="col-12 col-md-7">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <form action="{{ route('kategori.store') }}" method="post">
                                            @csrf
                                            <div class="form-group">
                                                <label for="basicInput">Kode</label>
                                                <input type="text" value="{{ old('kode') }}" name="kode"
                                                    class="form-control @error('kode') is-invalid @enderror" id="basicInput"
                                                    placeholder="Masukkan Kode">
                                                @error('kode')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                                <label for="basicInput">Nama</label>
                                                <input type="text" value="{{ old('nama') }}" name="nama"
                                                    class="form-control @error('nama') is-invalid @enderror" id="basicInput"
                                                    placeholder="Masukkan Nama Penerbit">
                                                @error('nama')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                                <label for="basicInput">Alamat</label>
                                                <input type="text" value="{{ old('alamat') }}" name="kode"
                                                    class="form-control @error('alamat') is-invalid @enderror"
                                                    id="basicInput" placeholder="Masukkan Alamat">
                                                @error('alamat')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                                <label for="basicInput">Kota</label>
                                                <input type="text" value="{{ old('kota') }}" name="kota"
                                                    class="form-control @error('kota') is-invalid @enderror" id="basicInput"
                                                    placeholder="Masukkan Kota">
                                                @error('kota')
                                                    <p class="text-danger">{{ $message }}</p>
                                                    <label for="basicInput">Telepon</label>
                                                    <input type="text" value="{{ old('telepon') }}" name="telepon"
                                                        class="form-control @error('telepon') is-invalid @enderror"
                                                        id="basicInput" placeholder="Masukkan Telepon">
                                                    @error('telepon')
                                                        <p class="text-danger">{{ $message }}</p>
                                                    @enderror
                                                @enderror
                                            </div>
                                            <button class="btn btn-primary mt-3">
                                                <i class="fa fa-save"></i> Simpan
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
