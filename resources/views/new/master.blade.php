<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Registration Process</title>
    <link rel="stylesheet" href="{{asset('/')}}css/main.css" />
    <link rel="stylesheet" href="{{asset('/')}}css/bootstrap.min.css" type="text/css">

    <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
        <div class="container-fluid">
            <a class="navbar-brand text-white ms-auto" href="{{route('customer.register')}}">Register</a>
        </div>
    </nav>


</head>
<body>
@yield('body')

<script src="{{asset('/')}}bootstrap.min.js"></script>
</body>
</html>
