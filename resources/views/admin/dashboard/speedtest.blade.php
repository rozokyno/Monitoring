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
    <div class="card sadhow " >
    <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                Speedtest
                </h6>
              </div>
        <div class="card-body text-center">
            <button class="btn center btn-primary rounded-circle" style="width: 300px; height: 300px; font-size: 24px; " onclick="startSpeedTest()">GO</button>
            <div class="progress mt-3" style="height: 20px;">
                <div id="speed-bar" class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <p class="card-text mt-2" id="result">Click the button to test your speed.</p>
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

            const simulatedSpeed = Math.random() * 100; 

            speedBar.style.width = simulatedSpeed + '%';
            speedBar.setAttribute('aria-valuenow', simulatedSpeed.toFixed(0));
            result.textContent = `Your speed is ${simulatedSpeed.toFixed(2)} Mbps.`;
        }
    </script>
@endpush