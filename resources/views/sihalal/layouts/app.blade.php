<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ $title ?? 'NO Title' }}</title>
    <link rel="stylesheet" href="{{ asset('assets/sihalal/vendors/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/sihalal/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/sihalal/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/sihalal/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/sihalal/vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/sihalal/js/select.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/sihalal/css/vertical-layout-light/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('assets/sihalal/images/logo-ipb.png') }}" />
</head>

<body>
    <div class="container-scroller">

        @include('sihalal.layouts.includes.header')

        <div class="container-fluid page-body-wrapper">

            @include('sihalal.layouts.includes.theme')

            @include('sihalal.layouts.includes.sidebar')

            <div class="main-panel">
                @yield('content')
                
                @include('sihalal.layouts.includes.footer')
            </div>

        </div>

    </div>

    <script src="{{ asset('assets/sihalal/vendors/js/vendor.bundle.base.js') }}"></script>
    <script src="{{ asset('assets/sihalal/vendors/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('assets/sihalal/vendors/datatables.net/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('assets/sihalal/vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
    <script src="{{ asset('assets/sihalal/js/dataTables.select.min.js') }}"></script>
    <script src="{{ asset('assets/sihalal/js/off-canvas.js') }}"></script>
    <script src="{{ asset('assets/sihalal/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('assets/sihalal/js/template.js') }}"></script>
    <script src="{{ asset('assets/sihalal/js/settings.js') }}"></script>
    <script src="{{ asset('assets/sihalal/js/todolist.js') }}"></script>
    <script src="{{ asset('assets/sihalal/js/dashboard.js') }}"></script>
    <script src="{{ asset('assets/sihalal/js/Chart.roundedBarCharts.js') }}"></script>
</body>
</html>