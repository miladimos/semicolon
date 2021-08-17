<!DOCTYPE html>
<html class="loading" lang="{{  str_replace('_','-', app()->getLocale()) }}" data-textdirection="rtl">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <link rel="apple-touch-icon" href="{{ asset('/statics/webmaster/images/ico/apple-icon-120.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/statics/webmaster/images/ico/favicon.ico') }}">
    {{-- <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet"> --}}

    {!! SEO::generate(true) !!}

    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/statics/webmaster/vendors/css/vendors-rtl.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/statics/webmaster/vendors/css/charts/apexcharts.css') }}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/statics/webmaster/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/statics/webmaster/css/bootstrap-extended.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/statics/webmaster/css/colors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/statics/webmaster/css/components.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/statics/webmaster/css/themes/dark-layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/statics/webmaster/css/themes/semi-dark-layout.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('/statics/webmaster/css/core/menu/menu-types/vertical-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/statics/webmaster/css/core/colors/palette-gradient.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/statics/webmaster/css/pages/dashboard-ecommerce.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/statics/webmaster/css/pages/card-analytics.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/statics/webmaster/css/pages/card-analytics.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/statics/webmaster/css/plugins/file-uploaders/dropzone.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/statics/webmaster/css/pages/data-list-view.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/statics/webmaster/vendors/css/tables/datatable/datatables.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/statics/webmaster/vendors/css/tables/datatable/extensions/dataTables.checkboxes.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/statics/webmaster/vendors/css/forms/select/select2.min.css') }}">


    <!-- BEGIN: Page CSS-->
    @yield('styles')
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/statics/webmaster/css/custom-rtl.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/statics/webmaster/css/style-rtl.css') }}">
    <!-- END: Custom CSS-->




    @livewireStyles

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern semi-dark-layout 2-columns  navbar-floating footer-static  todo-application" data-open="click" data-menu="vertical-menu-modern" data-col="2-columns" data-layout="semi-dark-layout">

