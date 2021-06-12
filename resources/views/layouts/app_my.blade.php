<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/app.css">
    <title>@yield('title', 'ProductStar new platform')</title>
</head>
<body>
    <div class="main_container">
        <div class="menu">
            @include('inc.menu._menu')
        </div>
        <div class="content">
            @yield('content')
        </div>
    </div>

    <a href="/profile"><div class="profile"></div></a>
    <div class="footer">

    </div>

    <script src="./js/app.js"></script>

</body>
</html>
