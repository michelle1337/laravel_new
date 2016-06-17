<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
        <meta name="csrf-token" content="{{ csrf_token() }}">
<script type=text/javascript>
    $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
    });
 </script>    
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    </head>
    <body>
        @yield('content');
    </body>
</html>
