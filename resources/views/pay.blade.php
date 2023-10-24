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

<body class="add-product">
    <nav class="navbar navbar-expand-lg fixed-top bg-danger nav-down">
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
        <div class="main">
            <div class="section">
                <div class="container">
                    <h3>Pay Form</h3>
                    <form action="{{route('user.check_out')}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-5 col-sm-5">
                                <h6>Product List:</h6>
                                <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                    @php
                                    $totalPrice = 0;
                                    @endphp
                                    <table class="table" id="table-index">
                                        <thead class="thead-dark">
                                            <tr style="font-size: 12px; font-weight:600">
                                                <th>Image</th>
                                                <th>Name</th>
                                                <th>Price</th>
                                                <th>Quantity</th>
                                            </tr>
                                        </thead>
                                        @foreach ($cart as $each)
                                        <tr class="my-2">
                                            <td>
                                                <img src="{{asset('storage/'.$each['product']->image)}}" alt=""
                                                    height="120px">
                                            </td>
                                            <td> {{ $each['product']->name }} </td>
                                            <td> {{ $each['product']->price }} </td>
                                            <td class="d-flex">
                                                <span class="quantity-display my-5"
                                                    style="font-size: 14px; font-weight:600">{{ $each['quantity'] }}</span>
                                            </td>
                                        </tr>
                                        @php
                                        $totalPrice += $each['product']->price * $each['quantity'];
                                        @endphp
                                        @endforeach
                                    </table>
                                </div>
                            </div>

                            <div class="col-md-7 col-sm-7">
                                <input type="number" value="{{$user->id}}" hidden name="user_id">
                                <input type="number" value="0" hidden name="status">
                                <div class="form-group">
                                    <h6>Name <span class="icon-danger">*</span></h6>
                                    <input type="text" class="form-control border-input" value="{{$user->name}}"
                                        placeholder="enter the name of receiver here..." name="receiver_name">
                                </div>
                                <div class="form-group">
                                    <h6>Address <span class="icon-danger">*</span></h6>
                                    <input type="text" class="form-control border-input" value="{{$user->address}}"
                                        placeholder="enter the address to receive here..." name="receiver_address">
                                </div>
                                <div class="row price-row">
                                    <div class="col-md-6">
                                        <h6>Phone Number <span class="icon-danger">*</span></h6>
                                        <div class="input-group border-input">
                                            <input type="text" placeholder="enter the phone number of receiver"
                                                value="{{$user->phone_number}}" class="form-control border-input"
                                                name="receiver_phone_number">
                                            <span class="input-group-addon"></span>
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <h6>Total Payment</h6>
                                        <div class="input-group border-input">
                                            <input type="number" value="{{$totalPrice}}" placeholder="enter discount"
                                                class="form-control border-input" name="total_payment" readonly>
                                            <span class="input-group-addon">VND</span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>


                        <div class="row buttons-row d-flex justify-content-between">
                            <div class="col-md-4 col-sm-4">
                                <a href="{{route('user.index')}}">
                                    <button class="btn btn-outline-danger btn-block btn-round"
                                        type="button">Cancel</button>
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-4">
                                <button class="btn btn-primary btn-block btn-round" type="submit">Confirm</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <footer class="footer footer-black">
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

<!-- Control Center for Paper Kit: parallax effects, scripts for the example pages etc -->
<script src="{{asset('js/paper-kit.js')}}"></script>

</html>