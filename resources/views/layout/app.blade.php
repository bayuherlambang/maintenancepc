<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Menten PC</title>
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
        <!-- Datatables -->
        <script src="{{asset('js/jquery-2.2.4.min.js')}}"></script>
        <link href="{{ asset('css/datatables/jquery.dataTables.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/all.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/datatables/buttons.dataTables.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/datatables/jquery.dataTables_themeroller.css') }}" rel="stylesheet">
        <link href="{{ asset('css/datatables/jquery.dataTables.css') }}" rel="stylesheet">
        <link href="{{ asset('css/datatables/demo_table_jui.css') }}" rel="stylesheet">
        <link href="{{ asset('css/datatables/demo_table.css') }}" rel="stylesheet">
        <link href="{{ asset('css/datatables/demo_page.css') }}" rel="stylesheet">
        <link href="{{ asset('css/datatables/jquery-ui-1.10.0.custom.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/datatables/jquery.dataTables.min.css') }}" rel="stylesheet">
        <script src="{{asset('js/datatables/jquery-ui.js')}}"></script>
        <script src="{{asset('js/datatables/jquery.dataTables.js')}}"></script>
        <script src="{{asset('js/datatables/date-eu.js')}}"></script>
        <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
        <link href="{{ asset('css/datatables/daterangepicker.css') }}" rel="stylesheet">
    </head>
    <body class="bg-light">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                  @yield('content')
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; KepakSayap 2020</div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="{{asset('js/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('js/datatables/dataTables.buttons.min.js')}}"></script>
        <script src="{{asset('js/datatables/buttons.flash.min.js')}}"></script>
        <script src="{{asset('js/datatables/jszip.min.js')}}"></script>
        <script src="{{asset('js/datatables/pdfmake.min.js')}}"></script>
        <script src="{{asset('js/datatables/vfs_fonts.js')}}"></script>
        <script src="{{asset('js/datatables/buttons.html5.min.js')}}"></script>
        <script src="{{asset('js/datatables/buttons.print.min.js')}}"></script>
        <script src="{{asset('js/datatables/moment.min.js')}}"></script>
        <script src="{{asset('js/datatables/daterangepicker.min.js')}}"></script>
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}" crossorigin="anonymous"></script>
        <script src="{{ asset('js/scripts.js') }}"></script>
    </body>
</html>
