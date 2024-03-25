<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

@if(Auth::check())
    <p>User is logged in.</p>
    @if(Auth::user()->isAdmin())
        <p>User is an admin.</p>
        <a href="{{ route('admin.panel') }}" class="btn btn-secondary">Admin Panel</a>
    @else
        <p>User is not an admin.</p>
    @endif
@else
    <p>User is not logged in.</p>
@endif

<a href="{{ route('register') }}" class="btn btn-secondary">Register</a>
<a href="{{ route('login') }}" class="btn btn-secondary">Log in</a>

</body>
</html>
