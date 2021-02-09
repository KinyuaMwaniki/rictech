<!DOCTYPE html>
<html lang="en">
@include('adminlte.partials.header')

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">

        @include('adminlte.partials.topbar')

        @include('adminlte.partials.sidebar')

        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    @yield('header')
                </div>
            </div>
            <section class="content">
                @yield('content')
            </section>
        </div>
        <aside class="control-sidebar control-sidebar-dark">
        </aside>

        @include('adminlte.partials.footer')
    </div>

    @include('adminlte.partials.scripts')

</body>

</html>
