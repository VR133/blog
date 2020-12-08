@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="mb-2">
            @if ($post->images->count() > 0)
                @foreach ($post->images as $image)
                    <img src="/storage/images/{{ $image->image }}" class="card-img-top mb-3" alt="...">
                @endforeach
            @else
                <img src="/storage/images/default.png" class="card-img-top" alt="...">
            @endif
        </div>
        <h3>{{ $post->title }}</h3>
        <div>{{ $post->text }}</div>
        <div class="mt-4">
            <div class="d-flex justify-content-between mb-3">
                <div>
                    <span class="font-weight-bold">Tags:</span>
                    @foreach ($post->tags as $tag)
                        <a href="/posts/tag/{{ $tag->id }}" class="text-decoration-none text-dark">{{ $tag->tag }},</a>
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
        </div>
        <div class="d-flex justify-content-between mt-4">
            <span class="text-secondary"><span class="text-dark font-weight-bold">{{ $post->views }} </span> views</span>
            <span>{{ $post->created_at->format('d.m.Y') }}</span>
        </div>
    </div>
@endsection
