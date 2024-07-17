@extends('admin.layouts.app')

@section('content')
    <div id="formPertanyaan" class="container text-center">
        <h3>Form Tambah Data</h3>
        <form action="/obats/{{ $data->id }}/update" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
                <label for="nama_obat" class="col-sm-4 col-form-label text-right">Nama Obat</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="nama_obat" name="nama_obat"
                        value="{{ $data->nama_obat }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="deskripsi_obat" class="col-sm-4 col-form-label text-right">Deskripsi</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="deskripsi_obat" name="deskripsi_obat"
                        value="{{ $data->deskripsi_obat }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="harga" class="col-sm-4 col-form-label text-right">Harga</label>
                <div class="col-sm-6">
                    <input type="number" class="form-control" id="harga" name="harga" value="{{ $data->harga }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="gambar" class="col-sm-4 col-form-label text-right">Foto Obat</label>
                <div class="col-sm-6">
                    <input type="file" class="form-control" id="gambar" name="gambar" width="100">
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-sm-4 col-sm-6">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
@endsection
