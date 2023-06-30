<!DOCTYPE html>
<html class="loading dark-layout" lang="en" data-layout="dark-layout" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    @include('admin.includes.meta')
</head>
<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static" data-open="click" data-menu="vertical-menu-modern" data-col="">

<!-- BEGIN: Header-->
@include('admin.includes.header')
<!-- END: Header-->

<!-- BEGIN: Main Menu-->
@include('admin.includes.sidebar')

<!-- END: Main Menu-->

<!-- BEGIN: Content-->
@yield('content')
<!-- END: Content-->

<!-- BEGIN: Footer-->
<footer class="footer footer-static footer-light">
    <p class="clearfix mb-0">
        <span class="float-md-left d-block d-md-inline-block mt-25">COPYRIGHT &copy; {{ now()->year }}
            <span class="d-none d-sm-inline-block">, All rights Reserved</span>
        </span>
        <span class="float-md-right d-none d-md-block">
            Powered by
            <span style="background-color: black; padding: 3px; font-weight: bold">
                Garage
                <span style="background-color: #F79420; color: black; padding: 3px">
                    Jobs
                </span>
            </span>
            with <i data-feather="heart"></i>
        </span>
    </p>
</footer>
<!-- END: Footer-->

<button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
<script src="{{asset('admin_assets/vendors/js/vendors.min.js')}}"></script>
@stack('scripts')

<script src="{{asset('admin_assets/js/core/app-menu.js')}}"></script>
<script src="{{asset('admin_assets/js/core/app.js')}}"></script>
<script>
    $(window).on('load', function() {
        if (feather) {
            feather.replace({
                width: 14,
                height: 14
            });
        }
    })
</script>
</body>
<!-- END: Body-->

</html>
