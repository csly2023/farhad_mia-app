@extends('master')
@section('title')
    Series Page
@endsection

@section('body')
    <section class="py-5 bg-secondary-subtle">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            Series
                        </div>
                        <div class="card-body">
                            <form action="{{route('series-calculate')}}" method="post">
                                @csrf
                                <div class="row mb-3">
                                    <label class="col-md-3">First Number</label>
                                    <div class="col-md-9">
                                        <input type="number" class="form-control" name="first_number"/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3">Second Number</label>
                                    <div class="col-md-9">
                                        <input type="number" class="form-control" name="second_number"/>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label class="col-md-3">Result</label>
                                    <div class="col-md-9">
                                        <textarea name="" id="" cols="30" rows="10">{{session('message')}}</textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-success" value="Make Series"/>
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
