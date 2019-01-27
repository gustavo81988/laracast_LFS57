<html>
    <head>
        <title>{{$title}}</title>
    </head>
    <body>
        <ul>
            <li><a href="{{route('home')}}">Home</a></li>
            <li><a href="about">About us</a></li>
            <li><a href="contact">Contact us to learn more</a></li>
        </ul>
        @yield('content')
    </body>
</html>
