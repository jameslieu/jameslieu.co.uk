<html>
<head>
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    <title>James Lieu</title>
</head>
<body>

<div class="container-fluid">
    @include('layouts.nav')

    <div class="container">
        <div class="columns">
            <div class="column is-three-quarters">
                @yield('content')
            </div>
            <div class="column">
                @include('layouts.sidebar')
            </div>
        </div>
    </div>

    @include('layouts.footer')
</div>

</body>
</html>
