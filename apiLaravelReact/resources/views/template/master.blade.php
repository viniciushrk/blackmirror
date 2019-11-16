<!doctype html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('teste/css/sb-admin-2.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('teste/js/sb-admin-2.js') }}" type="text/js"></script>
    <link rel="manifest" href="{{asset('teste/assets/img/icons/site.webmanifest')}}">
    <link rel="stylesheet" href="{{asset('/fontawesome-free/css/fontawesome.min.css')}} ">
    <link rel="stylesheet" href="{{asset('/fontawesome-free/css/all.min.css')}} ">

</head>
<body>
    <div>
        @include('template.bar')
    </div>
{{--    <div>--}}
{{--        @yield('menu')--}}
{{--    </div>--}}

</body>

<script async="" id="dsq-count-scr" src="//startbootstrap.disqus.com/count.js" type="text/javascript"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous" type="text/javascript"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.bundle.min.js" integrity="sha384-zDnhMsjVZfS3hiP7oCBRmfjkQC4fzxVxFhBx8Hkz2aZX8gEvA/jsP3eXRCvzTofP" crossorigin="anonymous" type="text/javascript"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.plugins.min.js"></script>
<script src="{{asset('teste/assets/js/scripts.js')}} " type="text/javascript"></script>

</html>
