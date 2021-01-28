@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row">

        <div class="col-3 p-5">

            <img class="rounded-circle w-100" src="{{ $user->profile->profileImage() }}">

        </div>

        <div class="col-9 pt-5">

            <div class="d-flex justify-content-between align-items-baseline">

                <div class="d-flex align-items-center pb-4" style="width: 700px;">
                    
                    <h1 style="width: 600px;">{{ $user->name }}</h1>
                    <follow-button user-id="{{ $user->id }}" follows="{{ $follows }}"></follow-button>   

                </div>


                @can('update', $user->profile)
                    <a href="{{ route('post.create') }}">Add New Post</a>
                @endcan

            </div>

            @can('update', $user->profile)
                <a href="{{ route('profile.edit', $user->id) }}">Edit Profile</a>
            @endcan

            <div class="d-flex">

                <div class="pr-5"><strong>{{ $postCount }}</strong> posts</div>
                <div class="pr-5"><strong>{{ $followersCount }}</strong> followers</div>
                <div class="pr-5"><strong>{{ $followingCount }}</strong> following</div>

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
