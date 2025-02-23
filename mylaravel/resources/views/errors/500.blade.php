{{-- resources/views/errors/500.blade.php --}}
@extends('errors::minimal')

@section('title', __('Server Error'))
@section('code', '500')
@section('message', __('Oops! Something went wrong.'))

{{-- resources/views/errors/404.blade.php --}}
@extends('errors::minimal')

@section('title', __('Not Found'))
@section('code', '404')
@section('message', __('Oops! The page you are looking for could not be found.'))

{{-- resources/views/errors/minimal.blade.php --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <style>
        body {
            font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, sans-serif;
            color: #1a202c;
            height: 100vh;
            margin: 0;
            background: #fff;
        }

        .wrapper {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem;
        }

        .content {
            text-align: center;
            max-width: 600px;
        }

        .error-code {
            font-size: 120px;
            font-weight: bold;
            color: #e53e3e;
            margin: 0;
            line-height: 1;
        }

        .error-message {
            font-size: 24px;
            margin: 1rem 0;
            color: #4a5568;
        }

        .help-text {
            color: #718096;
            margin: 1.5rem 0;
        }

        .back-link {
            color: #3182ce;
            text-decoration: none;
        }

        .back-link:hover {
            text-decoration: underline;
        }

        .search-form {
            margin-top: 2rem;
        }

        .search-input {
            padding: 0.5rem 1rem;
            border: 1px solid #e2e8f0;
            border-radius: 0.375rem;
            width: 100%;
            max-width: 300px;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="content">
            <h1 class="error-code">@yield('code')</h1>
            <div class="error-message">@yield('message')</div>
            <div class="help-text">
                We will work on fixing that right away. Meanwhile, you may
                <a href="{{ url('/') }}" class="back-link">return to dashboard</a>
                or try using the search form.
            </div>
            <form class="search-form" method="GET" action="{{ url('/search') }}">
                <input type="text" name="q" class="search-input" placeholder="Search...">
            </form>
        </div>
    </div>
</body>

</html>
