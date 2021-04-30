<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 3 | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
   @include('admin.template.css')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        @include('admin.template.header')

        @include('admin.template.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            @include('admin.template.page-header')

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        @yield('content')
                    </div>
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        @include('admin.template.footer')
    </div>
    <!-- ./wrapper -->

   @include('admin.template.js')
</body>

</html>
