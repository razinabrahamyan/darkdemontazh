<!DOCTYPE html>
<html class="loading dark-layout" lang="en" data-layout="dark-layout" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    @include('admin.includes.meta')
    <script src="{{asset('admin/custom-js/admin-panel.js')}}" ></script>
    <title></title>
    <link rel="stylesheet" type="text/css" href="{{asset('admin_assets/css/plugins/forms/form-validation.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin_assets/css/pages/page-auth.css')}}">
</head>
<body>

<!-- BEGIN: Header-->
{{--@include('admin.includes.header')--}}
<!-- END: Header-->

<!-- BEGIN: Main Menu-->

<div class="container ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <div class="auth-wrapper auth-v1 px-2">
                <div class="auth-inner py-2">
                    <!-- Login v1 -->
                    <div class="card mb-0">
                        <div class="card-body">
                            <a href="javascript:void(0);" class="brand-logo">
                                <h2 class="brand-text text-primary ml-1" style="text-align: center">DemontazhPro Panel</h2>
                            </a>


                            <form class="auth-login-form mt-2" action="{{route('login')}}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="login-email" class="form-label">Эл. почта</label>
                                    <input type="text" class="form-control" id="login-email" name="email" placeholder="Введите адрес эл. почты" aria-describedby="login-email" tabindex="1" autofocus />
                                </div>

                                <div class="form-group">
                                    <div class="d-flex justify-content-between">
                                        <label for="login-password">Пароль</label>
                                    </div>
                                    <div class="input-group input-group-merge form-password-toggle">
                                        <input type="password" class="form-control form-control-merge" id="login-password" name="password" tabindex="2" placeholder="Введите пароль" aria-describedby="login-password" />
                                        <div class="input-group-append">
                                            <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-primary btn-block" tabindex="4">Войти</button>
                            </form>
                        </div>
                    </div>
                    <!-- /Login v1 -->
                </div>
            </div>

        </div>
    </div>
</div>

<!-- END: Footer-->

<button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
<script src="{{asset('admin_assets/vendors/js/vendors.min.js')}}"></script>
<script src="{{asset('admin_assets/js/core/app-menu.js')}}"></script>
<script src="{{asset('admin_assets/js/core/app.js')}}"></script>
<script src="{{asset('admin_assets/js/scripts/pages/page-auth-login.js')}}"></script>

</body>
</html>
