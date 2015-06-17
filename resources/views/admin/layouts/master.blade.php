<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>{{ $page_title or "Kia CMS" }}</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    @include('admin.layouts.styles')

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="skin-blue">
<div class="wrapper">

    @include('admin.layouts.header')

    @include('admin.layouts.sidebar')

    <div class="content-wrapper">
        <section class="content-header">
            <h1>
                {{ $page_title or "Page Management" }}
                <small>{{ $page_description or '' }}</small>
            </h1>

            @include('admin.layouts.breadcrumb')

        </section>

        <!-- Main content -->
        <section class="content">
            @include ('flash::message')
            @include ('errors.request')
            @yield('content')
        </section><!-- /.content -->
    </div>

    @include('admin.layouts.footer')

</div>

@include('admin.layouts.js')
@yield('script')

</body>
</html>