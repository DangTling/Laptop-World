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
    <link rel="stylesheet" href="{{asset('css/InserForm.scss')}}">

</head>

<body class="full-screen register">


    <div class="wrapper">
        <div class="page-header" style="background-image: url('{{asset('image/soroush-karimi.jpg')}}');">
            <div class="filter"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-7 col-12 ml-auto">
                        <div class="info info-horizontal">
                            <div class="icon">
                                <i class="fa fa-umbrella"></i>
                            </div>
                            <div class="description">
                                <h3> We've got you covered </h3>
                                <p>Larger, yet dramatically thinner. More powerful, but remarkably power efficient.
                                    Everything you need in a single case.</p>
                            </div>
                        </div>
                        <div class="info info-horizontal">
                            <div class="icon">
                                <i class="fa fa-map-signs"></i>
                            </div>
                            <div class="description">
                                <h3> Clear Directions </h3>
                                <p>Efficiently unleash cross-media information without cross-media value. Quickly
                                    maximize timely deliverables for real-time schemas.</p>
                            </div>
                        </div>
                        <div class="info info-horizontal">
                            <div class="icon">
                                <i class="fa fa-user-secret"></i>
                            </div>
                            <div class="description">
                                <h3> We value your privacy </h3>
                                <p>Completely synergize resource taxing relationships via premier niche markets.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-5 col-12 mr-auto">
                        <div class="card card-register">
                            <h3 class="card-title text-center">Register</h3>
                            <div class="social">
                                <button href="#paper-kit" class="btn btn-just-icon btn-facebook"><i
                                        class="fa fa-facebook"></i></button>
                                <button href="#paper-kit" class="btn btn-just-icon btn-google"><i
                                        class="fa fa-google"></i></button>
                                <button href="#paper-kit" class="btn btn-just-icon btn-twitter"><i
                                        class="fa fa-twitter"></i></button>
                            </div>

                            <div class="division">
                                <div class="line l"></div>
                                <span>or</span>
                                <div class="line r"></div>
                            </div>
                            <form class="register-form" action="{{route('user.process_register')}}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <input type="text" class="form-control" placeholder="Name" name="name">
                                <input type="text" class="form-control" placeholder="Address" name="address">
                                <input type="number" class="form-control" placeholder="Phone Number"
                                    name="phone_number">
                                <input type="date" class="form-control" placeholder="Date Of Birth"
                                    name="birth_of_date">
                                <select name="gender" class="form-control my-2">
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="undefined">Another</option>
                                </select>

                                <input type="eamil" class="form-control" placeholder="Email" name="email">

                                <input type="password" class="form-control" placeholder="Password" name="password">

                                <input type="password" class="form-control" placeholder="Confirm Password"
                                    name="password-confirm">

                                <label style="color: black" class="mt-2">Enter your avatar</label>
                                <input type="file" class="form-control" id="logo" placeholder="Enter your avatar"
                                    name="avatar" required>

                                <button class="btn btn-block btn-round">Register</button>
                            </form>
                            <div class="login">
                                <p>Already have an account? <a href="{{route('user.login')}}">Log in</a>.</p>
                            </div>
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

</body>

</html>