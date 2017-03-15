<html>
<head>
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    <title>James Lieu</title>
</head>
<body>

    <div class="container-fluid">
        @include('layouts.nav')

        @yield('content')

        @include('layouts.footer')
    </div>

</body>
</html>
