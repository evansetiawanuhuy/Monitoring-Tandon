@extends('layouts.admin')
@section('title', 'Dashboard - Admin')

@section('content')
<!-- Start content -->
<div class="content">
    <div class="container-fluid">
        <div class="page-title-box">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <h4 class="page-title">Dashboard</h4>
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
            <div class="col-12">
                <div class="card m-b-30">
                    <div class="card-body">

                        <h4 class="mt-0 header-title">Data Log</h4>
                        <p class="sub-title../plugins">Log Tandon.
                        </p>

                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>ID Tandon</th>
                                <th>Nama Sensor</th>
                                <th>Distance</th>
                                <th>Created At</th>
                            </tr>
                            </thead>


                            <tbody>
                            @foreach ($logTandons as $logTandon)
                            <tr>
                                <td>{{$logTandon->id_tandon}}</td>
                                <td>{{$logTandon->nama_sensor}}</td>
                                <td>{{$logTandon->distance}}</td>
                                <td>{{$logTandon->created_at}}</td>
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
