
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>后台管理</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="/adminlte/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/adminlte/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="/adminlte/dist/css/skins/_all-skins.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="/adminlte/plugins/iCheck/flat/blue.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="/adminlte/plugins/morris/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="/adminlte/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="/adminlte/plugins/datepicker/datepicker3.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="/adminlte/plugins/daterangepicker/daterangepicker.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="/adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">



        <link rel="stylesheet" type="text/css" href="/back/plugins/colorpicker/colorpicker.css" media="screen">

        <!-- Required Stylesheets -->
        <link rel="stylesheet" type="text/css" href="/back/bootstrap/css/bootstrap.min.css" media="screen">
        <link rel="stylesheet" type="text/css" href="/back/css/fonts/ptsans/stylesheet.css" media="screen">
        <link rel="stylesheet" type="text/css" href="/back/css/fonts/icomoon/style.css" media="screen">
        <link rel="stylesheet" type="text/css" href="/back/css/mws-style.css" media="screen">
        <link rel="stylesheet" type="text/css" href="/back/css/icons/icol16.css" media="screen">
        <link rel="stylesheet" type="text/css" href="/back/css/icons/icol32.css" media="screen">

        <!-- Demo Stylesheet -->
        <link rel="stylesheet" type="text/css" href="/back/css/demo.css" media="screen">

        <!-- jQuery-UI Stylesheet -->
        <link rel="stylesheet" type="text/css" href="/back/jui/css/jquery.ui.all.css" media="screen">
        <link rel="stylesheet" type="text/css" href="/back/jui/jquery-ui.custom.css" media="screen">

        <!-- Theme Stylesheet -->
        <link rel="stylesheet" type="text/css" href="/back/css/mws-theme.css" media="screen">
        <link rel="stylesheet" type="text/css" href="/back/css/themer.css" media="screen">

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    @include("admin.layout.header")
    <!-- Left side column. contains the logo and sidebar -->
    @include("admin.layout.sidebar")
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
                <div class="container">
            {{--右面内容部分--}}
            @if (count($errors) > 0)
                <div class="mws-form-message error">
                    错误信息
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>

            @endif
            @if (session('info'))
                <div class="mws-form-message success">
                    提示信息
                    <ul>
                        <li>{{ session('info') }}</li>
                    </ul>
                </div>
            @elseif(session('error'))
                <div class="mws-form-message error">
                    提示信息
                    <ul>
                        <li>{{ session('error') }}</li>
                    </ul>
                </div>
            @endif
            @section('content')
            @show
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    @include("admin.layout.footer")
    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="/adminlte/plugins/jQuery/jquery-2.2.3.min.js"></script>

        <script src="/back/js/libs/jquery-1.8.3.min.js"></script>
        <script src="/back/js/libs/jquery.mousewheel.min.js"></script>
        <script src="/back/js/libs/jquery.placeholder.min.js"></script>
        <script src="/back/custom-plugins/fileinput.js"></script>

        <!-- jQuery-UI Dependent Scripts -->
        <script src="/back/jui/js/jquery-ui-1.9.2.min.js"></script>
        <script src="/back/jui/jquery-ui.custom.min.js"></script>
        <script src="/back/jui/js/jquery.ui.touch-punch.js"></script>

        <!-- Plugin Scripts -->
        <script src="/back/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="/back/plugins/colorpicker/colorpicker-min.js"></script>

        <!-- Core Script -->
        <script src="/back/bootstrap/js/bootstrap.min.js"></script>
        <script src="/back/js/core/mws.js"></script>

        <!-- Themer Script (Remove if not needed) -->
        <script src="/back/js/core/themer.js"></script>

        <!-- Demo Scripts (remove if not needed) -->
        <script src="/back/js/demo/demo.table.js"></script>

<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="/adminlte/bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="/adminlte/plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="/adminlte/plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="/adminlte/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="/adminlte/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="/adminlte/plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="/adminlte/plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="/adminlte/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="/adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="/adminlte/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="/adminlte/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="/adminlte/dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="/adminlte/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/adminlte/dist/js/demo.js"></script>
<script src="{{ mix('/js/admin.js') }}"></script>
    <!-- JavaScript Plugins -->



@section('js')
    <!-- JavaScript Plugins -->

    
    @show
    @section('myJs')

    @show
    <script type="text/javascript">
            setInterval(function () {
                var date = new Date();
                var time = date.toTimeString();
                $('#mws-user-message a').html(time);
            },1000);
    </script>

</body>
</html>
