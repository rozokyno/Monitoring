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
      <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Data IP Computer LAB</h1>
        <p class="mb-4">

        </p>

        <!-- Status IP Computer -->
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
              Status IP Computer
            </h6>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table
                class="table table-bordered"
                id="chartDataTable"
                width="100%"
                cellspacing="0">
                <thead>
                  <tr>
                    <th>IP</th>
                    <th>Delay (ms)</th>
                    <th>Status</th>
                    <th>Timestamp</th>
                    <th>Bandwidth</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>192.168.1.12</td>
                    <td>4.32</td>
                    <td>Normal</td>
                    <td>2024-12-24 00:05:12</td>
                    <td>50 Mbps</td>
                  </tr>
                  <tr>
                    <td>192.168.1.15</td>
                    <td>3.76</td>
                    <td>Normal</td>
                    <td>2024-12-24 00:12:45</td>
                    <td>48 Mbps</td>
                  </tr>
                  <tr>
                    <td>192.168.1.24</td>
                    <td>5.02</td>
                    <td>Loss</td>
                    <td>2024-12-24 00:18:20</td>
                    <td>30 Mbps</td>
                  </tr>
                  <tr>
                    <td>192.168.1.26</td>
                    <td>2.95</td>
                    <td>Normal</td>
                    <td>2024-12-24 00:32:10</td>
                    <td>55 Mbps</td>
                  </tr>
                </tbody>

              </table>
            </div>
          </div>
        </div>
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