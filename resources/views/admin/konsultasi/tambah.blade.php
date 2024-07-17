@extends('admin.layouts.app')

@section('content')
    <div id="formPertanyaan" class="container text-center">
        <h3>Form Tambah Data</h3>
        <form action="/konsultasis/simpan" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
                <label for="nama_pasien" class="col-sm-4 col-form-label text-right">Nama Pasien</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="nama_pasien" name="nama_pasien">
                </div>
            </div>
            <div class="form-group row">
                <label for="alamat" class="col-sm-4 col-form-label text-right">Alamat</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="alamat" name="alamat">
                </div>
            </div>
            <div class="form-group row">
                <label for="usia" class="col-sm-4 col-form-label text-right">Usia</label>
                <div class="col-sm-6">
                    <input type="number" class="form-control" id="usia" name="usia">
                </div>
            </div>
            <div class="form-group row">
                <label for="keluhan" class="col-sm-4 col-form-label text-right">Keluhan</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="keluhan" name="keluhan">
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
