<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">


    <title>Admin</title>

    <!-- Styles -->

    <link href="/app/public/css/app.css" rel="stylesheet">

    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.js"></script>
</head>
<body>

<div class="row">

    <div class="col-xs-5 col-md-3">

        <p><a href="{{url('admin/users')}}">All users</a></p>
        <p><a href="{{url('admin/users/create')}}">Create user</a></p>
    </div>
    <div class="col-xs-11 col-md-7">@yield('content')</div>
    <div class="col-xs-1 col-md-1"></div>
</div>

    @yield('footer')


<!-- Scripts -->
<script src="/js/app.js"></script>
</body>
</html>
