<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Include any head scripts and stylesheets here -->
        @include('adminlte::layouts.partials.head')
    </head>
    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">

            <!-- Include the header -->
            @include('adminlte::layouts.partials.navbar')

            <!-- Include the sidebar -->
            @include('adminlte::layouts.partials.sidebar')

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <div class="content-header">
                    <div class="container-fluid">
                        @yield('content_header')
                    </div>
                </div>

                <!-- Main content -->
                <div class="content">
                    <div class="container-fluid">
                        @yield('content')
                    </div>
                </div>
            </div>
            <!-- /.content-wrapper -->

            <!-- Include the footer -->
            @include('adminlte::layouts.partials.footer')

        </div>
        <!-- ./wrapper -->

        <!-- Include any page scripts here -->
        @include('adminlte::layouts.partials.scripts')
    </body>
</html>
