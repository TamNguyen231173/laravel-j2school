<html lang="en" >
<head>
    <meta charset="utf-8">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/apple-icon.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/favicon.pn') }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Dashboard - {{ config('app.name') }}</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
    <meta name="viewport" content="width=device-width">
    <!-- Bootstrap core CSS     -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/material-dashboard.css?v=1.2.1') }}" rel="stylesheet">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    @stack('css')
</head>
<body>
<div class="wrapper">
    @include('admin.layout.sidebar')
    <div class="main-panel">
        @include('admin.layout.topbar')
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    @if ($errors->any())
                        <div class="col-12">
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    @endif
                    @if (session()->has('success'))
                        <div class="col-12">
                            <div class="alert alert-success">
                                {{ session()->get('success') }}
                            </div>
                        </div>
                    @endif
                    <div class="col-12">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
        @include('admin.layout.footer')
    </div>
</div>
        <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
        <script src="{{ asset('js/material.min.js') }}"></script>
        <script src="{{ asset('js/perfect-scrollbar.jquery.min.js') }}"></script>
        <script src="{{ asset('js/material-dashboard.js') }}" ></script>
        <script src="{{ asset('js/jquery.select-bootstrap.js') }}" ></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
        <!-- Library for adding dinamically elements -->
        <script src="{{ asset('js/arrive.min.js') }}" ></script>

        <!-- Forms Validations Plugin -->
        <script src="{{ asset('js/jquery.validate.min.js') }}" ></script>
        <!--  Plugin for Date Time Picker and Full Calendar Plugin-->
        <script src="{{ asset('js/moment.min.js') }}" ></script>
        <!--  Charts Plugin, full documentation here: https://gionkunz.github.io/chartist-js/ -->
        <script src="{{ asset('js/chartist.min.js') }}" ></script>
        <script src="{{ asset('js/jquery.bootstrap-wizard.js') }}" ></script>

        <!--  Notifications Plugin, full documentation here: http://bootstrap-notify.remabledesigns.com/    -->
        <script src="{{ asset('js/bootstrap-notify.js') }}" ></script>
        <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
        <script src="{{ asset('js/bootstrap-datetimepicker.js') }}" ></script>
        <script src="{{ asset('js/sweetalert2.js') }}" ></script>
        <script src="{{ asset('js/jasny-bootstrap.min.js') }}" ></script>
        <script src="{{ asset('js/fullcalendar.min.js') }}" ></script>


        {{--<!--  DataTables.net Plugin, full documentation here: https://datatables.net/    -->--}}
        {{--<script src="../assets/js/jquery.datatables.js"></script>--}}
        <script src="{{ asset('js/jquery.tagsinput.js') }}" ></script>
        <!-- Sweet Alert 2 plugin, full documentation here: https://limonte.github.io/sweetalert2/ -->
        <!-- Material Dashboard javascript methods -->

        @stack('js')


</body>
</html>