
<div class="sidenav-overlay"></div>
<div class="drag-target"></div>

<!-- BEGIN: Footer-->
<footer class="footer footer-static footer-light">
    <p class="clearfix blue-grey lighten-2 mb-0"><span class="float-md-left d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2020<a class="text-bold-800 grey darken-2" href="https://1.envato.market/pixinvent_portfolio" target="_blank">Pixinvent,</a>All rights Reserved</span><span class="float-md-right d-none d-md-block">Hand-crafted & Made with<i class="feather icon-heart pink"></i></span>
        <button class="btn btn-primary btn-icon scroll-top" type="button"><i class="feather icon-arrow-up"></i></button>
    </p>
</footer>
<!-- END: Footer-->

@include('sweetalert::alert')
<!-- BEGIN: Vendor JS-->
<script src="{{ asset('/webmaster/vendors/js/vendors.min.js') }}"></script>
<script src="{{ asset('/webmaster/vendors/js/charts/apexcharts.min.js') }}"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="{{ asset('/webmaster/js/core/app-menu.js') }}"></script>
<script src="{{ asset('/webmaster/js/core/app.js') }}"></script>
<script src="{{ asset('/webmaster/js/scripts/components.js') }}"></script>
<script src="{{ asset('/webmaster/vendors/js/forms/select/select2.full.min.js') }}"></script>
<!-- END: Theme JS-->


<script src="{{ asset('/webmaster/js/scripts/pages/dashboard-ecommerce.js') }}"></script>


@yield('scripts')
<!-- END: Page JS-->

@livewireScripts

</body>
<!-- END: Body-->

</html>
