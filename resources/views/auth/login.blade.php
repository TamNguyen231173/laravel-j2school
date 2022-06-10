
<html lang="en" class="perfect-scrollbar-on">

<head>

<html lang="en" class="perfect-scrollbar-on"><head>

    <meta charset="utf-8">
    <link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>Login - {{ config('app.name') }}</title>

    <title>Login - {{config('app.name')}}</title>

    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
    <meta name="viewport" content="width=device-width">
    <!-- Bootstrap core CSS     -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/material-dashboard.css') }}" rel="stylesheet">

    <link href="{{ asset('/css/material-kit.css') }}" rel="stylesheet">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<body class="off-canvas-sidebar">
    <nav class="navbar navbar-primary navbar-transparent navbar-absolute">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href=" {{ route('home') }} ">Clinic</a>
            </div>

        </div>
    </nav>
    <div class="wrapper wrapper-full-page">
        <div class="full-page login-page" filter-color="black" data-image="../../assets/img/login.jpeg">
            <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
            <div class="content">
                <div class="container">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                                <div class="card card-signup">
                                    <form class="form" method="" action="">
                                        <div class="header header-rose   text-center">
                                            <h4 class="card-title">Log in</h4>
                                            <div class="social-line">
                                                <a href="#pablo" class="btn btn-just-icon btn-simple">
                                                    <i class="fa fa-facebook-square"></i>
                                                </a>
                                                <a href="#pablo" class="btn btn-just-icon btn-simple">
                                                    <i class="fa fa-twitter"></i>
                                                </a>
                                                <a href="#pablo" class="btn btn-just-icon btn-simple">
                                                    <i class="fa fa-google-plus"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <p class="description text-center">Or Be Classical</p>
                                        <div class="card-content">

                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="material-icons">face</i>
                                                </span>
                                                <div class="form-group is-empty"><input type="text"
                                                        class="form-control" placeholder="First Name..."><span
                                                        class="material-input"></span></div>
                                            </div>

                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="material-icons">email</i>
                                                </span>
                                                <div class="form-group is-empty"><input type="text"
                                                        class="form-control" placeholder="Email..."><span
                                                        class="material-input"></span></div>
                                            </div>

                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="material-icons">lock_outline</i>
                                                </span>
                                                <div class="form-group is-empty"><input type="password"
                                                        placeholder="Password..." class="form-control"><span
                                                        class="material-input"></span></div>
                                            </div>

                                            <!-- If you want to add a checkbox to this form, uncomment this code
            
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="optionsCheckboxes" checked>
                                                    Subscribe to newsletter
                                                </label>
                                            </div> -->
                                        </div>
                                        <div class="footer text-center">
                                            <a href="#pablo" class="btn btn-rose btn-simple btn-wd btn-lg">Get
                                                Started</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="container">
                    <div class="copyright pull-right">
                        ©
                        <script>
                            document.write(new Date().getFullYear())
                        </script>2022, made with <i class="fa fa-heart heart"></i> by <a
                            href="http://www.creative-tim.com" target="_blank">Clinic</a>
                    </div>
                </div>
            </footer>
            <div class="full-page-background" style="background-image: url({{ asset('img/bg7.jpg') }})"></div>
        </div>
    </div>

    <script src="{{ asset('js/jquery-3.2.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/material.min.js') }}"></script>
    <script src="{{ asset('js/perfect-scrollbar.jquery.min.js') }}"></script>
    <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>

    <!-- Forms Validations Plugin -->
    <script src="{{ asset('js/jquery.validate.min.js') }}"></script>


    <!--  Notifications Plugin, full documentation here: http://bootstrap-notify.remabledesigns.com/    -->
    <script src="{{ asset('js/bootstrap-notify.js') }}"></script>
    <!-- Sweet Alert 2 plugin, full documentation here: https://limonte.github.io/sweetalert2/ -->
    <script src="{{ asset('js/sweetalert2.js') }}"></script>
    <!-- Material Dashboard javascript methods -->
    <script src="{{ asset('js/material-dashboard.js') }}"></script>

</body>

</html>

    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<body class="off-canvas-sidebar">
<nav class="navbar navbar-primary navbar-transparent navbar-absolute">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href=" {{route('home')}} ">Material Dashboard Pro</a>
        </div>

    </div>
</nav>
<div class="wrapper wrapper-full-page">
    <div class="full-page login-page" filter-color="black" data-image="../../assets/img/login.jpeg">
        <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
                        <form method="#" action="#">
                            <div class="card card-login">
                                <div class="card-header text-center" data-background-color="rose">
                                    <h4 class="card-title">Login</h4>
                                </div>

                                <div class="card-content">
                                    <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">face</i>
                                            </span>
                                        <div class="form-group label-floating is-empty">
                                            <label class="control-label">First Name</label>
                                            <input type="text" class="form-control">
                                            <span class="material-input"></span></div>
                                    </div>
                                    <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">email</i>
                                            </span>
                                        <div class="form-group label-floating is-empty">
                                            <label class="control-label">Email address</label>
                                            <input type="email" class="form-control">
                                            <span class="material-input"></span></div>
                                    </div>
                                    <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">lock_outline</i>
                                            </span>
                                        <div class="form-group label-floating is-empty">
                                            <label class="control-label">Password</label>
                                            <input type="password" class="form-control">
                                            <span class="material-input"></span></div>
                                    </div>
                                </div>
                                <div class="footer text-center">
                                    <button type="submit" class="btn btn-rose btn-simple btn-wd btn-lg">Let's go</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="container">
                <p class="copyright pull-right">
                    ©
                    <script>
                        document.write(new Date().getFullYear())
                    </script>
                    <a href="#"> {{ config('app.name') }} </a>
                </p>
            </div>
        </footer>
        <div class="full-page-background" style="background-image: url(../../assets/img/login.jpeg) "></div></div>
</div>

<script src="{{ asset('js/jquery-3.2.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/material.min.js') }}"></script>
<script src="{{ asset('js/perfect-scrollbar.jquery.min.js') }}"></script>
<!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>

<!-- Forms Validations Plugin -->
<script src="{{ asset('js/jquery.validate.min.js') }}" ></script>


<!--  Notifications Plugin, full documentation here: http://bootstrap-notify.remabledesigns.com/    -->
<script src="{{ asset('js/bootstrap-notify.js') }}" ></script>
<!-- Sweet Alert 2 plugin, full documentation here: https://limonte.github.io/sweetalert2/ -->
<script src="{{ asset('js/sweetalert2.js') }}" ></script>
<!-- Material Dashboard javascript methods -->
<script src="{{ asset('js/material-dashboard.js') }}" ></script>

</body></html>

