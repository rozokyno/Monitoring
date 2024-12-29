@extends('layouts.app')

@section('title', 'Dashboard Monitoring')

@section('content')
<!-- Page Wrapper -->
<div id="wrapper">
    <!-- Sidebar -->
    @include('partials.sidebar')
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content">
            <!-- Topbar -->
            @include('partials.topbar')
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">
                <!-- Content Row -->
                <div class="row">
                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2 total-host">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            Total HOST
                                        </div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            4 Computer
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <img src="assets/icons/setting-svgrepo-com.svg" alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-success shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2 server-status">
                                        <div
                                            class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                            SERVER STATUS
                                        </div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            Connected
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <img src="assets/icons/server-svgrepo-com.svg" alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-warning shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2 total-users">
                                        <div
                                            class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                            TOTAL ADMIN
                                        </div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            1

                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <img
                                            src="assets/icons/users-svgrepo-com.svg"
                                            class="w-8"
                                            alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-warning shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                            SPEEDTEST
                                        </div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800 d-flex align-items-center">
                                            <button class="btn btn-sm btn-primary" onclick="startSpeedtest()">Run Test</button>
                                            <span id="speedtest-result" class="ml-2">Hasil di sini</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

                <!-- Content Row -->

                <div class="row">
                    <!-- Area Chart -->
                    <div class="col-xl-12 col-lg-12">
                        <div class="card shadow mb-4">
                            <div
                                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">
                                    Traffic Monitoring
                                </h6>
                                <select
                                    id="ipSelect"
                                    class="form-control"
                                    style="width: 200px">
                                    <!-- Dropdown untuk memilih IP -->
                                </select>
                            </div>
                            <div class="card-body">
                                <div
                                    class="chart-area"
                                    style="position: relative; height: 400px; width: 100%">
                                    <canvas
                                        id="trafficChart"
                                        style="width: 100%; height: 100%"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Content Row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        @include('partials.footer')
        <!-- End of Footer -->
    </div>
    <!-- End of Content Wrapper -->
</div>
<!-- End of Page Wrapper -->
@endsection
@push('scripts')
<script>
    const trafficData = [];
    const startTime = new Date("2024-12-24T00:00:00Z");
    // Logika Speedtest (Dummy - Generate Angka Acak)
    // Logika Speedtest (Dummy - Generate Angka Acak)
    function startSpeedtest() {
        // Referensi elemen hasil
        const resultElement = document.getElementById('speedtest-result');
        resultElement.textContent = "Sedang menghitung...";

        setTimeout(() => {
            // Generate angka acak antara 10 hingga 100 untuk kecepatan Mbps
            const speedInMbps = (Math.random() * (100 - 10) + 10).toFixed(2);
            resultElement.textContent = `${speedInMbps} Mbps`;
        }, 2000); // Simulasi waktu delay 2 detik
    }


    // Fungsi untuk menghasilkan data traffic secara dinamis dengan timestamp acak dalam 1 jam
    function generateRandomTrafficData(ip, count) {
        for (let i = 0; i < count; i++) {
            const randomTimestamp = new Date(
                startTime.getTime() + Math.random() * 60 * 60 * 1000 // Acak dalam 1 jam
            );
            trafficData.push({
                ip: ip,
                delay: parseFloat((Math.random() * 5 + 1).toFixed(2)),
                jitter: parseFloat((Math.random() * 2).toFixed(2)),
                timestamp: randomTimestamp.toISOString(),
            });
        }
    }

    // Generate data untuk 2 IP
    generateRandomTrafficData("192.168.1.1", 50);
    generateRandomTrafficData("192.168.1.2", 50);

    // Data Dinamis untuk Dashboard
    const dashboardData = {
        totalRouters: [...new Set(trafficData.map((item) => item.ip))].length,
        serverStatus: "Connected",
        totalUsers: 3, // Misalnya diambil dari API
    };

    // Fungsi untuk memperbarui elemen dashboard
    function updateDashboardInfo(data) {

    }

    // Fungsi untuk mengisi dropdown IP
    function populateIPDropdown(data) {
        const ips = [...new Set(data.map((item) => item.ip))]; // Ambil IP unik
        const ipSelect = document.getElementById("ipSelect");
        ipSelect.innerHTML = ips
            .map((ip) => `<option value="${ip}">${ip}</option>`)
            .join("");
    }

    // Fungsi untuk memperbarui grafik berdasarkan IP
    function updateChart(data, selectedIP) {
        const ctx = document.getElementById("trafficChart").getContext("2d");
        const filteredData = data.filter((item) => item.ip === selectedIP);
        const labels = filteredData.map((item) =>
            new Date(item.timestamp).toLocaleTimeString([], {
                hour: "2-digit",
                minute: "2-digit",
                second: "2-digit",
            })
        );
        const delays = filteredData.map((item) => item.delay);
        const jitters = filteredData.map((item) => item.jitter);

        // Hapus chart sebelumnya jika sudah ada
        if (
            window.trafficChart &&
            typeof window.trafficChart.destroy === "function"
        ) {
            window.trafficChart.destroy();
        }

        // Buat chart baru
        window.trafficChart = new Chart(ctx, {
            type: "line",
            data: {
                labels: labels,
                datasets: [{
                        label: "Delay (ms)",
                        data: delays,
                        borderColor: "rgba(78, 115, 223, 1)",
                        backgroundColor: "rgba(78, 115, 223, 0.1)",
                        fill: true,
                    },
                    {
                        label: "Jitter (ms)",
                        data: jitters,
                        borderColor: "rgba(28, 200, 138, 1)",
                        backgroundColor: "rgba(28, 200, 138, 0.1)",
                        fill: true,
                    },
                ],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    x: {
                        title: {
                            display: true,
                            text: "Time"
                        },
                        ticks: {
                            autoSkip: true,
                            maxTicksLimit: 10,
                        },
                    },
                    y: {
                        title: {
                            display: true,
                            text: "Value (ms)"
                        }
                    },
                },
                plugins: {
                    tooltip: {
                        enabled: true,
                        callbacks: {
                            title: (tooltipItems) => {
                                const index = tooltipItems[0].dataIndex;
                                const fullDate = new Date(filteredData[index].timestamp);
                                return fullDate.toLocaleString([], {
                                    year: "numeric",
                                    month: "2-digit",
                                    day: "2-digit",
                                    hour: "2-digit",
                                    minute: "2-digit",
                                    second: "2-digit",
                                });
                            },
                            label: (tooltipItem) => {
                                const index = tooltipItem.dataIndex;
                                const delay = filteredData[index].delay;
                                const jitter = filteredData[index].jitter;
                                return [`Delay: ${delay} ms`, `Jitter: ${jitter} ms`];
                            },
                        },
                    },
                },
            },
        });
    }

    // Event listener untuk perubahan dropdown IP
    document
        .getElementById("ipSelect")
        .addEventListener("change", (event) => {
            updateChart(trafficData, event.target.value);
        });


    // Inisialisasi
    populateIPDropdown(trafficData);
    updateDashboardInfo(dashboardData);
    updateChart(trafficData, trafficData[0].ip); // Default tampilkan data IP pertama
</script>
@endpush