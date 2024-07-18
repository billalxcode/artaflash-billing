@extends('layout.admin.app')

@section('app')
<div class="page-wrapper">
    <!-- Page header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        Router
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <!-- Page body -->
    <div class="page-body">
        <div class="container-xl">
            <div class="row gap-3">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex gap-3">
                                <button class="btn btn-primary btn-md"><i class="fa fa-plus"></i>Tambah Data</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div id="table-default" class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Koneksi</th>
                                            <th>Nama</th>
                                            <th>IP</th>
                                            <th>Username</th>
                                            <th>Password</th>
                                            <th>Description</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-body">
                                        <tr>
                                            <td>
                                                <span class="badge bg-success text-white">CONNECTED</span>
                                            </td>
                                            <td>
                                                Router 1
                                            </td>
                                            <td>
                                                192.168.0.2
                                            </td>
                                            <td>
                                                user
                                            </td>
                                            <td>
                                                password
                                            </td>
                                            <td>
                                                Router - Lokasi
                                            </td>
                                            <td>
                                                <span class="badge bg-success text-white">ACTIVE</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="badge bg-danger text-white">DISCONNECTED</span>
                                            </td>
                                            <td>
                                                Router 2
                                            </td>
                                            <td>
                                                192.168.1.2
                                            </td>
                                            <td>
                                                user2
                                            </td>
                                            <td>
                                                password
                                            </td>
                                            <td>
                                                Router 2 - Lokasi
                                            </td>
                                            <td>
                                                <span class="badge bg-danger text-white">INACTIVE</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layout.admin.footer')
</div>
@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        $('.table').DataTable()
    })
</script>
@endpush