<!-- resources/views/partials/header.blade.php -->
<header class="header py-2">
    <div class="container d-flex align-items-center justify-content-between">
        <div class="d-flex align-items-center">
            <h1 class="d-none d-lg-block m-0">{{ config('app.name', 'Laravel') }}</h1>
            <h1 class="d-lg-none m-0">{{ config('app.name', 'Laravel') }}</h1>
        </div>
        <div class="d-flex align-items-center">
            <a class="btn btn-primary mr-2" href="{{ route('login') }}">Login</a>
            <a class="btn btn-primary" href="{{ route('register') }}">Register</a>
        </div>
    </div>
</header>
