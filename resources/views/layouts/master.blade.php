<!DOCTYPE html>
<!--[if IE 8]>
<html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]>
<html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8"/>
    <title>@yield('title')</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta content="" name="description"/>
    <meta content="" name="author"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet"
          type="text/css"/>
    <link href="{{ asset('assets/global/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet"
          type="text/css"/>
    <link href="{{ asset('assets/global/plugins/simple-line-icons/simple-line-icons.min.css') }}" rel="stylesheet"
          type="text/css"/>
    <link href="{{ asset('assets/global/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css') }}" rel="stylesheet"
          type="text/css"/>

    <!-- END GLOBAL MANDATORY STYLES -->

@yield('pluginsStyles')
    <link href="{{ asset('assets/global/css/components-md.css') }}" rel="stylesheet" id="style_components"
          type="text/css"/>
    <link href="{{ asset('assets/global/css/plugins-md.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/layouts/layout2/css/layout.css') }}" rel="stylesheet" id="style_components"
          type="text/css"/>
    <link href="{{ asset('assets/layouts/layout2/css/themes/blue.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/layouts/layout2/css/custom.css') }}" rel="stylesheet" type="text/css"/>
@yield('styles')
</head>
<!-- END HEAD -->


<body class="page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid page-md page-sidebar-closed">
<div class="clearfix"></div>

<div class="page-container">
    @include('layouts.navigation')
    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content">
            <!-- BEGIN PAGE HEADER-->
            @yield('pagetitle')
            <div class="page-bar">
                @yield('breadcrumbs')
            </div>
            <!-- END PAGE HEADER-->
            @if(Session::has('flash-message'))
                <div class="alert alert-success">
                    <div class="text text-center">
                        {{ Session::get('flash-message') }}
                    </div>
                </div>
            @endif
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        <!-- BEGIN DASHBOARD STATS 1-->
        @yield('content')
        <!-- END DASHBOARD STATS 1-->
        </div>
        <!-- END CONTENT BODY -->
    </div>
</div>



<!-- BEGIN CORE PLUGINS -->
<script src="{{ asset('assets/global/plugins/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/global/plugins/jquery.blockui.min.js') }}" type="text/javascript"></script>

<script>
    $(document).ready(function () {

    });
</script>
</body>
</html>

