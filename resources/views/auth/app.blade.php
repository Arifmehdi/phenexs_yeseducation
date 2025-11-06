<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Material Design Login Form</title>
    <link rel="stylesheet" href="{{ asset('frontend/auth/style.css') }}">
</head>

<body>
    @yield('auth')
    <script src="../../shared/js/form-utils.js"></script>
    <script src="{{ asset('frontend/auth/script.js') }}"></script>
</body>

</html>