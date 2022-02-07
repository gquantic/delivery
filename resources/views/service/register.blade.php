@extends('layouts.meta')

@section('page-styles')
    <link rel="stylesheet" href="{{ asset('css/base/pages/authentication.css') }}">
@endsection

@section('content')
    <div class="auth-wrapper auth-cover">
        <div class="auth-inner row m-0">
            <!-- Brand logo--><a class="brand-logo" href="index.html">
                <svg viewBox="0 0 139 95" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="28">
                    <defs>
                        <lineargradient id="linearGradient-1" x1="100%" y1="10.5120544%" x2="50%" y2="89.4879456%">
                            <stop stop-color="#000000" offset="0%"></stop>
                            <stop stop-color="#FFFFFF" offset="100%"></stop>
                        </lineargradient>
                        <lineargradient id="linearGradient-2" x1="64.0437835%" y1="46.3276743%" x2="37.373316%" y2="100%">
                            <stop stop-color="#EEEEEE" stop-opacity="0" offset="0%"></stop>
                            <stop stop-color="#FFFFFF" offset="100%"></stop>
                        </lineargradient>
                    </defs>
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="Artboard" transform="translate(-400.000000, -178.000000)">
                            <g id="Group" transform="translate(400.000000, 178.000000)">
                                <path class="text-primary" id="Path" d="M-5.68434189e-14,2.84217094e-14 L39.1816085,2.84217094e-14 L69.3453773,32.2519224 L101.428699,2.84217094e-14 L138.784583,2.84217094e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L6.71554594,44.4188507 C2.46876683,39.9813776 0.345377275,35.1089553 0.345377275,29.8015838 C0.345377275,24.4942122 0.230251516,14.560351 -5.68434189e-14,2.84217094e-14 Z" style="fill: currentColor"></path>
                                <path id="Path1" d="M69.3453773,32.2519224 L101.428699,1.42108547e-14 L138.784583,1.42108547e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L32.8435758,70.5039241 L69.3453773,32.2519224 Z" fill="url(#linearGradient-1)" opacity="0.2"></path>
                                <polygon id="Path-2" fill="#000000" opacity="0.049999997" points="69.3922914 32.4202615 32.8435758 70.5039241 54.0490008 16.1851325"></polygon>
                                <polygon id="Path-21" fill="#000000" opacity="0.099999994" points="69.3922914 32.4202615 32.8435758 70.5039241 58.3683556 20.7402338"></polygon>
                                <polygon id="Path-3" fill="url(#linearGradient-2)" opacity="0.099999994" points="101.428699 0 83.0667527 94.1480575 130.378721 47.0740288"></polygon>
                            </g>
                        </g>
                    </g>
                </svg>
                <h2 class="brand-text text-primary ms-1">Vuexy</h2>
            </a>
            <!-- /Brand logo-->
            <!-- Left Text-->
            <div class="d-none d-lg-flex col-lg-8 align-items-center p-5">
                <div class="w-100 d-lg-flex align-items-center justify-content-center px-5"><img class="img-fluid" src="/images/pages/login-v2.svg" alt="Login V2" /></div>
            </div>
            <!-- /Left Text-->
            <!-- Login-->
            <div class="d-flex col-lg-4 align-items-center auth-bg px-2 p-lg-5">
                <div class="col-12 col-sm-8 col-md-6 col-lg-12 px-xl-2 mx-auto">
                    <h2 class="card-title fw-bold mb-1">Добро пожаловать в {{ config('app.name') }}! 🚀</h2>
                    <p class="card-text mb-2">Зарегистрируйтесь в системе бесплатно!</p>
                    <form class="auth-login-form mt-2" action="{{ route('register') }}" method="POST">
                        @csrf

                        <div class="mb-1">
                            <label class="form-label" for="login-email">Название компании, либо ИП</label>
                            <input class="form-control @error('name') is-invalid @enderror" id="name" type="text" name="name" value="{{ old('name') }}" autocomplete="name" placeholder="EcuTravel" />

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="mb-1">
                            <label class="form-label" for="login-email">Почта</label>
                            <input class="form-control @error('email') is-invalid @enderror" id="login-email" type="text" name="email" value="{{ old('email') }}" autocomplete="email" placeholder="john@example.com" aria-describedby="login-email" autofocus="" tabindex="1" />

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="mb-1">
                            <div class="d-flex justify-content-between">
                                <label class="form-label" for="login-password">Пароль</label>
                            </div>
                            <div class="input-group input-group-merge form-password-toggle">
                                <input class="form-control form-control-merge @error('password') is-invalid @enderror" type="password" name="password" placeholder="············" aria-describedby="login-password" autocomplete="current-password" tabindex="2" />
                                <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                            </div>

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="mb-1">
                            <label class="form-label" for="login-email">Повторите пароль</label>
                            <input class="form-control form-control-merge" type="password" name="password_confirmation" required autocomplete="new-password" />
                        </div>

                        <div class="mb-1 mt-2">
                            <div class="form-check">
                                <input class="form-check-input" name="remember" id="remember-me" type="checkbox" tabindex="3" />
                                <label class="form-check-label" for="remember-me"> Я соглашаюсь с <a href="">условиями использования сервиса</a></label>
                            </div>
                        </div>

                        <button class="btn btn-primary w-100" tabindex="4" type="submit">Регистрация</button>
                    </form>
                    <p class="text-center mt-2"><span>Уже зарегистрированы?</span><a href="/service/authorization"><span>&nbsp;Войдите</span></a></p>
                    <div class="divider my-2">
                        <div class="divider-text">или</div>
                    </div>
                    <div class="auth-footer-btn d-flex justify-content-center">
                        <a class="btn btn-facebook" href="#"><i data-feather="facebook"></i></a>
                        <a class="btn btn-twitter white" href="#"><i data-feather="twitter"></i></a>
                        <a class="btn btn-google" href="#"><i data-feather="mail"></i></a>
                    </div>
                </div>
            </div>
            <!-- /Login-->
        </div>
    </div>
@endsection

@section('post-meta')
    <script src="{{ asset('js/scripts/pages/auth-login.js') }}"></script>
@endsection