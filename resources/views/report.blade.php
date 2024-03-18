@extends('layout.master')
@section('title','Report | Dashboard Sales Performance & Racing Doors SKU')

@section('content')
<!--Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
            <div class="overflow-auto" >
                <div class="content-nav">
                <div class="d-sm-flex align-items-center justify-content-between mb-3">
                <h1 class="h3 mb-0 text-gray-800 mt-3 ml-4">Report</h1>
                </div>
                </div>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Content Row -->
                    <div class="row">
                    <div class="d-sm-flex align-items-center mb-4" >
                        <a href="{{ route('download.template') }}" style="margin-right: 20px;" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                        class="fas fa-download fa-sm text-white-50"></i> Download Template</a>
                        <a href="{{ route('import') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                        class="fas fa-upload fa-sm text-white-50"></i> File Upload</a>
                    </div>
    </div>
    <div class="container">
        <h2>Grafik Penjualan</h2>
        <!-- Tempatkan canvas untuk chart -->
        <canvas id="myChart" width="50" height="25"></canvas>
    </div>
    <script>
        // Data untuk chart (nama produk dan nominal)
        var namaProduk = {!! json_encode($namaProduk) !!};
        var nominal = {!! json_encode($nominal) !!};

        // Inisialisasi chart
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: namaProduk,
                datasets: [{
                    label: 'Nominal',
                    data: nominal,
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });

</script>
@endsection
