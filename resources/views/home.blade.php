@extends('layouts.app')

@section('content')
    <section>
        <div class="container position-relative mt-4 py-4">
            <div class="cards">
                <div class="row row-cols-6">
                    :@foreach ($comic as $item)
                        <div class="col">
                            <div class="my-card">
                                <div class="img">
                                    <img src="{{ $item['thumb'] }}" alt="{{ $item['title'] }}">
                                </div>
                                <h3>{{ $item['title'] }}</h3>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="titl">
                Current series
            </div>
            <button class="load">Load more</button>
        </div>
    </section>
@endsection
