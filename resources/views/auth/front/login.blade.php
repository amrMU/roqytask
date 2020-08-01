<!DOCTYPE html>
<html>

<head>
    <title> Smart Movies </title>
    <meta charset="UTF-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="author" content="RoQaY">
    <meta name="robots" content="index, follow">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content=" Smart Movies website">
    <meta name="keywords" content=" Smart Movies ">
    <meta name="csrf-token" content="V2G8zLS7dL5HzdfwxaBDewvJvAKCyeThQE4NBtJv">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('site/')}}/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('site/')}}/css/fontawesome.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('site/')}}/css/animate.css">
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('site/')}}/css/all.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('site/')}}/css/style.css">
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('site/')}}/css/responsive.css">
</head>

<body>

    <div class="body_wrapper">
        <div class="preloader">
            <div class="preloader-loading">
                <img src="{{asset('site/')}}/images/logo-m.png" data-src="{{asset('site/')}}/images/logo-m.png" class="lazyload">
            </div>
        </div>

        <div class="top_nav">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8">
                        <ul class="d-flex about-site">
                            <li><a href="#">Questions</a></li>
                            <li><a href="#">Team</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Terms Of Privacy</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4">
                        <ul class="d-flex social ">
                            <li> <a href="#"> <i class="fab fa-facebook-f"></i> </a></li>
                            <li> <a href="#"> <i class="fab fa-twitter"></i> </a></li>
                            <li> <a href="#"> <i class="fab fa-instagram"></i> </a></li>
                            <li> <a href="#"> <i class="fab fa-snapchat-ghost"></i> </a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
       <div class="logo text-center">
        <a class="navbar-brand" href="index.html"><img src="{{asset('site/')}}/images/logo-m.png" data-src="{{asset('site/')}}/images/logo-m.png"
            class="lazyload"></a>
       </div>
      
        <section class="contact-us bg-light">
            <div class="container">
                <h3 class="text-center">Login To Join Us</h3>
             
                <div class="row justify-content-center">
                    <div class="col-md-7 col-sm-10">
                        <div class="contact-form">
                            <form method="POST" action="{{ route('login') }}">
                        @csrf
                                <div class="form-group">
                                    <label for="inputEmail">Your Email Addrss</label>
                                    <input type="email" id="inputEmail" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}"  name="email"
                                        placeholder="Write Your Email">
                                         @if ($errors->has('email'))
                                    <span class="invalid-feedback " role="alert">
                                        <strong class="text-danger">{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword">Your Password </label>
                                    <input type="password" id="inputPassword" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"  placeholder=" Write Your password">
                                    @if ($errors->has('password'))
                                    <span class="invalid-feedback " role="alert">
                                        <strong class="text-danger">{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label class="checkbox-inline">
                                            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} class="styled" >
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                               

                                <div class="text-center p-2">
                                    <button type="submit" class="btn btn-gradiant">
                                       login 
                                    </button>
                                </div>

                                <div >
                                   <b> <span>Don't Have An Account ?</span> <a href="{{url('/register')}}" class="main-color ">Sign Up</a></b>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <footer class="pt-0"> 
            <div class="copyrights">
                <p>© All Rights reserved to Smart Movies website 2017</p>
            </div>
        </footer>
        <span class="scroll-top"> <a href="#"><i class="fas fa-chevron-up"></i></a> </span>

  
    </div>

    <script src="{{asset('site/')}}/js/jquery-3.3.1.min.js"></script>
    <script src="{{asset('site/')}}/js/bootstrap.min.js"></script>
    <script src="{{asset('site/')}}/js/popper.min.js"></script>
    <script src="{{asset('site/')}}/js/lazysizes.min.js"></script>
    <script src="{{asset('site/')}}/js/fontawesome.min.js"></script>
    <script src="{{asset('site/')}}/js/all.min.js"></script>
    <script src="{{asset('site/')}}/js/wow.min.js"></script>
    <script src="{{asset('site/')}}/js/main.js"></script>
</body>

</html>