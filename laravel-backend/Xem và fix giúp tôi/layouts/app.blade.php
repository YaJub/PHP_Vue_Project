<!DOCTYPE html>
<html lang="en">
<head>
    <title>Laravel Demo</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header>
        <h1>Demo Laravel</h1>
        <h1>{{ __('messages.welcome') }}</h1>
        <nav>
            <a href="/">{{ __('messages.home') }}</a> |
            <a href="/form">{{ __('messages.go_form') }}</a> |
            <a href="/lang/en">English</a> | <a href="/lang/vi">Tiếng Việt</a> 
        </nav>
    </header>

    <main>
        @yield('content')
        @if (session('status'))
            <div style="color:green">
                {{ session('status') }}
            </div>
        @endif
    </main>
</body>
</html>
