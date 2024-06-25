<html lang="en" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light" data-menu-styles="dark" data-toggled="close">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SPRUHA - Bootstrap 5 Premium Admin &amp; Dashboard Template</title>
    <meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
    <meta name="Author" content="Spruko Technologies Private Limited">
    <meta name="keywords" content="admin,admin dashboard,admin panel,admin template,bootstrap,clean,dashboard,flat,jquery,modern,responsive,premium admin templates,responsive admin,ui,ui kit.">
    <!-- Favicon -->
    <!-- <link rel="icon" href="../assets/images/brand-logos/favicon.ico" type="image/x-icon"> -->
    <!-- Authentication-main Js -->
    <script src="{{ asset('admin-assets/js/authentication-main.js') }}"></script> <!-- Bootstrap Css -->
    <link id="style" href="{{ asset('admin-assets/libs/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet"> <!-- Style Css -->
    <link href="{{ asset('admin-assets/css/styles.min.css') }}" rel="stylesheet"> <!-- Icons Css -->
    <link href="{{ asset('admin-assets/css/icons.css') }}" rel="stylesheet">
    <script>
        if (localStorage.spruhalandingdarktheme) {
            document.querySelector("html").setAttribute("data-theme-mode", "dark")
        }
        if (localStorage.spruhalandingrtl) {
            document.querySelector("html").setAttribute("dir", "rtl")
            document.querySelector("#style")?.setAttribute("href", "{{ asset('admin-assets/libs/bootstrap/css/bootstrap.rtl.min.css') }}");
        }
    </script>
    <meta http-equiv="imagetoolbar" content="no">
    <style type="text/css">
        input,textarea{-webkit-touch-callout:default;-webkit-user-select:auto;-khtml-user-select:auto;-moz-user-select:text;-ms-user-select:text;user-select:text} *{-webkit-touch-callout:none;-webkit-user-select:none;-khtml-user-select:none;-moz-user-select:-moz-none;-ms-user-select:none;user-select:none} 
        
    </style>
    <style type="text/css" media="print">

    </style>
</head>

<body class="error-1" cz-shortcut-listen="true">

    <div class="page main-signin-wrapper"> <!-- Start::row-1 -->
        <div class="row signpages text-center">
            <div class="col-md-12">
                <div class="card mb-0">
                    <div class="row row-sm">
                        <div class="col-lg-6 col-xl-5 d-none d-lg-block text-center bg-primary details">
                            <div class="mt-5 pt-4 p-2 position-absolute"> 
                                <a href="{{ url('/') }}">
                                    <img src="{{ asset('admin-assets/images/brand-logos/desktop-white.png') }}" class="header-brand-img mb-4 d-none" alt="logo"> 
                                </a>
                                <div class="clearfix"></div> 
                                <img src="{{ asset('admin-assets/images/svgs/user.svg') }}" class="ht-100 mb-0 d-none" alt="user">
                                <h5 class="mt-4">Create Your Account</h5> <span class="text-white-6 fs-13 mb-5 mt-xl-0">Signup to create, discover and connect with the global community</span>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-7 col-xs-12 col-sm-12 login_form ">
                            <div class="main-container container-fluid">
                                <div class="row row-sm">
                                    <div class="card-body mt-2 mb-2">
                                        <div class="clearfix"></div>
                                        <form action="{{ route('admin.authenticate') }}" method="post">
                                            @csrf
                                            <h5 class="text-start mb-2">Signin to Your Account</h5>
                                            <p class="mb-4 text-muted fs-13 ms-0 text-start">Signin to create, discover and connect with the global community</p>
                                            
                                            @include('admin.message')

                                            <div class="form-group text-start"> 
                                                <label class="form-label">Email</label>
                                                <input class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="Enter your email" type="text" value="{{ old('email') }}">
                                            </div>
                                            @error('email')
                                                <p style="color: red; text-align: start;">{{ $message }}</p>
                                            @enderror

                                            <div class="form-group text-start"> 
                                                <label class="form-label">Password</label> 
                                                <input class="form-control @error('password') is-invalid @enderror" name="password" id="passowrd" placeholder="Enter your password" type="password"> 
                                            </div>
                                            @error('password')
                                                <p style="color: red; text-align: start;">{{ $message }}</p>
                                            @enderror

                                            <div class="d-grid">
                                                <button type="submit" class="btn btn-primary">Sign In</button>
                                            </div>
                                        </form>
                                        <div class="text-start mt-5 ms-0">
                                            <div class="mb-1"><a href="forgot.html">Forgot password?</a></div>
                                            <div>Don't have an account? <a href="signup.html">Register Here</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End::row-1 -->
    </div> <!-- Custom-Switcher JS -->


    <script src="{{ asset('admin-assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>