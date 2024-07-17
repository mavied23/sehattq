@extends('admin.layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row m-auto">
            <h3 class="m-auto">Konsultasi Pasien</h3>
            {{-- @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            @if (session()->has('Error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('Error') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif --}}
            {{-- end alert --}}
            <table class="table table-hover mt-3 text-center">
                <thead>
                    <tr>
                        <td>No</td>
                        <td>Nama Pasien</td>
                        <td>Alamat</td>
                        <td>usia</td>
                        <td>Pemeriksaan</td>
                        <td>Keluhan</td>
                        <td>#</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->nama_pasien }}</td>
                            <td>{{ $item->alamat }}</td>
                            <td>{{ $item->usia }}</td>
                            <td>{{ $item->pemeriksaan }}</td>
                            <td>{{ $item->keluhan }}</td>
                            <td>
                                <a href="konsultasis/{{ $item->id }}/show" class="btn btn-outline-secondary"><i
                                        class="fas fa-eye"></i></a>
                                <a href="konsultasis/{{ $item->id }}/hapus" id="delete"
                                    class="btn btn-outline-danger"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
