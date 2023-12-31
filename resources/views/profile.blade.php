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
    <link href="{{asset('css/nucleo-icons.css')}}" rel="stylesheet">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">

</head>

<body class="profile">
    <nav class="navbar navbar-expand-lg fixed-top navbar-transparent bg-danger nav-down" color-on-scroll="200">
        <div class="container">
            <div class="navbar-translate">
                <button class="navbar-toggler navbar-burger" type="button" data-toggle="collapse"
                    data-target="#navbarToggler" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar"></span>
                    <span class="navbar-toggler-bar"></span>
                    <span class="navbar-toggler-bar"></span>
                </button>
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{route('user.index')}}">LAPTOP WORLD</a>
                </div>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('user.profile', $user)}}" data-scroll="true"
                            href="javascript:void(0)">
                            <img src="{{asset('storage/'.session()->get('avatar'))}}" alt="Avatar User"
                                class="avatar img-raised" style="height: 30px; width:30px; border-radius: 15px;">
                            {{session()->get('name')}}
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="javascript:void(0)"
                            data-toggle="dropdown">Sections</a>
                        <ul class="dropdown-menu dropdown-menu-right dropdown-danger">
                            <a class="dropdown-item" href="{{route('user.logout')}}"><i
                                    class="nc-icon nc-tile-56"></i>&nbsp; Log out</a>
                            <a class="dropdown-item" href="../sections.html#features"><i
                                    class="nc-icon nc-settings"></i>&nbsp; Features</a>
                            <a class="dropdown-item" href="../sections.html#blogs"><i
                                    class="nc-icon nc-bullet-list-67"></i>&nbsp; Blogs</a>
                            <a class="dropdown-item" href="../sections.html#teams"><i
                                    class="nc-icon nc-single-02"></i>&nbsp; Teams</a>
                            <a class="dropdown-item" href="../sections.html#projects"><i
                                    class="nc-icon nc-calendar-60"></i>&nbsp; Projects</a>
                            <a class="dropdown-item" href="../sections.html#pricing"><i
                                    class="nc-icon nc-money-coins"></i>&nbsp; Pricing</a>
                            <a class="dropdown-item" href="../sections.html#testimonials"><i
                                    class="nc-icon nc-badge"></i>&nbsp; Testimonials</a>
                            <a class="dropdown-item" href="../sections.html#contact-us"><i
                                    class="nc-icon nc-mobile"></i>&nbsp; Contacts</a>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown"
                            href="javascript:void(0)">Examples</a>
                        <ul class="dropdown-menu dropdown-menu-right dropdown-danger">
                            <a class="dropdown-item" href="about-us.html"><i class="nc-icon nc-bank"></i>&nbsp; About
                                Us</a>
                            <a class="dropdown-item" href="add-product.html"><i class="nc-icon nc-basket"></i>&nbsp; Add
                                Product</a>
                            <a class="dropdown-item" href="blog-post.html"><i class="nc-icon nc-badge"></i>&nbsp; Blog
                                Post</a>
                            <a class="dropdown-item" href="blog-posts.html"><i
                                    class="nc-icon nc-bullet-list-67"></i>&nbsp; Blog Posts</a>
                            <a class="dropdown-item" href="contact-us.html"><i class="nc-icon nc-mobile"></i>&nbsp;
                                Contact Us</a>
                            <a class="dropdown-item" href="discover.html"><i class="nc-icon nc-world-2"></i>&nbsp;
                                Discover</a>
                            <a class="dropdown-item" href="ecommerce.html"><i class="nc-icon nc-send"></i>&nbsp;
                                Ecommerce</a>
                            <a class="dropdown-item" href="landing.html"><i class="nc-icon nc-spaceship"></i>&nbsp;
                                Landing</a>
                            <a class="dropdown-item" href="login.html"><i class="nc-icon nc-lock-circle-open"></i>&nbsp;
                                Login</a>
                            <a class="dropdown-item" href="product-page.html"><i class="nc-icon nc-album-2"></i>&nbsp;
                                Product Page</a>
                            <a class="dropdown-item" href="profile.html"><i class="nc-icon nc-single-02"></i>&nbsp;
                                Profile</a>
                            <a class="dropdown-item" href="register.html"><i class="nc-icon nc-bookmark-2"></i>&nbsp;
                                Register</a>
                            <a class="dropdown-item" href="search-with-sidebar.html"><i
                                    class="nc-icon nc-zoom-split"></i>&nbsp; Search</a>
                            <a class="dropdown-item" href="settings.html"><i
                                    class="nc-icon nc-settings-gear-65"></i>&nbsp; Settings</a>
                            <a class="dropdown-item" href="twitter-redesign.html"><i
                                    class="nc-icon nc-tie-bow"></i>&nbsp; Twitter</a>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-round btn-danger" href="{{route('user.show_cart')}}">
                            <i class="nc-icon nc-cart-simple"></i> Buy now
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="wrapper">
        <div class="page-header page-header-small"
            style="background-image: url('{{asset('image/rodrigo-ardilha.jpg')}}');">
            <div class="filter"></div>
        </div>
        <div class="profile-content section">
            <div class="container">
                <div class="row">
                    <div class="profile-picture">
                        <div class="fileinput fileinput-new" data-provides="fileinput">
                            <div class="fileinput-new img-no-padding">
                                <img src="{{asset('storage/'.$user->avatar)}}" alt="...">
                            </div>
                            <div class="name">
                                <h4 class="title text-center">
                                    {{$user->name}}<br /><small>{{$user->birth_of_date}}</small></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 ml-auto mr-auto text-center">
                        <p>{{$user->address}}</p>
                        <br />
                        <btn class="btn btn-outline-default btn-round"><i class="fa fa-cog"></i> Settings</btn>
                    </div>
                </div>
                <br />
                <div class="nav-tabs-navigation">
                    <div class="nav-tabs-wrapper">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#follows" role="tab">Follows</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#following" role="tab">Following</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="follows" role="tabpanel">
                        <div class="row">
                            <div class="col-md-6 ml-auto mr-auto">
                                <ul class="list-unstyled follows">
                                    <li>
                                        <div class="row">
                                            <div class="col-md-2 col-3">
                                                <img src="{{asset('image/clem-onojeghuo-1.jpg')}}" alt="Circle Image"
                                                    class="img-circle img-no-padding img-responsive">
                                            </div>
                                            <div class="col-md-7 col-4">
                                                <h6>Lincoln<br /><small>Car Producer</small></h6>
                                            </div>
                                            <div class="col-md-3 col-2">
                                                <div class="unfollow">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                checked>
                                                            <span class="form-check-sign"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <hr />
                                    <li>
                                        <div class="row">
                                            <div class="col-md-2 col-3">
                                                <img src="{{asset('image/ayo-ogunseinde-1.jpg')}}" alt="Circle Image"
                                                    class="img-circle img-no-padding img-responsive">
                                            </div>
                                            <div class="col-md-7 col-4">
                                                <h6>Banks<br /><small>Singer</small></h6>
                                            </div>
                                            <div class="col-md-3 col-2">
                                                <div class="unfollow">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox" value="">
                                                            <span class="form-check-sign"></span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane text-center" id="following" role="tabpanel">
                        <h3 class="text-muted">Not following anyone yet :(</h3>
                        <button class="btn btn-warning btn-round">Find artists</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer section-dark">
        <div class="container">
            <div class="row">
                <nav class="footer-nav">
                    <ul>
                        <li><a href="https://www.creative-tim.com">Creative Tim</a></li>
                        <li><a href="http://blog.creative-tim.com">Blog</a></li>
                        <li><a href="https://www.creative-tim.com/license">Licenses</a></li>
                    </ul>
                </nav>
                <div class="credits ml-auto">
                    <span class="copyright">
                        © <script>
                            document.write(new Date().getFullYear())
                        </script>, made with <i class="fa fa-heart heart"></i> by Creative Tim
                    </span>
                </div>
            </div>
        </div>
    </footer>
</body>

<!-- Core JS Files -->
<script src="{{asset('js/jquery-3.2.1.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/jquery-ui-1.12.1.custom.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/popper.js')}}" type="text/javascript"></script>
<script src="{{asset('js/bootstrap2.min.js')}}" type="text/javascript"></script>

<!-- Plugin for Switches -->
<script src="{{asset('js/bootstrap-switch.min.js')}}"></script>

<!--  Plugins for Slider -->
<script src="{{asset('js/nouislider.js')}}"></script>

<!--  Plugins for Select -->
<script src="{{asset('js/bootstrap-select.js')}}"></script>

<!-- Control Center for Paper Kit: parallax effects, scripts for the example pages etc -->
<script src="{{asset('js/paper-kit.js')}}"></script>

</html>