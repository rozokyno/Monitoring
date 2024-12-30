@extends('layouts.app')

@section('title', 'Speedtest')

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

            <div class="container-fluid">
                <div class="card shadow">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">
                            Speedtest
                        </h6>
                    </div>
                    <div class="card-body text-center">
                        <!-- <button class="btn center btn-primary rounded-circle" style="width: 300px; height: 300px; font-size: 24px;" onclick="startSpeedTest()">GO</button>
                        <div class="progress mt-3" style="height: 20px;">
                            <div id="speed-bar" class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="mt-3">
                            <p id="download-speed" class="text-primary font-weight-bold">Download: - Mbps</p>
                            <p id="upload-speed" class="text-success font-weight-bold">Upload: - Mbps</p>
                            <p id="ping-result" class="text-warning font-weight-bold">Ping: - ms</p>
   
                        </div> -->
                        <!--OST Widget code start-->
                        <div style="text-align:right; background-color: white; padding: 20px; border-radius: 10px;">
                            <div style="min-height:360px;">
                                <div style="width:100%;height:0;padding-bottom:50%;position:relative;">
                                    <iframe style="border:none;position:absolute;top:0;left:0;width:100%;height:100%;min-height:360px;border:none;overflow:hidden !important;"
                                        src="//openspeedtest.com/speedtest"></iframe>
                                </div>
                            </div>
                            <p class="card-text text-center mt-2" id="result">Click the button to test your speed.</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection

    @push('scripts')
    <script>
        function startSpeedTest() {
            const speedBar = document.getElementById('speed-bar');
            const result = document.getElementById('result');
            const downloadSpeed = document.getElementById('download-speed');
            const uploadSpeed = document.getElementById('upload-speed');
            const pingElement = document.getElementById('ping-result');

            result.textContent = "Testing your internet speed...";
            downloadSpeed.textContent = "Download: Calculating...";
            pingElement.textContent = "Ping: Calculating...";
            uploadSpeed.textContent = "Upload: Calculating...";


            setTimeout(() => {
                const ping = (Math.random() * (100 - 10) + 10).toFixed(0);
                const simulatedDownloadSpeed = (Math.random() * (100 - 10) + 10).toFixed(2);
                const simulatedUploadSpeed = (Math.random() * (50 - 5) + 5).toFixed(2);

                speedBar.style.width = simulatedDownloadSpeed + '%';
                speedBar.setAttribute('aria-valuenow', simulatedDownloadSpeed);
                downloadSpeed.textContent = `Download: ${simulatedDownloadSpeed} Mbps`;
                uploadSpeed.textContent = `Upload: ${simulatedUploadSpeed} Mbps`;
                pingElement.textContent = `Ping: ${ping} ms`;
                result.textContent = "Speedtest completed.";
            }, 3000);
        }
    </script>
    @endpush