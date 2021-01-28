@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row">

        <div class="col-3 p-5">

            <img class="rounded-circle w-100" src="/storage/{{ $user->profile->image }}">

        </div>

        <div class="col-9 pt-5">

            <div class="d-flex justify-content-between align-items-baseline">

                <h1>{{ $user->name }}</h1>

                @can('update', $user->profile)
                    <a href="{{ route('post.create') }}">Add New Post</a>
                @endcan

            </div>

            @can('update', $user->profile)
                <a href="{{ route('profile.edit', $user->id) }}">Edit Profile</a>
            @endcan

            <div class="d-flex">
                
                <div class="pr-5"><strong>{{ $user->posts->count() }}</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>

            </div>

            <div class="pt-4 font-weight-bold"><a href="{{ $user->profile->url }}" target="_blank" style="text-decoration: none;">{{ $user->profile->title }}</a></div>

            <div>{{ $user->profile->description }}</div>

            <div class="row pt-5">

                @foreach($user->posts as $post)

                    <div class="col-4 pb-4">
                        <a href="{{ route('post.show', $post->id) }}"><img src="/storage/{{ $post->image }}" class="w-100"></a>
                    </div>

                @endforeach

            </div>

        </div>

    </div>

</div>

@endsection
