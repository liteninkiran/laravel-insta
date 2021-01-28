@extends('layouts.app')

@section('content')

<div class="container">

    <form action="{{ route('profile.update', $user->id) }}" enctype="multipart/form-data" method="post">

        @csrf
        @method('PUT')

        <div class="row">

            <div class="col-8 offset-2">

                <div class="row">

                    <h1>Edit Profile</h1>

                </div>

                <!-- TITLE -->
                <div class="form-group row">

                    <label for="title" class="col-md-4 col-form-label pl-0">Title</label>
                    <input id="title"
                           name="title"
                           type="text"
                           class="form-control @error('title') is-invalid @enderror"
                           value="{{ old('title') ?? $user->profile->title }}"
                           autocomplete="title"
                           autofocus>

                    @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>

                <!-- DESCRIPTION -->
                <div class="form-group row">

                    <label for="description" class="col-md-4 col-form-label pl-0">Description</label>
                    <textarea id="description" name="description" rows="4" class="form-control @error('description') is-invalid @enderror">{{  old('description') ?? $user->profile->description }}</textarea>

                    @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>

                <!-- URL -->
                <div class="form-group row">

                    <label for="url" class="col-md-4 col-form-label pl-0">Website</label>
                    <input id="url"
                           name="url"
                           type="text"
                           class="form-control @error('url') is-invalid @enderror"
                           value="{{ old('url') ?? $user->profile->url }}"
                           autocomplete="url"
                           autofocus>

                    @error('url')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>

                <!-- IMAGE -->
                <div class="row">

                    <label for="image" class="col-md-4 col-form-label pl-0">Image</label>
                    <input type="file" name="image" id="image" class="form-control-file">

                    @error('image')
                        <span style="color: #e3342f; font-size: 80%">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>

                <!-- SUBMIT -->
                <div class="row pt-5 d-flex justify-content-between">

                    <button class="btn btn-primary">Save Profile</button>

                    <a href="{{ route('profile.show', $user->id) }}" class="btn btn-secondary">Cancel</a>

                </div>

            </div>

        </div>

    </form>

</div>

@endsection
