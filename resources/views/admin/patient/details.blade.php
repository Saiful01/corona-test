@extends('layouts.admin')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Patient Details</h1>
       {{-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>
--}}
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Patient Details</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Age</th>
                            <th>Gender</th>
                            <th>Temperature</th>
                            <th>Symptom</th>
                            <th>Extra symptom</th>
                            <th>Disease</th>
                            <th> Pre Disease</th>
                            <th> Pre Disease</th>
                            <th> Is Smoker</th>
                            <th> IS Nurse</th>
                            <th> Symptom Change</th>
                            <th> Result</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            @php($i=1)
                            @foreach($results as $res)

                                <td>{{$i++}}</td>
                                <td>{{$res->name}}</td>
                                <td>{{$res->age}}</td>
                                <td>{{$res->gender}}</td>
                                <td>{{$res->temperature}}</td>
                                <td>{{$res->symptom}}</td>
                                <td>{{$res->extra_symptom}}</td>
                                <td>{{$res->disease}}</td>
                                <td>{{$res->pre_disease}}</td>
                                <td>{{$res->is_smoker}}</td>
                                <td>{{$res->is_nurse}}</td>
                                <td>{{$res->symptom_change}}</td>
                                <td>{{$res->score}}</td>



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
