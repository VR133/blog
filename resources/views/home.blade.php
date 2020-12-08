@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        @if (isset($filter))
            <h3 class="text-center mb-5">{{$filter}}: {{$filter_value}}</h3>
        @else
            <h3 class="text-center mb-5">BLOG STANDARD</h3>
        @endif
        <div class="row justify-content-md-center">
            {{-- left side --}}
            <div class="col">
                {{-- $post->images->first()->image --}}
                @foreach ($posts as $post)
                    <div class="card mb-3">
                        <div class="card-header">
                            @if ($post->images->count() > 0)
                                <img src="/storage/images/{{ $post->images->first()->image }}" class="card-img-top"
                                    alt="...">
                            @else
                                <img src="/storage/images/default.png" class="card-img-top" alt="...">
                            @endif
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <p class="card-text">{{ substr($post->text, 0, 150) }}...</p>
                            <div class="d-flex justify-content-between mb-3">
                                <div>
                                    <span class="font-weight-bold">Tags:</span>
                                    @foreach ($post->tags as $tag)
                                        <a href="/posts/tag/{{ $tag->id }}"
                                            class="text-decoration-none text-dark">{{ $tag->tag }},</a>
                                    @endforeach
                                </div>
                                <div>
                                    <span class="font-weight-bold">Category (ies):</span>
                                    @foreach ($post->categories as $category)
                                        <a href="/posts/category/{{ $category->id }}"
                                            class="text-decoration-none text-dark">{{ $category->category }},</a>
                                    @endforeach
                                </div>
                            </div>
                            <div class="d-flex justify-content-between">
                                <a href="/posts/{{ $post->id }}" class="btn btn-outline-info">Read more</a>
                                <span class="text-secondary">{{ $post->created_at->format('d.m.Y') }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="d-flex justify-content-center">
                    {{ $posts->links() }}
                </div>

            </div>

            {{-- right side --}}
            <div class="col col-lg-3">
                <div>
                    <h4>Categories</h4>
                    <hr>
                </div>
                <div class="d-flex flex-column">
                    @foreach ($categories as $category)
                        <a href="/posts/category/{{ $category->id }}" class="text-decoration-none text-dark mt-3">{{ $category->category }}</a>
                    @endforeach
                </div>
                <div class="mt-4">
                    <h4>Tags</h4>
                    <hr>
                </div>
                <div>
                    @foreach ($tags as $tag)
                        <a href="/posts/tag/{{ $tag->id }}" class="btn btn-outline-dark m-1">{{ $tag->tag }}</a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
