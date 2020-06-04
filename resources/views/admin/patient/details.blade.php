@extends('layouts.admin')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-6">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Patient Deatils</h6>
                    </div>
                    <div class="card-body">
                        <strong>Employee Id:</strong> {{$patient->employee_id}}<br>
                        <strong>Dealer Id:</strong> {{$patient->dealer_id}}<br>
                        <strong>Name:</strong> {{$patient->name}}<br>
                        <strong>Email:</strong> {{$patient->email}}<br>
                        <strong>Phone:</strong> {{$patient->phone}}<br>
                        <strong>District:</strong> {{$patient->district}}<br>
                        <strong>Upazila:</strong> {{$patient->upazila}}<br>
                        <strong>Area:</strong> {{$patient->area}}<br>

                    </div>
                </div>
            </div>
            <div class="col-md-12">

                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Patient Test Details</h6>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"
                               style="width: 100%;">
                            <thead>
                            <tr>
                                <th>Date</th>
                                <th>Temperature</th>
                                <th>Symptom</th>
                                <th>Extra symptom</th>
                                <th>Travel History</th>
                                <th>Pre-Disease</th>
                                <th>Smoker</th>
                                <th>Nurse</th>
                                <th>Symptom Change</th>
                                <th>Result</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>

                                @php($i=1)
                                @foreach($results as $res)
                                    <td>{{$res->created_at}}</td>
                                    <td>{{gettingTemperatureIdtoValue($res->temperature)}}

                                    </td>
                                    <td>

                                        <?php
                                        $items = json_decode($res->symptom);
                                        if ($items!=null) {
                                            foreach ($items as $item) {
                                                echo gettingSympTomIdtoValue($item);
                                                echo ", <br>";

                                            }
                                        }

                                        ?>

                                    </td>
                                    <td>
                                        <?php
                                        $items = json_decode($res->extra_symptom);
                                        if ($items!=null) {
                                            foreach ($items as $item) {
                                                echo gettingExtraSympTomIdtoValue($item);
                                                echo "<br>";
                                            }
                                        }

                                        ?>

                                    </td>
                                    <td>{{gettingDiseaseIdtoValue($res->disease)}}</td>
                                    <td>
                                        <?php
                                        $items = json_decode($res->pre_disease);
                                        if ($items!=null) {
                                            foreach ($items as $item) {
                                                echo gettingPreDiseaseIdtoValue($item);
                                                echo "<br>";
                                            }
                                        }

                                        ?>

                                    </td>
                                    <td>{{$res->is_smoker}}</td>
                                    <td>{{$res->is_nurse}}</td>
                                    <td>{{gettingSympTomChangeIdtoValue($res->symptom_change)}}</td>
                                    <td>
                                        <?php
                                        $score = $res->score
                                        ?>
                                        @if($score >50)
                                            <span class="badge badge-pill badge-danger">অত্যধিক ঝুঁকি</span>
                                        @elseif($score >40)
                                            <span class="badge badge-pill badge-info">মধ্যম ঝুঁকি</span>
                                        @else
                                            <span class="badge badge-pill badge-success">কম ঝুঁকি</span>

                                        @endif

                                    </td>



                            </tr>
                            @endforeach

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>


    </div>
    <!-- /.container-fluid -->
@endsection
