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

            <div class="col-sm-6 col-xl-3">
                <div class="card">
                    <div class="card-heading p-4">
                        <div class="mini-stat-icon float-right">
                            <i class="mdi mdi-shield-outline bg-primary  text-white"></i>
                        </div>
                        <div>
                            <h5 class="font-16">Jumlah Tandon</h5>
                        </div>
                        <h3 class="mt-4">{{$count_tandons}}</h3>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-xl-3">
                <div class="card">
                    <div class="card-heading p-4">
                        <div class="mini-stat-icon float-right">
                            <i class="mdi mdi-account-multiple-outline bg-success text-white"></i>
                        </div>
                        <div>
                            <h5 class="font-16">Jumlah User</h5>
                        </div>
                        <h3 class="mt-4">{{$count_users}}</h3>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-xl-3">
                <div class="card">
                    <div class="card-heading p-4">
                        <div class="mini-stat-icon float-right">
                            <i class="mdi mdi-shield-plus-outline bg-warning text-white"></i>
                        </div>
                        <div>
                            <h5 class="font-16">Tandon Aktif</h5>
                        </div>
                        <h3 class="mt-4">{{$count_tandon_active}}</h3>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-xl-3">
                <div class="card">
                    <div class="card-heading p-4">
                        <div class="mini-stat-icon float-right">
                            <i class="mdi mdi-shield-remove-outline bg-danger text-white"></i>
                        </div>
                        <div>
                            <h5 class="font-16">Tandon Mati</h5>
                        </div>
                        <h3 class="mt-4">{{$count_tandon_nonactive}}</h3>
                    </div>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-xl-12">
                <div class="card m-b-30">
                    <div class="card-body">

                        <h4 class="mt-0 header-title">Log Tandon</h4>
                        <p class="sub-title d-inline-block text-truncate w-100">
                            Log tandon dalam 24 jam.
                            <br>Satuan dalam centimeter (cm).
                        </p>

                        <ul class="list-inline widget-chart m-t-20 m-b-15 text-center">
                            <li class="list-inline-item">
                                <h5>Tandon 1</h5>
                                <p class="text-muted">Warna Biru</p>
                            </li>
                            <li class="list-inline-item">
                                <h5>Tandon 2</h5>
                                <p class="text-muted">Warna Hijau</p>
                            </li>
                            <li class="list-inline-item">
                                <h5>Tandon 3</h5>
                                <p class="text-muted">Warna Kuning</p>
                            </li>
                        </ul>

                        <div id="simple-line-chart" class="ct-chart ct-golden-section"></div>

                    </div>
                </div>
            </div>



            {{-- <div class="col-xl-12">
                <div class="card m-b-30">
                    <div class="card-body">

                        <h4 class="mt-0 header-title mb-4">Recent Activity</h4>
                        <ol class="activity-feed mb-0">
                            <li class="feed-item">
                                <div class="feed-item-list">
                                    <p class="text-muted mb-1">Now</p>
                                    <p class="font-15 mt-0 mb-0">Andrei Coman magna sed porta finibus, risus posted a new article: <b class="text-primary">Forget UX Rowland</b></p>
                                </div>
                            </li>
                            <li class="feed-item">
                                <p class="text-muted mb-1">Yesterday</p>
                                <p class="font-15 mt-0 mb-0">Andrei Coman posted a new article: <b class="text-primary">Designer Alex</b></p>
                            </li>
                            <li class="feed-item">
                                <p class="text-muted mb-1">2:30PM</p>
                                <p class="font-15 mt-0 mb-0">Zack Wetass, sed porta finibus, risus  Chris Wallace Commented <b class="text-primary"> Developer Moreno</b></p>
                            </li>
                            <li class="feed-item pb-1">
                                <p class="text-muted mb-1">12:48 PM</p>
                                <p class="font-15 mt-0 mb-2">Zack Wetass, Chris Wallace Commented <b class="text-primary">UX Murphy</b></p>
                            </li>

                        </ol>

                    </div>
                </div>
            </div> --}}
        </div>

        <!-- START ROW -->
        {{-- <div class="row">
            <div class="col-xl-12">
                <div class="card m-b-30">
                    <div class="card-body">
                        <h4 class="mt-0 header-title mb-4">Active Deals</h4>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Amount</th>
                                        <th scope="col">Contact</th>
                                        <th scope="col">Location</th>
                                        <th scope="col" colspan="2">Date</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Philip Smead</td>
                                        <td><span class="badge badge-success">Delivered</span></td>
                                        <td>$9,420,000</td>
                                        <td>
                                            <div>
                                                <img src="{{asset('stexo/dark/assets/images/users/user-2.jpg')}}" alt="" class="thumb-md rounded-circle mr-2"> Philip Smead
                                            </div>
                                        </td>
                                        <td>Houston, TX 77074</td>
                                        <td>15/1/2018</td>

                                        <td>
                                            <div>
                                                <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Brent Shipley</td>
                                        <td><span class="badge badge-warning">Pending</span></td>
                                        <td>$3,120,000</td>
                                        <td>
                                            <div>
                                                <img src="{{asset('stexo/dark/assets/images/users/user-3.jpg')}}" alt="" class="thumb-md rounded-circle mr-2"> Brent Shipley
                                            </div>
                                        </td>
                                        <td>Oakland, CA 94612</td>
                                        <td>16/1/2019</td>

                                        <td>
                                            <div>
                                                <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Robert Sitton</td>
                                        <td><span class="badge badge-success">Delivered</span></td>
                                        <td>$6,360,000</td>
                                        <td>
                                            <div>
                                                <img src="{{asset('stexo/dark/assets/images/users/user-4.jpg')}}" alt="" class="thumb-md rounded-circle mr-2"> Robert Sitton
                                            </div>
                                        </td>
                                        <td>Hebron, ME 04238</td>
                                        <td>17/1/2019</td>

                                        <td>
                                            <div>
                                                <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Alberto Jackson</td>
                                        <td><span class="badge badge-danger">Cancel</span></td>
                                        <td>$5,200,000</td>
                                        <td>
                                            <div>
                                                <img src="{{asset('stexo/dark/assets/images/users/user-5.jpg')}}" alt="" class="thumb-md rounded-circle mr-2"> Alberto Jackson
                                            </div>
                                        </td>
                                        <td>Salinas, CA 93901</td>
                                        <td>18/1/2019</td>

                                        <td>
                                            <div>
                                                <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>David Sanchez</td>
                                        <td><span class="badge badge-success">Delivered</span></td>
                                        <td>$7,250,000</td>
                                        <td>
                                            <div>
                                                <img src="{{asset('stexo/dark/assets/images/users/user-6.jpg')}}" alt="" class="thumb-md rounded-circle mr-2"> David Sanchez
                                            </div>
                                        </td>
                                        <td>Cincinnati, OH 45202</td>
                                        <td>19/1/2019</td>

                                        <td>
                                            <div>
                                                <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>

        </div> --}}
        <!-- END ROW -->

    </div>
    <!-- container-fluid -->

</div>
<!-- content -->
@stop
