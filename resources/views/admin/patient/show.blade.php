@extends('layouts.admin')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Patient List Table</h1>
    {{-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>
--}}
    <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Patient List</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>District</th>
                            <th>Upazila</th>
                            <th>Result</th>
                            <th>Details</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            @php($i=1)
                            @foreach($result as $res)

                                <td>{{$i++}}</td>
                                <td>{{$res->name}}</td>
                                <td>{{$res->email}}</td>
                                <td>{{$res->phone}}</td>
                                <td>{{$res->district}}</td>
                                <td>{{$res->upazila}}</td>
                                <td>
                                    <?php

                                    $score = getScore($res->patient_id);


                                    ?>
                                    @if($score >50)
                                        <span class="badge badge-pill badge-danger">অত্যধিক ঝুঁকি</span>
                                    @elseif($score >40)
                                        <span class="badge badge-pill badge-info">মধ্যম ঝুঁকি</span>
                                    @else
                                        <span class="badge badge-pill badge-success">কম ঝুঁকি</span>

                                    @endif
                                </td>
                                <td><a href="/admin/patient/details/{{$res->patient_id}}"> Details</a></td>

                        </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection
