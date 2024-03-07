@extends('master.app')
@section('breadcrumb')
    <li class="breadcrumb-item">Edit </li>
    <li class="breadcrumb-item active">{{ $kategori->kategori }}</li>
@endsection
@section('konten')
    <div class="container-fluid">
        <div class="page-heading">
            <div class="page-title">
                <div class="row">
                    <div class="col-7 order-md-1 order-last">
                        <div style="float: right">
                            <a href="{{ route('kategori') }}">
                                <button class="btn btn-warning mt-2">
                                    <i class="fa fa-arrow-circle-left"></i> Kembali
                                </button>
                            </a>
                        </div>
                        <h3>Edit Data</h3>
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
                                        <form action="{{ route('kategori.update', $kategori['id']) }}" method="post">
                                            @method('PUT')
                                            @csrf
                                            <div class="form-group">
                                                <label for="basicInput">Nama kategori</label>
                                                <input type="text" value="{{ $kategori['kategori'] }}"
                                                    name="nama_kategori"
                                                    class="form-control @error('nama_kategori') is-invalid @enderror"
                                                    id="basicInput" placeholder="Masukkan nama kategori">
                                                @error('nama_kategori')
                                                    <p class="text-danger">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <button class="btn btn-primary mt-3">
                                                <i class="fa fa-save"></i> Update
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
