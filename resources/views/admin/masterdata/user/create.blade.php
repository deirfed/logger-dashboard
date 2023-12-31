@extends('layout.base')

@section('title-head')
    <title>
        Add New User | Logger Web App
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
                        <li class="breadcrumb-item active" aria-current="page">User Management</li>
                        <li class="breadcrumb-item active" aria-current="page">Add New User</li>
                    </ol>
                </nav>
                <h1 class="mb-0 fw-bold"> Add New User</h1>
            </div>
        </div>
    </div>
@endsection

@section('content')
<form>
    <div class="form-row">
      <div class="form-group col-md-12">
        <label for="code">Name</label>
        <input type="text" class="form-control" id="name" placeholder="Name">
      </div>
      <div class="form-group col-md-12">
        <label for="name">Position</label>
        <input type="text" class="form-control" id="position" placeholder="Manager">
      </div>
    </div>
    <div class="form-group col-md-4">
        <label for="status">Role</label>
        <select id="status" class="form-control">
          <option selected>Pilih Role</option>
          <option>Admin</option>
          <option>User</option>
          <option>Guest</option>
        </select>
      </div>
    <div class="form-group col-md-4">
        <label for="status">Departement</label>
        <select id="status" class="form-control">
          <option selected>Pilih Departement</option>
          <option>Departement A</option>
          <option>Departement B</option>
          <option>Departement C</option>
        </select>
      </div>
    <button type="submit" class="btn btn-primary">Tambah Data</button>
  </form>
@endsection
