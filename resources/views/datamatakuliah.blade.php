@extends('layout.master')
@section('content')
@include('layout.sidebar')
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Mata Kuliah</h1>
            <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
            <i class="far fa-file-excel"></i> Export to Excel
            </button>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <form class="form-inline ml-3">
                <div class="input-group input-group-sm">
                  <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                  <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit">
                      <i class="fas fa-search"></i>
                    </button>
                  </div>
                </div>
              </form>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Kode Mata Kuliah</th>
                  <th>Nama Mata Kuliah</th>
                  <th>Jenis</th>
                  <th>Singkatan</th>
                  <th>Kurikulum</th>
                  <th>SKS</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 4.0
                  </td>
                  <td>Win 95+</td>
                  <td>Win 95+</td>
                  <td>Win 95+</td>
                  <td>Win 95+</td>
                </tr>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          @endsection