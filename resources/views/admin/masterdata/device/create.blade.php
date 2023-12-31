@extends('layout.base')

@section('title-head')
    <title>
        Add Device List | Logger Web App
    </title>
@endsection

@section('path')
    <div class="page-breadcrumb">
        <div class="row align-items-center">
            <div class="col-6">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 d-flex align-items-center">
                        <li class="breadcrumb-item"><a href="{{ route('device.create') }}" class="link"><i
                                    class="mdi mdi-home-outline fs-4"></i></a></li>
                        <li class="breadcrumb-item active" aria-current="page">Device</li>
                        <li class="breadcrumb-item active" aria-current="page">Add Device</li>
                    </ol>
                </nav>
                <h1 class="mb-0 fw-bold"> Add Device</h1>
            </div>
        </div>
    </div>
@endsection

@section('content')
<form>
    <div class="form-row">
      <div class="form-group col-md-12">
        <label for="code">Device Code/Number</label>
        <input type="text" class="form-control" id="code" placeholder="Device Code">
      </div>
      <div class="form-group col-md-12">
        <label for="name">Device Name</label>
        <input type="text" class="form-control" id="name" placeholder="Conveyor Belt Building A">
      </div>
    </div>
    <div class="form-group">
      <label for="install_date">Installation Date</label>
      <input type="date" class="form-control" id="inputAddress" placeholder="12">
    </div>
    <div class="form-group col-md-4">
        <label for="status">Status</label>
        <select id="status" class="form-control">
          <option selected>Pilih Status</option>
          <option>Activated</option>
          <option>Pending</option>
          <option>On Maintenance</option>
        </select>
      </div>
    <button type="submit" class="btn btn-primary">Tambah Data</button>
  </form>
@endsection
