@extends ('layouts.app')

@section('titre', 'steam | index')

@section('contenue')

<!-- Normal Breadcrumb Begin -->
<section class="normal-breadcrumb set-bg" data-setbg="img/normal-breadcrumb.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="normal__breadcrumb__text">
                    <h2>Login</h2>
                    <p>Welcome to the official   <span>PL<i class="fa fa-gamepad fa-21" aria-hidden="true"></i><span
                    class="fw-1 fs-5"></span>Y</span>.</span> </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Normal Breadcrumb End -->

<!-- Login Section Begin -->
<section class="login spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="login__form">
                    @if (session('success'))
                        <div class="alert alert-success form1">

                            {{session('success')}}


                        </div>
                    @endif
                    @if (isset($errors) && $errors->any())
                    @foreach ($errors->all() as $error)
                    <div class="alert alert-danger form1">
                        {{$error}}
                        </div>
                    @endforeach

                    @endif
                   
                    <h3>Login</h3>
                    <form method="post" action="{{ route('login')}}">
                        @csrf
                        <div class="input__item">
                            <input type="email" placeholder="Email address" name="email" value="{{old('email')}}">
                            <span class="icon_mail"></span>
                            @if (isset($errors) && $errors->any())

                                @foreach ($errors->get('email') as $error)
                                    <p class="text-danger"><span class="text-danger">*</span>{{$error}}</p>
                                @endforeach

                            @endif
                        </div>
                        <div class="input__item">
                            <input type="password" placeholder="Password" name="password" value="{{old('password')}}">
                            <span class="icon_lock"></span>
                            @if (isset($errors) && $errors->any())

                                @foreach ($errors->get('password') as $error)
                                    <p class="text-danger"><span class="text-danger">*</span>{{$error}}</p>
                                @endforeach

                            @endif
                        </div>
                        <button type="submit" class="site-btn">Login Now</button>
                    </form>
                    <a href="#" class="forget_pass">Forgot Your Password?</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="login__register">
                    <h3>Dont’t Have An Account?</h3>
                    <a href="#" class="primary-btn">Register Now</a>
                </div>
            </div>
        </div>
        <div class="login__social">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-6">
                    <div class="login__social__links">
                        <span>or</span>
                        <ul>
                            <li><a href="#" class="facebook"><i class="fa fa-facebook"></i> Sign in With
                                    Facebook</a></li>
                            <li><a href="#" class="google"><i class="fa fa-google"></i> Sign in With Google</a>
                            </li>
                            <li><a href="#" class="twitter"><i class="fa fa-twitter"></i> Sign in With Twitter</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Login Section End -->
@endsection