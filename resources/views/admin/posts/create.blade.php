@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="container">
                        <div class="card-header row justify-content-between">
                            <div>Create new Post</div>
                        </div>
                        <div class="card-body">
                            <div class="container">
                                <div class="row flex-column">
                                    <form action="{{ route('admin.posts.store') }}" method="post">
                                        @csrf

                                        <div class="row flex-column">
                                            <label for="title">Titolo: </label>
                                            <input type="text" name="title" />
                                        </div>

                                        <div class="row flex-column">
                                            <label for="content">Contenuto: </label>
                                            <textarea name="content">
                                        </textarea>
                                        </div>

                                        <div class="row flex-column">
                                            <label for="slug">Slug: </label>
                                            <input type="text" name="slug" />
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
@endsection
