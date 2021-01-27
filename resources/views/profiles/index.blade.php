@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row">

        <div class="col-3 p-5">

            <img class="rounded-circle" src="https://scontent-lhr8-1.cdninstagram.com/v/t51.2885-19/s150x150/97566921_2973768799380412_5562195854791540736_n.jpg?_nc_ht=scontent-lhr8-1.cdninstagram.com&amp;_nc_ohc=4e1_P6DaiOAAX8FnC2l&amp;tp=1&amp;oh=86152c1cf136d2692d5cfc85693b8ed4&amp;oe=603C0567">

        </div>

        <div class="col-9 pt-5">

            <div class="d-flex justify-content-between align-items-baseline">

                <h1>{{ $user->name }}</h1>

                <a href="#">Add New Post</a>

            </div>

            <div class="d-flex">
                
                <div class="pr-5"><strong>153</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>

            </div>

            <div class="pt-4 font-weight-bold"><a href="{{ $user->profile->url }}" target="_blank" style="text-decoration: none;">{{ $user->profile->title }}</a></div>

            <div>{{ $user->profile->description }}</div>

            <div class="row pt-5">

                <div class="col-4">
                    <img src="https://www.cloudways.com/blog/wp-content/uploads/best-php-frameworks-1.jpg" class="h-25">
                </div>

                <div class="col-4">
                    <img src="https://agilethought.com/wp-content/uploads/2018/10/power-BI.png" class="h-25">
                </div>

                <div class="col-4">
                    <img src="https://www.scnsoft.com/blog-pictures/information-security/7-best-practices-for-database-security.png" class="h-25">
                </div>

            </div>

        </div>

    </div>

</div>

@endsection
