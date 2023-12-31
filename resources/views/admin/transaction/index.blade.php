@extends('layout.base')

@section('title-head')
    <title>
        Activity | Logger Web App
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
                        <li class="breadcrumb-item active" aria-current="page">Logger</li>
                    </ol>
                </nav>
                <h1 class="mb-0 fw-bold">Activity </h1>
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
                            <h4 class="card-title">Logger Activity</h4>
                        </div>
                        <div class="ms-auto">
                            <div class="dl">
                                <select class="form-select shadow-none">
                                    <option value="0" selected>Monthly</option>
                                    <option value="1">Daily</option>
                                    <option value="2">Weekly</option>
                                    <option value="3">Yearly</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- title -->
                    <div class="table-responsive">
                        <table class="table mb-0 table-hover align-middle text-nowrap">
                            <thead>
                                <tr>
                                    <th class="border-top-0 text-center">No.</th>
                                    <th class="border-top-0 text-center">Device/Tools Number</th>
                                    <th class="border-top-0 text-center">Device Name</th>
                                    <th class="border-top-0 text-center">Installation Date</th>
                                    <th class="border-top-0 text-center">Last Activity</th>
                                    <th class="border-top-0 text-center">Status</th>
                                    <th class="border-top-0 text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">1</td>
                                    <td class="text-center">DHKJ001</td>
                                    <td class="text-center">Conveyor Belt</td>
                                    <td class="text-center">10/10/2021</td>
                                    <td class="text-center">12/12/2023</td>
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
