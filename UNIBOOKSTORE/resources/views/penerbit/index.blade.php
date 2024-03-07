@extends('master.app')
@section('breadcrumb')
    <li class="breadcrumb-item active">Penerbit</li>
@endsection
@section('konten')
    <div class="container-fluid">
        <div class="page-heading">
            <div class="page-title">
                <div class="row">
                    <div class="col-8 order-md-1 order-last">
                        <h3>Data Penerbit</h3>
                        <a href="{{route('penerbit.create')}}">
                            <button class="btn btn-success mt-2">
                                <i class="fa fa-plus-circle"></i> Tambah Data
                            </button>
                        </a>
                    </div>
                    <div class="col-4 order-last">
                        <form class="d-flex mt-5" action="" method="GET">
                            <input class="form-control me-1" name="search" type="search" placeholder="Search ..."
                                aria-label="Search">
                            <button class="btn btn-success d-flex" type="submit"><i
                                    class="fa fa-search px-1 pt-1"></i>Cari</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="page-content mt-4">
                <section class="section">
                    <div class="row" id="basic-table">
                        <div class="col-12 col-md-12">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-lg table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Kode</th>
                                                        <th>Nama</th>
                                                        <th>Alamat</th>
                                                        <th>Kota</th>
                                                        <th>Telepon</th>
                                                        <th style="width: 20%"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @php
                                                        $no = 1;
                                                    @endphp
                                                    @foreach ($data as $penerbit)
                                                    <tr>
                                                        <td>{{$no ++}}</td>
                                                        <td class="text-bold-500">{{$penerbit->kode}}</td>
                                                        <td class="text-bold-500">{{$penerbit->nama}}</td>
                                                        <td class="text-bold-500">{{$penerbit->alamat}}</td>
                                                        <td class="text-bold-500">{{$penerbit->kota}}</td>
                                                        <td class="text-bold-500">{{$penerbit->telepon}}</td>
                                                        <td>
                                                            <div class="buttons">
                                                                </a>
                                                                <a href="" class="btn icon btn-warning">
                                                                    <i class="fa fa-pencil"></i>
                                                                </a>
                                                                <a href="" class="btn icon btn-danger"
                                                                    onclick="return confirm('Apakah yakin ingin di hapus?')">
                                                                    <i class="fa fa-trash"></i>
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
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
