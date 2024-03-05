<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>


    <a href="{{ route('register') }}" class="btn btn-secondary">Register</a>

    <a href="{{ route('login') }}" class="btn btn-secondary">log in </a>

