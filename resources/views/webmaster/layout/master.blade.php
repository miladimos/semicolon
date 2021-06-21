@include('webmaster.layout.header')

<!-- BEGIN: Header-->
@include('webmaster.layout.header-navbar')
<!-- END: Header-->


<!-- BEGIN: Main Menu-->
@include('webmaster.layout.main-menu')

<!-- END: Main Menu-->

<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                @include('webmaster.partials.breadcrumb')
            </div>
            <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                <div class="form-group breadcrum-right">
                    <div class="dropdown">
                        <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="feather icon-settings"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#">Chat</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            <!-- Webmaster Dashboard Content Starts -->
                @yield('content')
            <!-- Webmaster Dashboard Content ends -->
        </div>
    </div>
</div>
<!-- END: Content-->

@include('webmaster.layout.footer')
