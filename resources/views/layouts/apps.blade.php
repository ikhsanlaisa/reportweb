<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title>Form Rekap Data Harian - MRT</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="{{asset('css/materialize.css')}}" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="{{asset('css/style.css')}}" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="{{ asset ('css/sweetalert2.min.css') }}" rel="stylesheet">
    {{--SWEETALERT--}}
    <script src="{{asset('css/sweetalert2/dist/sweetalert2.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('css/sweetalert2/dist/sweetalert2.min.css')}}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
    <script>
        window.onload = function () {

            var chart = new CanvasJS.Chart("chartContainer", {
                animationEnabled: true,
                theme: "light2",
                title: {
                    text: "Simple Line Chart"
                },
                axisY: {
                    includeZero: false
                },
                data: [{
                    type: "line",
                    dataPoints: [
                        {y: 450},
                        {y: 414},
                        {y: 520, indexLabel: "highest", markerColor: "red", markerType: "triangle"},
                        {y: 460},
                        {y: 450},
                        {y: 500},
                        {y: 480},
                        {y: 480},
                        {y: 410, indexLabel: "lowest", markerColor: "DarkSlateGrey", markerType: "cross"},
                        {y: 500},
                        {y: 480},
                        {y: 510}
                    ]
                }]
            });
            chart.render();

        }
    </script>
</head>
<body>
<nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">Logo</a>
        <ul class="right hide-on-med-and-down">
            <li><a href="/" class="waves-effect waves-light btn">Home</a></li>
            <li><a href="/progress" class="waves-effect waves-light btn">Progress</a></li>
            <li><a href="/new/project" class="waves-effect waves-light btn">Buat Project</a></li>
        </ul>
        <ul id="nav-mobile" class="sidenav">
            <li><a href="/" class="waves-effect waves-light btn">Home</a></li>
            <li><a href="/progress" class="waves-effect waves-light btn">Progress</a></li>
            <li><a href="/new/project" class="waves-effect waves-light btn">Buat Project</a></li>
        </ul>
        <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
</nav>

@yield('content')

<footer class="page-footer grey">
    <div class="container">
        <div class="row">

        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            Made by <a class="orange-text text-lighten-3" href="http://materializecss.com">Materialize</a>
        </div>
    </div>
</footer>


<!--  Scripts-->
@include('sweet::alert')
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="{{asset('js/materialize.js')}}"></script>
<script src="{{asset('js/init.js')}}"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var elems = document.querySelectorAll('.datepicker');
        var instances = M.Datepicker.init(elems, options);
        // instances.disableDayFn();
    });

    // Or with jQuery

    $(document).ready(function () {
        $('.datepicker').datepicker({
            selectMonths: true, // Creates a dropdown to control month
            selectYears: 99, // Creates a dropdown of 15 years to control year,
            max: true,
            maxDate: new Date(),
            today: 'Today',
            clear: 'Clear',
            close: 'Ok'
        });
    });
</script>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>
