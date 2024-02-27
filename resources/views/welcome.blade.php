@extends('layouts.app')

@section('page-title', 'Home')

@section('main-content')
    <section class="comics-section">
        <div class="container">
            <div class="row">
                @foreach ($comics as $comic)
                    <div class="col-md-4 mb-4">
                        <div class="comic-item">
                            <img class="img-fluid" width="100%"  src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                            <h5>{{ $comic['title'] }}</h5>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
