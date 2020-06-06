@extends('layouts.default')

@section('title', 'Pre Test')

@section('content')


    <div class="col-md-8 mx-auto">
        <div class="container">
            <div class="card p-4">

                <p>আপনার বর্তমান অবস্থা নির্বাচন করুন</p>


                <form action="/pre-test/go" method="get">
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-3 col-form-label">বর্তমান অবস্থা</label>
                        <div class="col-sm-9">
                            <select id="inputState" class="form-control" name="status">

                                <option value="1">পরীক্ষা করতে হবে</option>
                                <option value="Confirmed">করোনা নিশ্চিত হয়েছে</option>
                                <option value="Isolation">আইসোলেশন আছেন</option>
                                <option value="Hospitalize">হাসপাতালে আছেন</option>
                            </select>
                        </div>

                    </div>

                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-3 col-form-label"></label>
                        <div class="col-sm-9 pull-right">
                            <button type="submit" class="btn btn-primary">পরের ধাপে যান</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>


    </div>

@endsection