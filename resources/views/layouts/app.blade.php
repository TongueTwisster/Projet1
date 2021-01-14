<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        .carousel-inner {
            height: 400px;
        }
        .slider-size {
            height: 400px; !important
            object-fit: contain; !important
        }
        .trending-image {
            height: 150px;
        }
        .trending-item {
            float: left;
            width: 20%;
        }
        .trending-wrapper {
            margin: 30px;
        }
        .detail-img {
            height: 200px;
        }
        .search-box {
            width: 500px; !important
        }
        .footer {
            width: 100%;
            height: 100px;
        }
    </style>
    <script
    src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
    crossorigin="anonymous"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <title>Carrot</title>


</head>

<body>
    {{View::make('header')}}

    @yield('content')


    {{View::make('footer')}}

</body>
</html>
