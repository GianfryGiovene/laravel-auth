@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header row justify-content-between">
                        <div>{{ __('Posts') }}</div>
                        <div><a href="">Create</a></div>
                    </div>
                    <div class="card-body">
                        @foreach ($posts as $post)
                            <div class="row justify-content-between">
                                <div>{{ $post->title }}</div>
                                <div>
                                    <a href="">Edit</a>
                                    <a href="">Delete</a>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
