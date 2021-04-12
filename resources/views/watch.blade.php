@extends('layouts.master')

@section('content')
    <div class="containe mt-4">
        <div class="row">
            <div class="col-8">
                <div class="card mb-4" style="width: 100%">
                    <div class="embed-responsive embeded-responsive-16by9">
                        <iframe src="https://www.youtube.com/embed/{{ $singleVideo->items[0]->id }}" width="560"
                            height="600" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"></iframe>
                    </div>
                    <div class="card-body">
                        <h5>{{ $singleVideo->items[0]->snippet->title }}</h5>
                        <p class="text-secondary">Published at
                            {{ date('Y M d', strtotime($singleVideo->items[0]->snippet->publishedAt)) }}
                        </p>
                        <p>{{ $singleVideo->items[0]->snippet->description }}</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="container">
                    <div class="row">
                        @foreach ($videoLists->items as $key => $item)
                            <div class="col-12">
                                <a href="{{ route('watch', $item->id->videoId) }}">
                                    <img src="{{ $item->snippet->thumbnails->medium->url }}" alt="" class="img-fluid">
                                    <div class="card-body">
                                        <h5>{{ \Illuminate\Support\str::limit($item->snippet->title, $limit = 50, $end = ' ...') }}
                                        </h5>
                                    </div>
                                    <div class="card-footer text-muted">
                                        Published at {{ date('Y M d', strtotime($item->snippet->publishTime)) }}
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
