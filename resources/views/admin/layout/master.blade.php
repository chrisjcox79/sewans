<!DOCTYPE html>
<html>

<head>
    <title>NobleUI Laravel Admin Dashboard Template</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="_token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href="{{ asset('backend/favicon.ico') }}">

    <!-- plugin css -->
    <link href="{{ asset('backend/assets/fonts/feather-font/css/iconfont.css') }}" rel="stylesheet" />
    <link href="{{ asset('backend/assets/plugins/flag-icon-css/css/flag-icon.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('backend/assets/plugins/perfect-scrollbar/perfect-scrollbar.css') }}" rel="stylesheet" />
    <link href="{{ asset('backend/css/toastr.css') }}" rel="stylesheet">

    <!-- end plugin css -->

    @stack('plugin-styles')

    <!-- common css -->
    <link href="{{ asset('backend/css/app.css') }}" rel="stylesheet" />
    <!-- end common css -->

    @stack('style')
</head>

<body data-base-url="{{ url('/') }}">
    <div id="pre-loader">
        <img src="{{ asset('backend/assets/images/loading.gif') }}" alt="Loading..." />
    </div>
    <script src="{{ asset('backend/assets/js/spinner.js') }}"></script>

    <div class="main-wrapper" id="app">
        @include('admin.layout.sidebar')
        <div class="page-wrapper">
            @include('admin.layout.header')
            <div class="page-content">
                @yield('content')
            </div>
            @include('admin.layout.footer')
        </div>
    </div>

    <!-- base js -->
    <script src="{{ asset('backend/js/app.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <!-- end base js -->

    <!-- plugin js -->
    @stack('plugin-scripts')
    <!-- end plugin js -->

    <!-- common js -->
    <script src="{{ asset('backend/assets/js/template.js') }}"></script>
    <script>
        $(function() {
            $('form').on('submit', function() {
                pre_loader();
                $('input[type=submit]').attr('disabled', true);

            });


        });


        function pre_loader() {
            $("#load").fadeOut();
            $('#pre-loader').delay(200).fadeOut('slow');
        }
        pre_loader();


        // var unsaved = false;

        // $(":input").change(function() { //triggers change in all input fields including text type
        //     unsaved = true;
        // });

        // function unloadPage() {
        //     if (unsaved) {
        //         return "表单未提交或保存,是否确认离开?";
        //     }
        // }

        // window.onbeforeunload = unloadPage;

    </script>


    <!-- end common js -->

    @stack('custom-scripts')

</body>

</html>
