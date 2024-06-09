@extends('master')
@section('title')
    Home Page
@endsection

@section('body')
<section class="py-5 bg-secondary-subtle">
    <div class="container">
        <div class="row">
           @foreach($blogs as $blog)
            <div class="col-md-4">
                <div class="card">
                    <img src="{{asset($blog['image'])}}" alt="" height="250">
                    <div class="card-body">
                        <h2>{{$blog['title']}}</h2>
                        <h4>{{$blog['author']}}</h4>
                        <p>Short Description: {{$blog['short_description']}}</p>
                        <p>Long Description: {{$blog['long_description']}}</p>
                        <a href="{{route('detail',['id'=>$blog['id']])}}" class="btn btn-success">Read More</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>



</section>
@endsection
