@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header row justify-content-between">
                        <div><a href="">{{ $post->title }}</a></div>
                    </div>
                    <div class="card-body">

                        <div>
                            <p>{{ $post->content }}</p>
                            <div>
                                <a href="">Edit</a>
                                <a href="">Delete</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
