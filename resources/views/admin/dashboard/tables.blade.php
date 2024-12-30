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
                    <th>#</th>
                    <th>Nama Perangkat</th>
                    <th>Alamat IP</th>
                    <th>Alamat MAC</th>
                    <th>Status</th>
                    <th>Waktu Terhubung</th>
                    <th>Durasi Koneksi</th>
                    <th>Bandwidth Digunakan</th>
                    <th>Pengguna</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse($computers as $computer)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $computer->nama ?? 'Tidak diketahui' }}</td>
                    <td>{{ $computer->ip ?? 'Tidak tersedia' }}</td>
                    <td>{{ $computer->mac ?? 'Tidak tersedia' }}</td>
                    <td>
                      <span class="badge bg-{{ $computer->status == 'online' ? 'success' : 'danger' }}">
                        {{ ucfirst($computer->status) }}
                      </span>
                    </td>
                    <td>{{ $computer->waktu_terhubung ? \Carbon\Carbon::parse($computer->waktu_terhubung)->format('d-m-Y H:i:s') : '-' }}</td>
                    <td>
                      @if($computer->waktu_terhubung)
                      @php
                      $connectedTime = \Carbon\Carbon::parse($computer->waktu_terhubung);
                      $now = \Carbon\Carbon::now();
                      $diffInMinutes = $connectedTime->diffInMinutes($now);
                      @endphp
                      @if($diffInMinutes < 60)
                        {{ $diffInMinutes }} menit
                        @else
                        {{ round($diffInMinutes / 60, 1) }} jam
                        @endif
                        @else
                        -
                        @endif
                        </td>
                    <td>{{ $computer->bandwidth ? number_format($computer->bandwidth / (1024 * 1024), 2) . ' MB' : '-' }}</td>
                    <td>{{ $computer->pengguna ?? '-' }}</td>
                  </tr>
                  @empty
                  <tr>
                    <td colspan="11" class="text-center">Tidak ada perangkat yang terhubung.</td>
                  </tr>
                  @endforelse
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