<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRM</title>

    @stack('vite')

    @vite([
        'packages/core/frontend/src/vuejs/js/app.js',
    ])
</head>
<body>
    <div id="app-loading">
        Đang tải ứng dụng...
    </div>
    <div id="app-vue">
        <app-layout>
            @yield('content')
        </app-layout>
    </div>
</body>
</html>
