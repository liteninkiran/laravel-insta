@extends('layouts.app')

@section('content')

<div class="container">
 
    <form action="/post" enctype="multipart/form-data" method="PUT">

        @csrf

        <div class="row">

            <div class="col-8 offset-2">

                <div class="row">

                    <h1>Edit Post</h1>

                </div>

                <!-- CAPTION -->
                <div class="form-group row">

                    <label for="caption" class="col-md-4 col-form-label pl-0">Caption</label>
                    <input id="caption"
                           type="text"
                           class="form-control @error('caption') is-invalid @enderror"
                           name="caption"
                           value="{{ $post->caption }}"
                           autocomplete="caption"
                           autofocus>

                    @error('caption')
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
                <div class="row pt-4">

                    <button class="btn btn-primary">Add New Post</button>

                </div>

            </div>

        </div>

    </form>

</div>

@endsection
