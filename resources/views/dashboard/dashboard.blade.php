@extends('layouts.main-layout')

@section('title', 'Dashboard')

@push('css')
    <link href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css" rel="stylesheet" crossorigin="anonymous">
@endpush

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h3 col-lg-auto text-center text-md-start">Dashboard</h1>
        <div class="col-auto ml-auto text-right mt-n1">
            <nav aria-label="breadcrumb text-center">
                <ol class="breadcrumb bg-transparent p-0 mt-1 mb-0">
                    <li class="breadcrumb-item"><a class="text-decoration-none" href="{{ route('Dashboard') }}">E-Kinerja</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="row g-2 mt-2">
                <div class="col-6 my-auto">
                    <div class="card border-0 my-auto">
                        <a href="" class="callout callout-info text-decoration-none link-dark my-auto">
                            <p class="my-auto"><i class="fas fa-external-link-alt mr-2"></i>Diklat</p>
                        </a>
                    </div>
                </div>
                <div class="col-6 my-1">
                    <div class="card border-0 my-auto">
                        <a href="" class="callout callout-info text-decoration-none link-dark my-auto">
                            <p class="my-auto"><i class="fas fa-external-link-alt mr-2"></i>Pengembangan</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card mt-3">
                <div class="card-header my-auto">
                    <p class="text-center my-auto">Radar Chart</p>
                </div>
                <div class="card-body">
                    <div style="position: relative; height:35rem; width:100%">
                        <canvas id="myChart_2"></canvas>
                    </div>                      
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            $('#dashboard').addClass('menu-open');
            $('#dashboard-link').addClass('active');
        });
    </script>

    {{-- myChart_2 --}}
    <script>
        const labels2 = [
            'Skill A',
            'Skill B',
            'Skill C',
            'Skill D',
        ];

        const data2 = {
            labels: labels2,
            datasets: [
                {
                    label: 'Dataset',
                    data: [65, 59, 80, 81],
                    backgroundColor: [
                        'rgba(54, 162, 235, 0.6)',
                    ],
                },
            ]
        };

        const config2 = {
            type: 'radar',
            data: data2,
            options: {
                rresponsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false,
                        position: 'right',
                    }
                }
            },
        };

        var myChart2 = new Chart(
            document.getElementById('myChart_2'),
            config2
        );
    </script>
@endpush