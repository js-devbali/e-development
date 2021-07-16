@extends('layouts.main-layout')

@section('title', 'Diklat')

@push('css')
    <link href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css" rel="stylesheet" crossorigin="anonymous">
@endpush

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h3 col-lg-auto text-center text-md-start">E-Development</h1>
        <div class="col-auto ml-auto text-right mt-n1">
            <nav aria-label="breadcrumb text-center">
                <ol class="breadcrumb bg-transparent p-0 mt-1 mb-0">
                    <li class="breadcrumb-item"><a class="text-decoration-none" href="{{ route('Dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Diklat pegawai</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header text-end">
                    <a href="{{ route('Tambah Diklat') }}" class="btn btn-primary my-auto"><i class="fas fa-plus"></i> Tambah Diklat</a>
                </div>
                <div class="card-body">
                    <table id="tableHistory" class="table table-responsive-sm table-bordered table-hover small">
                        <thead class="text-center bg-primary">
                            <tr>
                                <th>No</th>
                                <th>Kompetensi</th>
                                <th>Jenis Kompetensi</th>
                                <th>Nilai</th>
                                <th>Target</th>
                                <th>Pembelajaran</th>
                                <th>Usulan</th>
                                <th>Penyelenggara</th>
                                <th>Jadwal</th>
                                <th>Biaya (Rp)</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <tr>
                                <td>1</td>
                                <td>Continuous Learning Improvment</td>
                                <td>Kompetensi Inti</td>
                                <td>1</td>
                                <td>2</td>
                                <td>Effective Business Communication</td>
                                <td>Creative Thingking Technique</td>
                                <td>PPM Management</td>
                                <td>08-07-2021 s/d 10-08-2021</td>
                                <td>1.500.000</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Relationship Building</td>
                                <td>Kompetensi Inti</td>
                                <td>2</td>
                                <td>2</td>
                                <td>-</td>
                                <td>Strategi Menyakinkan Orang Lain dengan Teknik Persuasif</td>
                                <td>Skill Academy</td>
                                <td>08-08-2021 s/d 10-10-2021</td>
                                <td>2.750.000</td>
                            </tr>
                        </tbody>
                    </table>  
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

            $("#tableHistory").DataTable({
                "responsive": false, "lengthChange": true, "autoWidth": false,
                "oLanguage": {
                    "sSearch": "Cari:",
                    "sZeroRecords": "Data diklat tidak ditemukan",
                    "sSearchPlaceholder": "Cari data diklat ...",
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
