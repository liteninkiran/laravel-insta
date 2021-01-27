@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row">

        <div class="col-3 p-5">

            <img class="rounded-circle" src="https://scontent-lhr8-1.cdninstagram.com/v/t51.2885-19/s150x150/97566921_2973768799380412_5562195854791540736_n.jpg?_nc_ht=scontent-lhr8-1.cdninstagram.com&amp;_nc_ohc=4e1_P6DaiOAAX8FnC2l&amp;tp=1&amp;oh=86152c1cf136d2692d5cfc85693b8ed4&amp;oe=603C0567">

        </div>

        <div class="col-9 pt-5">

            <div><h1>Innovative Analytic Solutions</h1></div>

            <div class="d-flex">
                
                <div class="pr-5"><strong>153</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>

            </div>

            <div class="pt-4 font-weight-bold"><a href="https://kiran-anand.com" target="_blank" style="text-decoration: none;">Kiran Anand</a></div>

            <div>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </div>

            <div class="row pt-5">

                <div class="col-4">
                    <img src="https://www.cloudways.com/blog/wp-content/uploads/best-php-frameworks-1.jpg" class="w-100">
                </div>

                <div class="col-4">
                    <img src="https://agilethought.com/wp-content/uploads/2018/10/power-BI.png" class="w-100">
                </div>

                <div class="col-4">
                    <img src="https://www.scnsoft.com/blog-pictures/information-security/7-best-practices-for-database-security.png" class="w-100">
                </div>

            </div>

        </div>

    </div>

<!-- 
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
 -->
</div>

@endsection
