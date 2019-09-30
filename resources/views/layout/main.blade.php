<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Bootstrap-ecommerce by Vosidiy">

    <title>@yield('title')</title>

    <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.ico">

    <!-- jQuery -->
    <script src="/js/jquery-2.0.0.min.js" type="text/javascript"></script>

    <!-- Bootstrap4 files-->
    <script src="/js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <link href="/css/bootstrap.css" rel="stylesheet" type="text/css" />

    <!-- Font awesome 5 -->
    <link href="/fonts/fontawesome/css/fontawesome-all.min.css" type="text/css" rel="stylesheet">

    <!-- plugin: owl carousel  -->
    <link href="/plugins/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="/plugins/owlcarousel/assets/owl.theme.default.css" rel="stylesheet">
    <script src="/plugins/owlcarousel/owl.carousel.min.js"></script>

    <!-- custom style -->
    <link href="/css/ui.css" rel="stylesheet" type="text/css" />
    <link href="/css/responsive.css" rel="stylesheet" media="only screen and (max-width: 1200px)" />

    <!-- custom javascript -->
    <script src="/js/script.js" type="text/javascript"></script>

    <script type="text/javascript">
        /// some script

        // jquery ready start
        $(document).ready(function() {
            // jQuery code

        });
        // jquery end
    </script>

</head>

<body>
    <header class="section-header">

        <section class="header-main shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="/"><img class="logo" src="/images/logos/logo-alibaba.png" alt="alibaba style e-commerce html template file" title="alibaba e-commerce html css theme"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTop" aria-controls="navbarTop" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="row-sm align-items-center">

                    <div class="col-lg-4-24 col-sm-3">
                        <div class="category-wrap dropdown py-1">
                            <button type="button" class="btn btn-light  dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bars"></i> Categories</button>
                            <div class="dropdown-menu">
                                @foreach($categories as $category)
                                <a class="dropdown-item" href="/category/{{$category->slug}}">{{$category->name}}</a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-11-24 col-sm-8">
                        <form action="/search" method="get" class="py-1">
                            <div class="input-group w-100">
                                <input name="query" id="query" type="text" class="form-control" style="width:50%;" placeholder="Search" @if(request()->input('query')) value="{{request()->input('query')}}" @endif>
                                <div class="input-group-append">
                                    <button class="btn btn-warning" type="submit" id="query">
                                        <i class="fa fa-search"></i> Search
                                    </button>
                                </div>
                            </div>
                        </form> <!-- search-wrap .end// -->
                    </div> <!-- col.// -->
                    <div class="col-lg-9-24 col-sm-12">
                        <div class="widgets-wrap float-right row no-gutters py-1">

                            <div class="col-auto">
                                <a href="/cart" class="widget-header">
                                    <div class="icontext">
                                        <div class="icon-wrap"><i class="text-warning icon-sm fa fa-shopping-cart"></i></div>
                                        <div class="text-wrap text-dark">
                                            Cart
                                            @if(Cart::instance('default')->count() > 0)
                                            <span>({{Cart::instance('default')->count()}})</span>
                                            @endif
                                        </div>
                                    </div>
                                </a>
                            </div> <!-- col.// -->
                            <div class="col-auto">
                                <div class="widget-header dropdown">
                                    <a href="#" data-toggle="dropdown" data-offset="20,10">
                                        <div class="icontext">
                                            <div class="icon-wrap"><i class="text-warning icon-sm fa fa-user"></i></div>
                                            <div class="text-wrap text-dark">
                                                Sign in <br>
                                                My account <i class="fa fa-caret-down"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <div class="dropdown-menu mr-5">
                                        <form class="px-4 py-3">
                                            <div class="form-group">
                                                <label>Email address</label>
                                                <input type="email" class="form-control" placeholder="email@example.com">
                                            </div>
                                            <div class="form-group">
                                                <label>Password</label>
                                                <input type="password" class="form-control" placeholder="Password">
                                            </div>
                                            <button type="submit" class="btn btn-primary">Sign in</button>
                                        </form>
                                        <hr class="dropdown-divider">
                                        <a class="dropdown-item" href="#">Have account? Sign up</a>
                                        <a class="dropdown-item" href="#">Forgot password?</a>
                                    </div> <!--  dropdown-menu .// -->
                                </div> <!-- widget-header .// -->
                            </div> <!-- col.// -->
                        </div> <!-- widgets-wrap.// row.// -->
                    </div> <!-- col.// -->
                </div> <!-- row.// -->
            </div> <!-- container.// -->
        </section> <!-- header-main .// -->
    </header> <!-- section-header.// -->
    @yield('content')
    <!-- ========================= FOOTER ========================= -->
    <footer class="section-footer bg-secondary">
        <div class="container">
            <section class="footer-top padding-top">
                <div class="row">
                    <aside class="col-sm-3 col-md-3 white">
                        <h5 class="title">Customer Services</h5>
                        <ul class="list-unstyled">
                            <li> <a href="#">Help center</a></li>
                            <li> <a href="#">Money refund</a></li>
                            <li> <a href="#">Terms and Policy</a></li>
                            <li> <a href="#">Open dispute</a></li>
                        </ul>
                    </aside>
                    <aside class="col-sm-3  col-md-3 white">
                        <h5 class="title">My Account</h5>
                        <ul class="list-unstyled">
                            <li> <a href="#"> User Login </a></li>
                            <li> <a href="#"> User register </a></li>
                            <li> <a href="#"> Account Setting </a></li>
                            <li> <a href="#"> My Orders </a></li>
                            <li> <a href="#"> My Wishlist </a></li>
                        </ul>
                    </aside>
                    <aside class="col-sm-3  col-md-3 white">
                        <h5 class="title">About</h5>
                        <ul class="list-unstyled">
                            <li> <a href="#"> Our history </a></li>
                            <li> <a href="#"> How to buy </a></li>
                            <li> <a href="#"> Delivery and payment </a></li>
                            <li> <a href="#"> Advertice </a></li>
                            <li> <a href="#"> Partnership </a></li>
                        </ul>
                    </aside>
                    <aside class="col-sm-3">
                        <article class="white">
                            <h5 class="title">Contacts</h5>
                            <p>
                                <strong>Phone: </strong> +123456789 <br>
                                <strong>Fax:</strong> +123456789
                            </p>

                            <div class="btn-group white">
                                <a class="btn btn-facebook" title="Facebook" target="_blank" href="#"><i class="fab fa-facebook-f  fa-fw"></i></a>
                                <a class="btn btn-instagram" title="Instagram" target="_blank" href="#"><i class="fab fa-instagram  fa-fw"></i></a>
                                <a class="btn btn-youtube" title="Youtube" target="_blank" href="#"><i class="fab fa-youtube  fa-fw"></i></a>
                                <a class="btn btn-twitter" title="Twitter" target="_blank" href="#"><i class="fab fa-twitter  fa-fw"></i></a>
                            </div>
                        </article>
                    </aside>
                </div> <!-- row.// -->
                <br>
            </section>
            <section class="footer-bottom row border-top-white">
                <div class="col-sm-6">
                    <p class="text-md-right text-white-50">
                        Copyright &copy <br>
                    </p>
                </div>
            </section> <!-- //footer-top -->
        </div><!-- //container -->
    </footer>
    <!-- ========================= FOOTER END // ========================= -->

</body>

</html>