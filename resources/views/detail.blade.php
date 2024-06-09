@extends('master')
@section('title')
    Home Page
@endsection

@section('body')
    <section class="py-5 bg-secondary-subtle">
        <div class="container">
            <div class="row">
                <div class="col-md-6 justify-content-center">
                    <div class="card card-body">
                        <img src="{{asset($blog['image'])}}" alt="" height="250">
                    </div>
                </div>

                <div class="col-md-6 justify-content-center">
                    <div class="card card-body">
                        <h2>{{$blog['title']}}</h2>
                        <h4>{{$blog['author']}}</h4>
                        <p>Short Description: {{$blog['short_description']}}</p>
                        <p>Long Descripton: {{$blog['long_description']}}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
