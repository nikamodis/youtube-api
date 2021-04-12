@extends('layouts.master')

@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col">
                @foreach ($videoLists->items as $key => $item)
                    <div class="row mb-3">
                        <a href="{{ route('watch', $item->id->videoId) }}" style="display: contents">
                            <div class="col-4">
                                <img src="{{ $item->snippet->thumbnails->medium->url }}"
                                    alt="" class="img-fluid">
                            </div>
                            <div class="col-8">
                                <h5>{{ \Illuminate\Support\str::limit($item->snippet->title, $limit = 150, $end = ' ...') }}</h5>
                                <p class="text-muted">Published at {{ date('Y M d', strtotime($item->snippet->publishTime)) }}</p>
                                <p>{{ \Illuminate\Support\str::limit($item->snippet->description, $limit = 250, $end = ' ...') }}</p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
