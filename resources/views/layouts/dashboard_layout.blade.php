<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *Must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Project_Name | Home</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('images/core-img/favicon.ico') }}">

    <!-- Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>

<body>
<!-- Preloader -->
<div id="preloader">
    <div class="spinner"></div>
</div>

    <!-- Navbar Area -->
    <div class="clever-main-menu">
        <div class="classy-nav-container breakpoint-off">
            <!-- Menu -->
            <nav class="classy-navbar justify-content-between" id="cleverNav">

                <!-- Logo <a class="nav-brand" href="index.html"><img src="img/core-img/logo.png" alt=""></a> -->
                <a class="nav-brand" href="#">Project_Name</a>

                <!-- Navbar Toggler -->
                <div class="classy-navbar-toggler">
                    <span class="navbarToggler"><span></span><span></span><span></span></span>
                </div>

                <!-- Menu -->
                <div class="classy-menu">

                    <!-- Close Button -->
                    <div class="classycloseIcon">
                        <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                    </div>

                    <!-- Nav Start -->
                    <div class="classynav">
                    @if (Route::has('login'))
                        <ul>
                            <li><a href="/home">Home</a></li>
                            <!--
                            <li><a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="courses.html">Courses</a></li>
                                    <li><a href="single-course.html">Single Courses</a></li>
                                    <li><a href="instructors.html">Instructors</a></li>
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="blog-details.html">Single Blog</a></li>
                                    <li><a href="regular-page.html">Regular Page</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </li>
                            <li><a href="courses.html">Courses</a></li>
                            <li><a href="instructors.html">Instructors</a></li>
                            <li><a href="blog.html">Blog</a></li>
                            -->
                            <li><a href="#">Publication</a>
                                <ul class="dropdown">
                                    <li><a href="/publications">Impact</a></li>
                                    <li><a href="/qqsons">KKSON</a></li>
                                    <li><a href="/confs">Conferention</a></li>
                                </ul>
                            </li>
                            <!--<li><a href="/publications">Publications</a></li>-->
                            <li><a href="/teachers">Teachers</a></li>
                        </ul>
                        @else
                    @endif
                        <!-- Search Button -->
                        <div class="search-area">
                            <form action="#" method="post">
                                <input type="search" name="search" id="search" placeholder="Search">
                                <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </form>
                        </div>

                        <!-- Register / Login -->
                        <div class="register-login-area">
                            @if (Route::has('login'))
                                @auth
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item-logout" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                @else
                                    <a href="{{ route('login') }}" class="btn">Login</a>

                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="btn active">Register</a>
                                    @endif
                                @endauth
                            @endif
                        </div>

                    </div>
                    <!-- Nav End -->
                </div>
            </nav>
        </div>
    </div>
</header>
<!-- ##### Header Area End ##### -->

<!-- ##### Content Area Start ##### -->

<div class="main-content" style="overflow:auto">
    @yield('content')
</div>

<!-- ##### Content Area End ##### -->

<!-- ##### Footer Area Start ##### -->
<footer class="footer-area">
    <!-- Top Footer Area -->
    <div class="top-footer-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Footer Logo -->
                    <div class="footer-logo">
                        <a href="index.html"><img src="img/core-img/logo2.png" alt=""></a>
                    </div>
                    <!-- Copywrite -->
                    <p><a href="#"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- ##### Footer Area End ##### -->

<!-- ##### All Javascript Script ##### -->
<!-- jQuery-2.2.4 js -->
<script src="{{ asset('js/jquery/jquery-2.2.4.min.js') }}"></script>
<!-- Popper js -->
<script src="{{ asset('js/bootstrap/popper.min.js') }}"></script>
<!-- Bootstrap js -->
<script src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>
<!-- All Plugins js -->
<script src="{{ asset('js/plugins/plugins.js') }}"></script>
<!-- Active js -->
<script src="{{ asset('js/active.js') }}"></script>
</body>

</html>
