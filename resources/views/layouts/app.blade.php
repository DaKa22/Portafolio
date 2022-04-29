<!DOCTYPE html>
<html class="no-js" lang="es">
@include('layouts.src.head')
<body class="side-header" data-spy="scroll" data-target=".navbar" data-offset="1">
    <!-- PRELOADER SPINNER
    ============================================= -->
<!-- Preloader -->
    <div class="preloader">
        <div class="lds-ellipsis">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        </div>
    </div>
  <!-- Preloader End -->
    <!-- CONTENT -->
    <div id="main-wrapper">
        <!-- header -->
        @include('layouts.src.header')
        <div class="clearfix"></div>
        <div class="main-area-width">
            <main class="main">
                @yield('content')
                <!-- footer -->
                @include('layouts.src.footer')
            </main>
        </div>

        <!-- Start Scroll top
        ============================================= -->
        <a href="#home" id="scrtop" class="smooth-scroll"><i class="icofont-rounded-up"></i></a>
        <!-- End Scroll top-->
        <div>
            <div class="mouse-cursor cursor-outer"></div>
            <div class="mouse-cursor cursor-inner"></div>
            <!-- /CURSOR -->
        </div>
    </div><!-- Mouse Cursor End -->
    @include('layouts.src.scripts')
</body>
</html>
