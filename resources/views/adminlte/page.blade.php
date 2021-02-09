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
                    @if (Session::has('message'))
                        <p class="alert alert-info alert-clearfix">{{ Session::get('message') }}</p>
                    @endif
                    @if (Session::has('error'))
                        <p class="alert alert-danger alert-clearfix">{{ Session::get('error') }}</p>
                    @endif
                    @if (isset($failures))
                        <div class="alert alert-danger" role="alert">
                            <strong>Errors:</strong>
                            <ul>
                                @foreach ($failures as $failure)
                                    @foreach ($failure->errors() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                @endforeach
                            </ul>
                        </div>
                    @endif
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
