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

<body class="buy-product">
    <!--         default navbar with notifications     -->
    <nav class="navbar navbar-expand-lg fixed-top bg-danger navbar-transparent" color-on-scroll="100">
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


    <div class="wrapper">
        <div class="page-header page-header-xs"
            style="background-image: url('{{asset('image/638300428076886325_F-C1_1200x300.webp')}}');">
            <div class="filter"></div>
        </div>
        <div class="main">
            <div class="section">
                <div class="container">
                    <div class="row title-row">
                        <div class="col-md-2">
                            <h4 class="shop">Shop</h4>
                        </div>
                        <div class="col-md-4 ml-auto">
                            <div class="pull-right">
                                <span class="text-muted">Order Status</span> <button class="btn btn-link"> <i
                                        class="fa fa-shopping-cart"></i> 0 Items</button>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-7 col-sm-6">

                            <div id="carousel" class="ml-auto mr-auto">
                                <div class="card page-carousel">
                                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                        <ol class="carousel-indicators">
                                            <li data-target="#carouselExampleIndicators" data-slide-to="0"
                                                class="active"></li>
                                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                                        </ol>
                                        <div class="carousel-inner" role="listbox">
                                            <div class="carousel-item active">
                                                <img class="d-block img-fluid"
                                                    src="{{asset('storage/'.$product->image)}}" alt="Awesome Item">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <p>Somewhere</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block img-fluid"
                                                    src="{{asset('storage/'.$product->image_second)}}"
                                                    alt="Awesome Item">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <p>Somewhere else</p>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block img-fluid"
                                                    src="{{asset('storage/'.$product->image_third)}}"
                                                    alt="Awesome Item">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <p>Here it is</p>
                                                </div>
                                            </div>

                                        </div>

                                        <a class="left carousel-control carousel-control-prev"
                                            href="#carouselExampleIndicators" role="button" data-slide="prev">
                                            <span class="fa fa-angle-left"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="right carousel-control carousel-control-next"
                                            href="#carouselExampleIndicators" role="button" data-slide="next">
                                            <span class="fa fa-angle-right"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>
                            </div> <!-- end carousel -->

                        </div>
                        <div class="col-md-5 col-sm-6">
                            <h2> {{$product->name}} </h2>
                            <h4 class="price"><strong>{{$product->price}} VND</strong></h4>
                            <hr />
                            <p style="white-space: pre-line;">{{$product->description}}</p>
                            <span class="label label-default shipping">Free shipping to all province </span>

                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <label>Select Payment</label>
                                    <div class="form-group">
                                        <select name="huge" class="selectpicker"
                                            data-style="btn btn-outline-default btn-block btn-round" data-menu-style="">
                                            <option value="1">0 VND installment payment</option>
                                            <option value="2">online payment</option>
                                            <option value="3">Payment on delivery (COD)</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <hr />
                            <div class="row">
                                <div class="col-md-7 offset-md-5 col-sm-8">
                                    <a href="{{route('user.add_to_cart', $product)}}">
                                        <button class="btn btn-danger btn-block btn-round">Add to Cart &nbsp;<i
                                                class="fa fa-chevron-right"></i></button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section">
                <div class="container">
                    <div class="row card-body-row">
                        <div class="col-md-4 col-sm-4">
                            <div class="info">
                                <div class="icon icon-warning">
                                    <i class="nc-icon nc-delivery-fast"></i>
                                </div>
                                <div class="description">
                                    <h4 class="info-title"> 2 Days Delivery </h4>
                                    <p>Spend your time generating new ideas. You don't have to think of implementing
                                        anymore.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="info">
                                <div class="icon icon-danger">
                                    <i class="nc-icon nc-credit-card"></i>
                                </div>
                                <div class="description">
                                    <h4 class="info-title"> Refundable Policy </h4>
                                    <p>Larger, yet dramatically thinner. More powerful, but remarkably power efficient.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="info">
                                <div class="icon icon-success">
                                    <i class="nc-icon nc-bulb-63"></i>
                                </div>
                                <div class="description">
                                    <h4 class="info-title"> Popular Item </h4>
                                    <p>Choose from a veriety of colors resembling sugar paper pastels.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr />
                    <p>What to find out more about how we build our stuff? <a class="link-danger">Learn more.</a></p>
                    <hr />
                    <div class="faq">

                        <h4>Frequently Asked Questions</h4> <br />
                        <div id="acordeon">
                            <div id="accordion" role="tablist" aria-multiselectable="true">
                                <div class="card no-transition">
                                    <div class="card-header card-collapse" role="tab" id="headingOne">
                                        <h5 class="mb-0 panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion"
                                                href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                Default Collapsible Item 1
                                                <i class="nc-icon nc-minimal-down"></i>
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne">
                                        <div class="card-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                            richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard
                                            dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                                            tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
                                            assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore
                                            wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                                            vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic
                                            synth nesciunt you probably haven't heard of them accusamus labore
                                            sustainable VHS.
                                        </div>
                                    </div>
                                    <div class="card-header card-collapse" role="tab" id="headingTwo">
                                        <h5 class="mb-0 panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion"
                                                href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Default Collapsible Item 2
                                                <i class="nc-icon nc-minimal-down"></i>
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                                        <div class="card-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                            richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard
                                            dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                                            tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
                                            assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore
                                            wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                                            vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic
                                            synth nesciunt you probably haven't heard of them accusamus labore
                                            sustainable VHS.
                                        </div>
                                    </div>
                                    <div class="card-header card-collapse" role="tab" id="headingThree">
                                        <h5 class="mb-0 panel-title">
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion"
                                                href="#collapseThree" aria-expanded="false"
                                                aria-controls="collapseThree">
                                                Default Collapsible Item 3
                                                <i class="nc-icon nc-minimal-down"></i>
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseThree" class="collapse" role="tabpanel"
                                        aria-labelledby="headingThree">
                                        <div class="card-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                            richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard
                                            dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                                            tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
                                            assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore
                                            wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                                            vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic
                                            synth nesciunt you probably haven't heard of them accusamus labore
                                            sustainable VHS.
                                        </div>
                                    </div>
                                </div>
                            </div><!--  end acordeon -->
                        </div>

                    </div>
                    <div class="row add-row">
                        <div class="col-md-4 col-sm-4">
                            <h4>Complete the Look</h4>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <h5>Full-Grain Leather Briefcase</h5>
                            <p class="price"><strong>&euro; 975.00</strong></p>

                            <p>Constructed from robust full-grain leather, it's finished with the label's 'city webbing'
                                - a rich take on the brand's signature stripes.</p>
                            <br />
                            <button class="btn btn-danger btn-round"> Add to Cart</button>
                        </div>
                        <div class="col-md-3 ml-auto col-sm-4">
                            <img src="../assets/img/gallery/paul-smith.jpg" alt="Rounded Image"
                                class="img-rounded img-responsive">
                        </div>
                    </div>
                </div>
            </div>
            <div class="section section-dark">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h4>Similar Products</h4><br />
                        </div>
                        @foreach ($similar_products as $item)
                        <div class="col-md-4 col-sm-4">
                            <div class="card card-product card-plain">
                                <div class="card-image">
                                    <a href="{{route('user.product_page', $item)}}">
                                        <img src="{{asset('storage/'.$item->image)}}" alt="Rounded Image"
                                            class="img-rounded img-responsive">
                                    </a>
                                    <div class="card-body">
                                        <div class="card-description">
                                            <h5 class="card-title">{{$item->name}}</h5>
                                            <p class="card-description">{{$item->type}}</p>
                                        </div>
                                        <div class="actions">
                                            <h5>{{$item->price}} vnd</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>


    <footer class="footer section-black">
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