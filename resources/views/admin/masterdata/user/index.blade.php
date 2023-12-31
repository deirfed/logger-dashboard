@extends('layout.base')

@section('title-head')
    <title>
        Management User | Logger Web App
    </title>
@endsection

@section('path')
    <div class="page-breadcrumb">
        <div class="row align-items-center">
            <div class="col-6">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 d-flex align-items-center">
                        <li class="breadcrumb-item"><a href="{{ route('device.index') }}" class="link"><i
                                    class="mdi mdi-home-outline fs-4"></i></a></li>
                        <li class="breadcrumb-item active" aria-current="page">User Management</li>
                    </ol>
                </nav>
                <h1 class="mb-0 fw-bold">User Management </h1>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="row">
        <!-- column -->
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <!-- title -->
                    <div class="d-md-flex">
                        <div>
                            <h4 class="card-title">Management User</h4>
                        </div>
                    </div>
                    <div class="mt-1 mb-1">
                        <a href="{{ route('management-user.create') }}"><button class="btn btn-primary">Tambah Data User</button></a>
                    </div>
                    <!-- title -->
                    <div class="table-responsive">
                        <table class="table mb-0 table-hover align-middle text-nowrap">
                            <thead>
                                <tr>
                                    <th class="border-top-0 text-center">No.</th>
                                    <th class="border-top-0 text-center">Name</th>
                                    <th class="border-top-0 text-center">Position</th>
                                    <th class="border-top-0 text-center">Role</th>
                                    <th class="border-top-0 text-center">Departement</th>
                                    <th class="border-top-0 text-center">Status</th>
                                    <th class="border-top-0 text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">1</td>
                                    <td class="text-center">Malinda Halvabeti</td>
                                    <td class="text-center">Guru IPA</td>
                                    <td class="text-center">Admin</td>
                                    <td class="text-center">Dept. Purchasing</td>
                                    <td class=" text-center">
                                        <label class="badge bg-success">Active</label>
                                    </td>
                                    <td class="text-center">
                                        <button class="badge bg-warning" style="border: none"><span>Edit</span></button>
                                        <button class="badge bg-success" style="border: none" data-toggle="modal" data-target="#detail-device"><span>Detail</span></button>
                                        <button class="badge bg-danger" style="border: none"><span>Delete</span></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
