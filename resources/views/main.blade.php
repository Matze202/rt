<!-- resources/views/layout.blade.php -->
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>

    @vite('resources/sass/app.scss')

</head>
<body>
<div id="app">
    @include('partials.header')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
                @include('partials.left-sidebar')
            </div>
            <div class="col-md-8">
                <div class="content">
                    @yield('content')
                </div>
            </div>
            <div class="col-md-2">
                @include('partials.right-sidebar')
            </div>
        </div>
    </div>
    @include('partials.footer')
    @include('partials.lower-footer')
</div>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
