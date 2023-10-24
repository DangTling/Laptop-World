<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="../assets/img/favicon.ico">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Paper Kit 2 PRO by Creative Tim</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('css/paper-kit.css_v=2.1.0.css')}}" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,300,700' rel='stylesheet' type='text/css'>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{asset('css/nucleo-icons.css')}}" rel="stylesheet">


</head>

<body class="full-screen login">

    <div class="wrapper">
        <div class="page-header" style="background-image: url('{{asset('image/bruno-abatti.jpg')}} ');">
            <div class="filter"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 ml-auto mr-auto">
                        <div class="card card-register">
                            <h3 class="card-title">Welcome</h3>
                            <form class="register-form" action="{{route('user.process_login')}}" method="POST">
                                @csrf
                                <label>Email</label>
                                <input type="email" class="form-control no-border" placeholder="Email" name="email">

                                <label>Password</label>
                                <input type="password" class="form-control no-border" placeholder="Password"
                                    name="password">
                                <button class="btn btn-danger btn-block btn-round">Login</button>
                            </form>
                            <div class="forgot">
                                <a href="#paper-kit" class="btn btn-link btn-danger">Forgot password?</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="demo-footer text-center">
                    <h6>&copy; <script>
                            document.write(new Date().getFullYear())
                        </script>, made with <i class="fa fa-heart heart"></i> by Creative Tim</h6>
                </div>
            </div>
        </div>
    </div>

</body>

<!-- Core JS Files -->
<script src="{{asset('js/jquery-3.2.1.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/jquery-ui-1.12.1.custom.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/popper.js')}}" type="text/javascript"></script>
<script src="{{asset('js/bootstrap.min.js')}}" type="text/javascript"></script>

<!-- Control Center for Paper Kit: parallax effects, scripts for the example pages etc -->
<script src="../assets/js/paper-kit.js?v=2.1.0"></script>

</html>