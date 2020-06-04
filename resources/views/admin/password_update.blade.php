@extends('layouts.admin')
@section('content')

    <!-- Begin Page Content -->
    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-9 mx-auto">
                                @if(Session::has('success'))
                                    <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('success') }}</p>
                                @endif

                                @if(Session::has('failed'))
                                    <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('failed') }}</p>
                                @endif
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4 font-weight-bold ">Update Password</h1>
                                    </div>
                                    <form action="/admin/password/update" method="post">
                                        <div class="form-group row">
                                            <label for="inputEmail3" class="col-sm-3 col-form-label">Password</label>
                                            <div class="col-sm-9">
                                                <input type="password" class="form-control" id="inputEmail3" name="password" required>
                                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                <input type="hidden" name="id" value="{{$result->id}}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputPassword3" class="col-sm-3 col-form-label"></label>
                                            <div class="col-sm-9 pull-right">
                                                <button type="submit" class="btn btn-primary">Update</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
    <!-- /.container-fluid -->
@endsection
