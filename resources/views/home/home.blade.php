@extends('master')

@section('title')
    Home
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card card-body">
                        <form action="">
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label">Name</label>
                                <div class="col-md-8">
                                    <input type="text" name="name" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label">Email</label>
                                <div class="col-md-8">
                                    <input type="email" name="email" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label">Password</label>
                                <div class="col-md-8">
                                    <input type="password" name="password" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label"></label>
                                <div class="col-md-8">
                                    <input type="submit" name="" class="btn btn-success" value="Login">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


