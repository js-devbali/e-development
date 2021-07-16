@extends('layouts.main-layout')

@section('title', 'Pengembangan | Tambah Pengembangan')

@push('css')
    <link href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css" rel="stylesheet" crossorigin="anonymous">
@endpush

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h3 col-lg-auto text-center text-md-start">E-Development</h1>
        <div class="col-auto ml-auto text-right mt-n1">
            <nav aria-label="breadcrumb text-center">
                <ol class="breadcrumb bg-transparent p-0 mt-1 mb-0">
                    <li class="breadcrumb-item"><a class="text-decoration-none" href="{{ route('Pengembangan') }}">Pengembangan</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Tambah pengembangan</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header p-2 d-flex justify-content-center justify-content-lg-start justify-content-sm-start">
                    <ul class="nav nav-pills">
                        <li class="nav-item"><a class="nav-link active" id="tabAccount" href="#account" data-toggle="tab">Tambah Pengembangan</a></li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content">
                        <div class="tab-pane active" id="account">
                            <form action="" method="POST" class="form-horizontal needs-validation" enctype="multipart/form-data" novalidate>
                                @csrf
                                <div class="form-group row">
                                    <label for="nama" class="col-sm-12 col-md-2 col-form-label">Jadwal<span class="text-danger">*</span></label>
                                    <div class="col-sm-12 col-md-10 my-auto">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Tanggal Mulai" aria-label="Username">
                                            <span class="input-group-text">s/d</span>
                                            <input type="text" class="form-control" placeholder="Tanggal Berakhir" aria-label="Server">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nik" class="col-sm-12 col-md-2 col-form-label">Nama Kompetensi<span class="text-danger">*</span></label>
                                    <div class="col-sm-12 col-md-10 my-auto">
                                        <input name="nik" type="text" class="form-control @error('nik') is-invalid @enderror" id="nik" placeholder="Masukann nama kompetensi">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nik" class="col-sm-12 col-md-2 col-form-label">Jenis Kompetensi<span class="text-danger">*</span></label>
                                    <div class="col-sm-12 col-md-10 my-auto">
                                        <input name="nik" type="text" class="form-control @error('nik') is-invalid @enderror" id="nik" placeholder="Masukan jenis kompetensi">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nik" class="col-sm-12 col-md-2 col-form-label">Nilai<span class="text-danger">*</span></label>
                                    <div class="col-sm-12 col-md-10 my-auto">
                                        <input name="nik" type="text" class="form-control @error('nik') is-invalid @enderror" id="nik" placeholder="Masukan hasil nilai">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nik" class="col-sm-12 col-md-2 col-form-label">Target<span class="text-danger">*</span></label>
                                    <div class="col-sm-12 col-md-10 my-auto">
                                        <input name="nik" type="text" class="form-control @error('nik') is-invalid @enderror" id="nik" placeholder="Masukan target">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nik" class="col-sm-12 col-md-2 col-form-label">Metode Pengembangan<span class="text-danger">*</span></label>
                                    <div class="col-sm-12 col-md-10 my-auto">
                                        <input name="nik" type="text" class="form-control @error('nik') is-invalid @enderror" id="nik" placeholder="Masukan nama metode pengembangan">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nik" class="col-sm-12 col-md-2 col-form-label">Aktivitas<span class="text-danger">*</span></label>
                                    <div class="col-sm-12 col-md-10 my-auto">
                                        <input name="nik" type="text" class="form-control @error('nik') is-invalid @enderror" id="nik" placeholder="Masukan nama metode pengembangan">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nik" class="col-sm-12 col-md-2 col-form-label">Butir Aktivitas<span class="text-danger">*</span></label>
                                    <div class="col-sm-12 col-md-10 my-auto">
                                        <input name="nik" type="text" class="form-control @error('nik') is-invalid @enderror" id="nik" placeholder="Masukan nama metode pengembangan">
                                    </div>
                                </div>
                                <div class="form-group text-end my-2">
                                    <span class="text-danger">* Data Wajib Diisi</span>
                                </div>
                                <div class="form-group row mt-3">
                                    <div class="col-sm-12 text-end">
                                        <a href="{{ route('Pengembangan Result') }}" class="btn btn-sm btn-outline-success my-1">Simpan Data</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script src="{{ asset('template/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            $('#e-kinerja').addClass('menu-open');
            $('#e-kinerja-link').addClass('active');
            $('#kinerja-tahunan').addClass('active');
            
            $("#table_1").DataTable({
                "responsive": false, "lengthChange": true, "autoWidth": false,
                "oLanguage": {
                    "sSearch": "Cari:",
                    "sZeroRecords": "Data tugas jabatan tidak ditemukan",
                    "sSearchPlaceholder": "Cari tugas jabatan ...",
                    "infoEmpty": "Menampilkan 0 Data",
                    "infoFiltered": "(dari _MAX_ Data)",
                    "sLengthMenu": "Tampilkan _MENU_ data",
                },
                "language": {
                    "paginate": {
                        "previous": 'Sebelumnya',
                        "next": 'Berikutnya'
                    },
                    "info": "Menampilkan halaman _PAGE_ dari _PAGES_",
                },
            });
        });
    </script>
@endpush
