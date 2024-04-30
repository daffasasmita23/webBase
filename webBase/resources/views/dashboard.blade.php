<!-- resources/views/dashboard.blade.php -->

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    
@stop

@section('adminlte_css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
@stop

@section('adminlte_js')
    <script>
        $(document).ready(function() {
            // Fullscreen button
            $('#fullscreen-btn').click(function() {
                if (document.fullscreenElement) {
                    document.exitFullscreen();
                } else {
                    document.documentElement.requestFullscreen();
                }
            });
        });
    </script>
@stop

@section('sidebar')
    @php
        $sidebarMenu = [
            'Master Employee' => [
                'icon' => 'fas fa-users',
                'url' => '#',
            ],
            'Attendance CheckInAndOut' => [
                'icon' => 'far fa-clock',
                'url' => '#',
            ],
            'Attendance Details' => [
                'icon' => 'far fa-calendar',
                'url' => '#',
            ],
        ];
    @endphp

    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            @foreach ($sidebarMenu as $menuTitle => $menuData)
                <li class="nav-item">
                    <a href="{{ $menuData['url'] }}" class="nav-link">
                        <i class="nav-icon {{ $menuData['icon'] }}"></i>
                        <p>{{ $menuTitle }}</p>
                    </a>
                </li>
            @endforeach
        </ul>
    </nav>
@stop

@section('right-sidebar')
    <ul class="nav navbar-nav ml-auto">
        <!-- Fullscreen Button -->
        <li class="nav-item">
            <a class="nav-link" id="fullscreen-btn" href="#">
                <i class="fas fa-expand"></i>
            </a>
        </li>
        <!-- User Settings -->
        <li class="nav-item dropdown user-menu">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                <i class="fas fa-user"></i>
                <span class="d-none d-md-inline">Admin</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <!-- User image -->
                <li class="user-header bg-primary">
                    <i class="fas fa-user fa-5x"></i>
                    <p>
                        Admin - Web Developer
                    </p>
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                    <a href="#" class="btn btn-default btn-flat float-right">Sign out</a>
                </li>
            </ul>
        </li>
    </ul>
@stop
