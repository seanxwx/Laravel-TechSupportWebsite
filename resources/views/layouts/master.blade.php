<html>
<head>
    <title> @yield('title') </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <style>
        .foot {

            position: relative;
            top:100px;
            width:100%;
            display:block;
        }
    </style>

</head>
<body>
@include('shared.navbar')
<div class="container">
    @yield('content')
</div>
<footer class="foot">
    @include('shared.footer')
</footer>
</body>
</html>