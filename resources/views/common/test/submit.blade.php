@extends('layouts.default')

@section('title', 'Page Title')

@section('content')

    <!-- symptoms-section -->
    <section class="symptoms-section" id="symptoms">
        <div class="auto-container">


            <div class="row">

                <div class="col-md-7 mx-auto">


                    <div class="card">
                        <div class="card-body">
                            <p>আপনার ঝুঁকি টেস্ট সম্পর্ন হয়েছে। ফলাফল দেখতে নিচের ফর্মটি পুরন করুন। ধন্যবাদ</p>
                            <p>আপনার তথ্যগুলো যথাযথ কর্তৃপক্ষের কাছে জানানোর জন্য নিচের ফরমটি পূরণ করে সাবমিট বাটনে
                                ক্লিক করুন।
                                আপনার সকল তথ্য গোপন রাখা হবে।</p>

                        </div>
                    </div>
                    <br>

                    <div class="card">
                        <div class="card-body">
                            <form action="/submit/save" method="post">
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">নাম</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputEmail3" placeholder="নাম">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">ইমেইল</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="inputEmail3" placeholder="ইমেইল">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">মোবাইল নম্বর</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputPassword3"
                                               placeholder="মোবাইল নম্বর">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">জেলা</label>
                                    <div class="col-sm-10">
                                        <select id="inputState" class="form-control">
                                            <option selected>ঢাকা</option>
                                            <option selected>চট্টগ্রাম</option>

                                        </select>

                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">উপজেলা</label>
                                    <div class="col-sm-10">
                                        <select id="inputState" class="form-control">
                                            <option selected>ঢাকা</option>
                                            <option selected>চট্টগ্রাম</option>

                                        </select>

                                    </div>
                                </div>


                                <div class="form-group row">
                                    <div class="col-sm-10 pull-right">
                                        <a href="/answer" class="btn btn-success">সাবমিট</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </section>
@endsection
