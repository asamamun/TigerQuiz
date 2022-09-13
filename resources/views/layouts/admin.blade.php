<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <title> @yield('title')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="Tiger quiz" name="keywords" />
    <meta content="tiger quiz" name="description" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ url('assets/img/favicon/favicon.ico') }}" rel="icon" />
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <script src="https://use.fontawesome.com/releases/v6.1.2/js/all.js" crossorigin="anonymous"></script>
    <link href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" rel="stylesheet" />
    <!-- page css-->
    {{-- <link rel="stylesheet" href="assets/css/bootstrap.css"> --}}
    <link rel="stylesheet" href="{{ url('assets/css/chart.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/scrollbar/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/tea_style.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/quiz.css') }}">

    @yield('head')
    <style>
        .bg-image {
            background-image: url('assets/img/background/auth.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100% 100%;
        }

        td {
            max-width: 100px;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        td.skip {
            max-width: 100% !important;
        }
    </style>
</head>

<body>

    <!--for sidebar-->
    @yield('sidebar')

    <!--for navbar-->
    <div id="main">
        @yield('navbar')

        <!--main body-->
        @yield('body')
        <!--main content-->
        <div class="main-content container-fluid">
            <section class="section">
                @yield('content')
            </section>
        </div>
        <!-- end of main div -->
        <!-- footer div -->
        @yield('footer')
        {{-- @include('inc.admin.footer') --}}

    </div>
    </div>
    <!-- end div -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
    <script src={{url('assets/js/bootstrap.bundle.min.js')}}></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js" crossorigin="anonymous">
    </script>
    <!-- ==================== -->
    {{-- <script src="assets/js/feather.min.js"></script> --}}
    <script src="{{ url('assets/scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ url('assets/js/tea_app.js') }}"></script>
    <script src="{{ url('assets/js/chart.min.js') }}"></script>
    <script src="{{ url('assets/js/tea_main.js') }}"></script>
    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        });
    </script>
    @yield('scripts')
    <script>
        $(document).ready( function () {
    $('#myTable').DataTable();
} );
    </script>
    <script>
        $(document).ready(function() {
            
            // show the alert
            setTimeout(function() {
                $(".alert").alert('close');
            }, 2000);
            // =========
            // for subcats as cats
            function selectscat(ob) {
                // remove selected topic
                // $("#topic_id").find("option").remove().end().append(
                //     '<option value = "-1">Select Topic</option>');

                $("#topic_id").empty().append('<option value = "-1">Select Topic');

                let html = "<option value='-1'>All</option>";
                for (const key in ob) {
                    if (Object.hasOwnProperty.call(ob, key)) {
                        html += "<option value='" + key + "'>" + ob[key] + "</option>";
                    }
                }
                $("#subcategory_id").html(html);
            }
            $("#category_id").change(function() {
                // console.log( $(this).val() )
                let URL = "{{ url('subcats') }}";
                $.ajax({
                    type: "post",
                    url: URL + '/' + $(this).val(),
                    data: "data",
                    dataType: "json",
                    success: function(response) {
                        selectscat(response);
                    }
                });
            });

            // for topics as subcats
            function selecttopic(ot) {
                // $("#topic_id").html("");
                let html = "<option value='-1'>All</option>";
                for (const k in ot) {
                    if (Object.hasOwnProperty.call(ot, k)) {

                        html += "<option value='" + k + "'>" + ot[k] + "</option>";
                    }
                }
                $("#topic_id").html(html);
            }
            $("#subcategory_id").change(function() {
                if($(this).val() == "-1"){
                    $("#topic_id").empty().append('<option value = "-1">Select Topic');
                    return;
                }
                // console.log( $(this).val() )
                let URL = "{{ url('topics') }}";
                $.ajax({
                    type: "post",
                    url: URL + '/' + $(this).val(),
                    data: "data",
                    dataType: "json",
                    success: function(response) {
                        selecttopic(response);
                    }
                });
            });

        });
    </script>
</body>

</html>
