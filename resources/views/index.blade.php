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
    <style>
        @media (min-width: 600px) {
            .find-result {
                height: 390px;
                position: relative;
            }

            .find-bottom {
                position: absolute;
                bottom: 0;
            }
        }
    </style>
</head>

<body class="ecommerce">
    <nav class="navbar navbar-expand-lg fixed-top navbar-transparent nav-down" color-on-scroll="200">
        <div class="container">
            <div class="navbar-translate">
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{route('user.index')}}">LAPTOP WORLD</a>
                </div>
                <button class="navbar-toggler navbar-burger" type="button" data-toggle="collapse"
                    data-target="#navbarToggler" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar"></span>
                    <span class="navbar-toggler-bar"></span>
                    <span class="navbar-toggler-bar"></span>
                </button>
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
    <div class="page-header"
        style="background-image: url('{{asset('image/04_Augd1d317b15266ea6e98e8d26022ff0d9c.jpg')}}');">
        <div class="filter"></div>
        <div class="content-center">
            <div class="container text-center">
                <h1>Brace yourself!</h1>
                <h3>25% Off and Free global delivery for all products</h3>
            </div>
        </div>
    </div>

    <div class="wrapper">
        <div class="section latest-offers">
            <div class="container">
                <h3 class="section-title">Latest Offers</h3>
                <div class="row">
                    @foreach ($lastests as $lastest)
                    <div class="col-md-4">

                        <div class="card card-product card-plain">
                            <div class="card-image">
                                <a href="{{route('user.product_page', $lastest)}}">
                                    <img src="{{asset('storage/'.$lastest->image)}}" alt="Rounded Image"
                                        class="img-rounded img-responsive">
                                </a>
                                <div class="card-body">
                                    <div class="card-description">
                                        <h5 class="card-title"> {{$lastest->name}} </h5>
                                        <p class="card-description" style="white-space: pre-line;">
                                            {{$lastest->description}} </p>
                                    </div>
                                    <div class="price">
                                        <strike>19.000.000 vnd</strike> <span class="text-danger">
                                            {{$lastest->price}}
                                            vnd</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    @endforeach
                </div>
            </div>
        </div><!-- section -->

        <div class="section section-gray">
            <div class="container">
                <h3 class="section-title">Find what you need</h3>
                <div class="row">
                    <div class="col-md-3">
                        <div class="card card-refine">
                            <div class="panel-group" id="accordion" aria-multiselectable="true" aria-expanded="true">
                                <div class="card-header card-collapse" role="tab" id="priceRanger">
                                    <h5 class="mb-0 panel-title">
                                        <a class="" data-toggle="collapse" data-parent="#accordion" href="#priceRange"
                                            aria-expanded="true" aria-controls="collapseOne">
                                            Price Range
                                            <i class="nc-icon nc-minimal-down"></i>
                                        </a>
                                    </h5>
                                </div>
                                <div id="priceRange" class="collapse show" role="tabpanel" aria-labelledby="headingOne"
                                    aria-expanded="true">
                                    <div class="card-body">
                                        <form class="form-horizontal">
                                            <input type="text" type="search" class="form-control" name="price-search"
                                                value="{{ $price_search }} vnd">
                                        </form>
                                    </div>
                                </div>
                                <div class="card-header card-collapse" role="tab" id="designer">
                                    <h5 class="mb-0 panel-title">
                                        <a class="" data-toggle="collapse" data-parent="#accordion"
                                            href="#refineDesigner" aria-expanded="true" aria-controls="collapseThree">
                                            Company Made it
                                            <i class="nc-icon nc-minimal-down"></i>
                                        </a>
                                    </h5>
                                </div>
                                <div id="refineDesigner" class="collapse" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="card-body">

                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="" checked>
                                                All
                                                <span class="form-check-sign"></span>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="">
                                                Acne Studio
                                                <span class="form-check-sign"></span>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="">
                                                Alex Mill
                                                <span class="form-check-sign"></span>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="">
                                                Alexander McQueen
                                                <span class="form-check-sign"></span>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="">
                                                Alfred Dunhill
                                                <span class="form-check-sign"></span>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="">
                                                AMI
                                                <span class="form-check-sign"></span>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="">
                                                Berena
                                                <span class="form-check-sign"></span>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="">
                                                Berluti
                                                <span class="form-check-sign"></span>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="">
                                                Burberry Prorsum
                                                <span class="form-check-sign"></span>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="">
                                                Berluti
                                                <span class="form-check-sign"></span>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="">
                                                Calvin Klein
                                                <span class="form-check-sign"></span>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="">
                                                Club Monaco
                                                <span class="form-check-sign"></span>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="">
                                                Dolce & Gabbana
                                                <span class="form-check-sign"></span>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="">
                                                Gucci
                                                <span class="form-check-sign"></span>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="">
                                                Kolor
                                                <span class="form-check-sign"></span>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="">
                                                Lanvin
                                                <span class="form-check-sign"></span>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="">
                                                Loro Piana
                                                <span class="form-check-sign"></span>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="">
                                                Massimo Alba
                                                <span class="form-check-sign"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-header card-collapse" role="tab" id="color">
                                    <h5 class="mb-0 panel-title">
                                        <a class="" data-toggle="collapse" data-parent="#accordion" href="#colorMaker"
                                            aria-expanded="true" aria-controls="collapseTree">
                                            Colour
                                            <i class="nc-icon nc-minimal-down"></i>
                                        </a>
                                    </h5>
                                </div>
                                <div id="colorMaker" class="collapse" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="card-body">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="" checked>
                                                All
                                                <span class="form-check-sign"></span>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="">
                                                Blue
                                                <span class="form-check-sign"></span>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="">
                                                Brown
                                                <span class="form-check-sign"></span>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="">
                                                Gray
                                                <span class="form-check-sign"></span>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="">
                                                Green
                                                <span class="form-check-sign"></span>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="">
                                                Neutrals
                                                <span class="form-check-sign"></span>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="">
                                                Purple
                                                <span class="form-check-sign"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end card -->
                    </div>

                    <div class="col-md-9">
                        <div class="products">
                            <div class="row">
                                @foreach ($search_results as $search_result)
                                <div class="col-md-4 col-sm-4">
                                    <div class="card card-product card-plain">
                                        <div class="card-image find-result">
                                            <a href="{{route('user.product_page', $search_result)}}">
                                                <img src="{{asset('storage/'.$search_result->image)}}"
                                                    style="background-color: white" alt="Rounded Image"
                                                    class="img-rounded img-responsive">
                                            </a>
                                            <div class="card-body">
                                                <div class="card-description">
                                                    <h5 class="card-title"> {{$search_result->name}} </h5>
                                                    <p class="card-description"> {{$search_result->type}} </p>
                                                </div>
                                            </div>
                                            <div class="price find-bottom">
                                                <h5> {{$search_result->price}} vnd</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                                <div class="col-md-3 offset-md-4" style="position: absolute;
                                bottom: -5%;
                                
                                left: 50%;
                                transform: translateX(-50%);">
                                    <button rel="tooltip" title="This is a morphing button"
                                        class="btn btn-round btn-outline-default" id="successBtn" data-toggle="morphing"
                                        data-rotation-color="gray">Load more...</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- section -->


        <div class="section section-blog">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card card-blog">
                            <div class="card-image">
                                <a href="#pablo">
                                    <img class="img img-raised" src="{{asset('image/miguel-perales.jpg')}}">
                                </a>
                            </div>
                            <div class="card-body">
                                <h6 class="card-category text-info">Enterprise</h6>
                                <h5 class="card-title">
                                    <a href="#pablo">LinkedIn’s new desktop app arrives</a>
                                </h5>
                                <p class="card-description">
                                    LinkedIn is today launching its official desktop application for Windows 10,
                                    allowing the professional social networking service to... <br>
                                </p>
                                <hr>
                                <div class="card-footer">
                                    <div class="author">
                                        <a href="#pablo">
                                            <img src="{{asset('image/ayo-ogunseinde-1.jpg')}}" alt="..."
                                                class="avatar img-raised">
                                            <span>Mike John</span>
                                        </a>
                                    </div>
                                    <div class="stats">
                                        <i class="fa fa-clock-o" aria-hidden="true"></i> 5 min read
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card card-blog">
                            <div class="card-image">
                                <a href="#pablo">
                                    <img class="img img-raised" src="{{asset('image/roger-keller.jpg')}}">
                                </a>
                            </div>
                            <div class="card-body">
                                <h6 class="card-category text-success">
                                    Startups
                                </h6>
                                <h5 class="card-title">
                                    <a href="#pablo">MIT’s Cheetah 3 robot is built to save lives</a>
                                </h5>
                                <p class="card-description">
                                    The latest version of MIT’s Cheetah robot made its stage debut today at TC Sessions:
                                    Robotics in Cambridge, Mass. It’s a familiar project... <br>
                                </p>
                                <hr>
                                <div class="card-footer">
                                    <div class="author">
                                        <a href="#pablo">
                                            <img src="{{asset('image/kaci-baum-1.jpg')}}" alt="..."
                                                class="avatar img-raised">
                                            <span>Nickie Kelly</span>
                                        </a>
                                    </div>
                                    <div class="stats">
                                        <i class="fa fa-clock-o" aria-hidden="true"></i> 5 min read
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card card-blog">
                            <div class="card-image">
                                <a href="#pablo">
                                    <img class="img img-raised" src="{{asset('image/joshua-earlesz.jpg')}}">
                                </a>
                            </div>

                            <div class="card-body">
                                <h6 class="card-category text-danger">
                                    <i class="fa fa-free-code-camp" aria-hidden="true"></i> Enterprise
                                </h6>
                                <h5 class="card-title">
                                    <a href="#pablo">Lionel Richie says “Hello” to startup investors</a>
                                </h5>
                                <p class="card-description">
                                    Because developing a doctor-on-demand service that would allow personalized medical
                                    visits, booked through an app on a user’s phone is... <br>
                                </p>
                                <hr>
                                <div class="card-footer">
                                    <div class="author">
                                        <a href="#pablo">
                                            <img src="{{asset('image/clem-onojeghuo-1.jpg')}}" alt="..."
                                                class="avatar img-raised">
                                            <span>Mike John</span>
                                        </a>
                                    </div>
                                    <div class="stats">
                                        <i class="fa fa-clock-o" aria-hidden="true"></i> 5 min read
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- section -->
        <div class="subscribe-line subscribe-line-black">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-sm-8">
                        <form class="">
                            <div class="form-group">
                                <input type="text" value="" class="form-control" placeholder="Enter your email...">
                            </div>
                        </form>
                    </div>
                    <div class="col-md-3 col-sm-4">
                        <button type="button" class="btn btn-neutral btn-block btn-lg">Join Newsletter</button>
                    </div>
                </div>
            </div>
        </div>

        <footer class="footer footer-big">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-9">
                        <div class="links">
                            <ul class="uppercase-links">
                                <li>
                                    <a href="#paper-kit">
                                        Home
                                    </a>
                                </li>
                                <li>
                                    <a href="#paper-kit">
                                        Company
                                    </a>
                                </li>
                                <li>
                                    <a href="#paper-kit">
                                        Portfolio
                                    </a>
                                </li>
                                <li>
                                    <a href="#paper-kit">
                                        Team
                                    </a>
                                </li>
                                <li>
                                    <a href="#paper-kit">
                                        Blog
                                    </a>
                                </li>
                                <li>
                                    <a href="#paper-kit">
                                        Contact
                                    </a>
                                </li>


                            </ul>
                            <hr />

                            <div class="copyright">
                                © <script>
                                    document.write(new Date().getFullYear())
                                </script>, made with <i class="fa fa-heart heart"></i> by Creative Tim
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 ml-auto col-sm-2">
                        <div class="social-area">
                            <a href="#facebook" class="btn btn-neutral btn-round btn-just-icon btn-facebook">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                            <a href="#twitter" class="btn btn-neutral btn-just-icon btn-round btn-twitter">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </a>
                            <a href="#google" class="btn btn-neutral btn-just-icon btn-round btn-google">
                                <i class="fa fa-google-plus" aria-hidden="true"></i>
                            </a>
                            <a href="#pin" class="btn btn-neutral btn-just-icon btn-round btn-pinterest">
                                <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>




    </div> <!-- wrapper -->

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