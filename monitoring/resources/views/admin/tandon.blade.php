@extends('layouts.admin')
@section('title', 'Dashboard - Admin')

@section('content')
<!-- Start content -->
<div class="content">
    <div class="container-fluid">
        <div class="page-title-box">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <h4 class="page-title">Master Tandon</h4>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Monitoring</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end page-title -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card m-b-30">
                    <div class="card-body">

                        <h4 class="mt-0 header-title">Tambah Tandon</h4>
                        <p class="sub-title">Tambahkan rincian tandon</p>

                        <form action="{{url('tandon')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" name="nama" class="form-control" required placeholder="Masukkan nama untuk tandon anda"/>
                            </div>

                            <div class="form-group">
                                <label>Status</label>
                                <select name="status" class="form-control">
                                    <option value="1">ACTIVE</option>
                                    <option value="2">NOT ACTIVE</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Deskripsi</label>
                                <div>
                                    <textarea required name="deskripsi" class="form-control" rows="5" placeholder="Deskripsi singkat"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <div>
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">
                                        Submit
                                    </button>
                                    <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                                        Cancel
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div> <!-- end col -->
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card m-b-30">
                    <div class="card-body">

                        <h4 class="mt-0 header-title">Master Tandon</h4>
                        <p class="sub-title../plugins">List Tandon.
                        </p>

                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Status</th>
                                <th>Deskripsi</th>
                                <th>Created At</th>
                            </tr>
                            </thead>


                            <tbody>
                            @foreach ($tandons as $tandon)
                            <tr>
                                <td>{{$tandon->nama}}</td>
                                <td>{{$tandon->status}}</td>
                                <td>{{$tandon->deskripsi}}</td>
                                <td>{{$tandon->created_at}}</td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div> <!-- end col -->
        </div>
        <!-- END ROW -->

    </div>
    <!-- container-fluid -->

</div>
<!-- content -->
@stop
