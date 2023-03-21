@extends('layouts.app')

@section('content')
    @vite('resources/css/app.css')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        {{ __('You are logged in!') }}


                    </div>
                    <h1>Upload</h1>
                    <form method="POST" action="/upload" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="image">
                        <input type="submit" name="upload">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
