<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>@yield('title')</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="csjs/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="csjs/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

    <!--calendar-->
    <link href='assets/fullcalendar/packages/core/main.css' rel='stylesheet' />
    <link href='assets/fullcalendar/packages/daygrid/main.css' rel='stylesheet' />
    <link href='assets/fullcalendar/packages/timegrid/main.css' rel='stylesheet' />
    <link href='assets/fullcalendar/packages/list/main.css' rel='stylesheet' />
    <link href='assets/fullcalendar/css/style.css' rel='stylesheet' />
</head>
<body>
@include('layouts.nav_bar')
@yield('content')
@include('layouts.footer')
<!--  Scripts-->
<script src="{{url('csjs/js/jquery.js')}}"></script>
<script src="{{url('csjs/js/materialize.js')}}"></script>
<script src="{{url('csjs/js/init.js')}}"></script>
<script>
    $(document).ready(function(){
        $('.carousel').carousel();
        $('.sidenav').sidenav();
    });

</script>
<!--calendar-->
<script src={{url('assets/fullcalendar/packages/core/main.js')}}></script>
<script src={{url('assets/fullcalendar/packages/interaction/main.js')}}></script>
<script src={{url('assets/fullcalendar/packages/daygrid/main.js')}}></script>
<script src={{url('assets/fullcalendar/packages/timegrid/main.js')}}></script>
<script src={{url('assets/fullcalendar/packages/list/main.js')}}></script>
<script src={{url('assets/fullcalendar/js/calendar.js')}}></script>
<!--map-->
<script src="{{url('js/gmap.js')}}"></script>
</body>
</html>
