@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            {{ $posts->links() }}
        </div>
    </div>

    @foreach($posts as $post)

        <div class="row">
            
            <div class="col-6 offset-3">
                <img src="/storage/{{ $post->image }}" class="w-100">
            </div>

        </div>

        <div class="row pt-2 pb-4">

            <div class="col-6 offset-3">

                <p>
                    <a href="{{ route('profile.show', $post->user) }}">
                        <span class="font-weight-bold text-dark">{{ $post->user->name }}</span>
                    </a> {{ $post->caption }}
                </p>

            </div>

        </div>

    @endforeach

    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            {{ $posts->links() }}
        </div>
    </div>

</div>

@endsection
