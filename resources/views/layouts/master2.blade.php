<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <title>Easy Cheques -Admin Dashboard</title>
        <link rel="icon" type="image/ico" href="assets/images/favicon.ico" />
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- ============================================
        ================= Stylesheets ===================
        ============================================= -->
        <!-- vendor css files -->

        <link rel="stylesheet" href="{{ url('assets/css/vendor/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{ url('assets/css/vendor/animate.css')}}">
        <link rel="stylesheet" href="{{ url('assets/css/vendor/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{ url('assets/js/vendor/animsition/css/animsition.min.css')}}">
        <link rel="stylesheet" href="{{ url('assets/js/vendor/daterangepicker/daterangepicker-bs3.css')}}">
        <link rel="stylesheet" href="{{ url('assets/js/vendor/morris/morris.css')}}">
        <link rel="stylesheet" href="{{ url('assets/js/vendor/owl-carousel/owl.carousel.css')}}">
        <link rel="stylesheet" href="{{ url('assets/js/vendor/owl-carousel/owl.theme.css')}}">
        <link rel="stylesheet" href="{{ url('assets/js/vendor/rickshaw/rickshaw.min.css')}}">
        <link rel="stylesheet" href="{{ url('assets/js/vendor/datetimepicker/css/bootstrap-datetimepicker.min.css')}}">
        <link rel="stylesheet" href="{{ url('assets/js/vendor/datatables/css/jquery.dataTables.min.css')}}">
        <link rel="stylesheet" href="{{ url('assets/js/vendor/datatables/datatables.bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{ url('assets/js/vendor/chosen/chosen.css')}}">
        <link rel="stylesheet" href="{{ url('assets/js/vendor/summernote/summernote.css')}}">
        <link rel="stylesheet" href="{{ url('assets/js/vendor/datatables/extensions/ColReorder/css/dataTables.colReorder.min.css')}}">
        <link rel="stylesheet" href="{{ url('assets/js/vendor/datatables/extensions/Responsive/css/dataTables.responsive.css')}}">
        <link rel="stylesheet" href="{{ url('assets/js/vendor/datatables/extensions/ColVis/css/dataTables.colVis.min.css')}}">
        <link rel="stylesheet" href="{{ url('assets/js/vendor/datatables/extensions/TableTools/css/dataTables.tableTools.min.css')}}">



        <!-- project main css files -->
        <link rel="stylesheet" href="{{ url('assets/css/main.css')}}">
        <!--/ stylesheets -->

        <!-- ==========================================
        ================= Modernizr ===================
        =========================================== -->
        <script src="{{ url('assets/js/vendor/modernizr/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>
        <!--/ modernizr -->
        <script type="text/javascript">
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
        </script>

    </head>


    <body id="minovate" class="appWrapper">

        <!--[if lt IE 8]>
                <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->


        <!-- ====================================================
        ================= Application Content ===================
        ===================================================== -->
        <div id="wrap" class="animsition">

            <!-- ===============================================
            ================= HEADER Content ===================
            ================================================ -->
            <section id="header">
                <header class="clearfix">

                    <!-- Branding -->
                    <div class="branding">
                        <a class="brand" href="#">
                            <span><strong>EASY</strong>CHEQUES</span>
                        </a>
                        <a role="button" tabindex="0" class="offcanvas-toggle visible-xs-inline"><i class="fa fa-bars"></i></a>
                    </div>
                    <!-- Branding end -->

                    <!-- Left-side navigation -->
                    <ul class="nav-left pull-left list-unstyled list-inline">
                        <li class="sidebar-collapse divided-right">
                            <a role="button" tabindex="0" class="collapse-sidebar">
                                <i class="fa fa-outdent"></i>
                            </a>
                        </li>
                        <li class="dropdown divided-right settings">
                            <a role="button" tabindex="0" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-cog"></i>
                            </a>

                        </li>
                    </ul>
                    <!-- Left-side navigation end -->

                    <!-- Search -->
                    <div class="search" id="main-search">
                        <input type="text" class="form-control underline-input" placeholder="Search...">
                    </div>

                    <!-- Right-side navigation -->
                    <ul class="nav-right pull-right list-inline">

                        <li class="dropdown nav-profile">

                            <a href class="dropdown-toggle" data-toggle="dropdown">
                                <img src="assets/images/profile-photo.jpg" alt="" class="img-circle size-30x30">
                                <span>Admin <i class="fa fa-angle-down"></i></span>
                            </a>

                            <ul class="dropdown-menu animated littleFadeInRight" role="menu">

                                <li>
                                    <a role="button" tabindex="0">
                                       <li><a href="{{url('/logout')}}"><i class="fa fa-sign-out"></i>Sign Out</a></li>
                                    </a>
                                </li>

                            </ul>

                        </li>


                    </ul>
                    <!-- Right-side navigation end -->

                </header>

            </section>
            <!--/ HEADER Content  -->


            <!-- =================================================
            ================= CONTROLS Content ===================
            ================================================== -->
            <div id="controls">

                <!-- ================================================
                ================= SIDEBAR Content ===================
                ================================================= -->
                <aside id="sidebar">


                    <div id="sidebar-wrap">

                        <div class="panel-group slim-scroll" role="tablist">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" href="#sidebarNav">
                                            Navigation <i class="fa fa-angle-up"></i>
                                        </a>
                                    </h4>
                                </div>
                                <div id="sidebarNav" class="panel-collapse collapse in" role="tabpanel">
                                    <div class="panel-body">


                                        <!-- ===================================================
                                        ================= NAVIGATION Content ===================
                                        ==================================================== -->
                                         <ul id="navigation">
                                            <li class="active"><a href="{{url('/dashboard')}}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
                                            <li>
                                                <a role="button" tabindex="0"><i class="fa fa-list"></i> <span>Cheque Requests</span></a>
                                                <ul>
                                                    <li><a href="{{url('/chequerequest')}}"><i class="fa fa-caret-right"></i>Request Cheque</a></li>
                                                    <li><a href="{{url('/approvecheques')}}"><i class="fa fa-caret-right"></i>Approve Cheques</a></li>
                                                    <li><a href="{{url('/uploadaccounts')}}"><i class="fa fa-caret-right"></i>Upload Accounts</a></li>

                                                </ul>
                                            </li>
                                            <li>
                                                <a role="button" tabindex="0"><i class="fa fa-file-o"></i> <span>Print Cheques</span></a>
                                                <ul>
                                                    <li><a href="{{url('/printcheques')}}"><i class="fa fa-caret-right"></i>Print Cheques</a></li>
                                                    <li><a href="{{url('/uploadcheques')}}"><i class="fa fa-caret-right"></i>Upload Requests</a></li>

                                                </ul>
                                            </li>
                                            <li>
                                                <a role="button" tabindex="0"><i class="fa fa-pencil"></i> <span>Cheque/Account Maintenance</span></a>
                                                <ul>
                                                    <li><a href="{{url('/serials')}}"><i class="fa fa-caret-right"></i>Serial No Reconciliation</a></li>
                                              
                                                </ul>
                                            </li>
                                            <li>
                                                <a role="button" tabindex="0"><i class="fa fa-table"></i> <span>Master Records</span></a>
                                                <ul>
                                                    <li><a href="{{url('/currencies')}}"><i class="fa fa-caret-right"></i>Currencies</a></li>
                                                    <li><a href="{{url('/branches')}}"><i class="fa fa-caret-right"></i> Branches</a></li>
                                                     <li><a href="{{url('/countrycode')}}"><i class="fa fa-caret-right"></i> Country Code</a></li>
                                                    <li><a href="{{url('/printersettings')}}"><i class="fa fa-caret-right"></i> Printer Settings</a></li>


                                                </ul>
                                            </li>

                                            <li>
                                                <a role="button" tabindex="0"><i class="fa fa-desktop"></i> <span>Administration</span></a>
                                                <ul>
                                                    <li><a href="{{url('/users')}}"><i class="fa fa-caret-right"></i> Users</a></li>
                                                </ul>
                                            </li>

                                            <li>
                                                <a role="button" tabindex="0"><i class="fa fa-bar-chart-o"></i> <span>Reports</span></a>
                                                <ul>
                                                    <li><a href="{{url('/audit')}}"><i class="fa fa-caret-right"></i> Audit Logs</a></li>
                                                    <li><a href="{{url('/printedcheques')}}"><i class="fa fa-caret-right"></i> Printed Cheques</a></li>
                                                    <li><a href="{{url('/damagedcheques')}}"><i class="fa fa-caret-right"></i> Damaged Cheques</a></li>
                                                </ul>
                                            </li>


                                        </ul>
                                        <!--/ NAVIGATION Content -->


                                    </div>
                                </div>
                            </div>


                        </div>

                    </div>


                </aside>

            </div>
            <section id="content">

                @yield('content')


            </section>


        </div>
        <!--/ Application Content -->



        <!-- ============================================
        ============== Vendor JavaScripts ===============
        ============================================= -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script> window.jQuery || document.write('<script src="assets/js/vendor/jquery/jquery-1.11.2.min.js"><\/script>')</script>
        <script src="{{ url('assets/js/vendor/bootstrap/bootstrap.min.js')}}"></script>
        <script src="{{ url('assets/js/vendor/jRespond/jRespond.min.js')}}"></script>
        <script src="{{ url('assets/js/vendor/d3/d3.min.js')}}"></script>
        <script src="{{ url('assets/js/vendor/d3/d3.layout.min.js')}}"></script>
        <script src="{{ url('assets/js/vendor/rickshaw/rickshaw.min.js')}}"></script>
        <script src="{{ url('assets/js/vendor/sparkline/jquery.sparkline.min.js')}}"></script>
        <script src="{{ url('assets/js/vendor/slimscroll/jquery.slimscroll.min.js')}}"></script>
        <script src="{{ url('assets/js/vendor/animsition/js/jquery.animsition.min.js')}}"></script>
        <script src="{{ url('assets/js/vendor/daterangepicker/moment.min.js')}}"></script>
        <script src="{{ url('assets/js/vendor/daterangepicker/daterangepicker.js')}}"></script>
        <script src="{{ url('assets/js/vendor/screenfull/screenfull.min.js')}}"></script>
        <script src="{{ url('assets/js/vendor/flot/jquery.flot.min.js')}}"></script>
        <script src="{{ url('assets/js/vendor/flot-tooltip/jquery.flot.tooltip.min.js')}}"></script>
        <script src="{{ url('assets/js/vendor/flot-spline/jquery.flot.spline.min.js')}}"></script>
        <script src="{{ url('assets/js/vendor/easypiechart/jquery.easypiechart.min.js')}}"></script>
        <script src="{{ url('assets/js/vendor/raphael/raphael-min.js')}}"></script>
        <script src="{{ url('assets/js/vendor/morris/morris.min.js')}}"></script>
        <script src="{{ url('assets/js/vendor/owl-carousel/owl.carousel.min.js')}}"></script>
        <script src="{{ url('assets/js/vendor/datetimepicker/js/bootstrap-datetimepicker.min.js')}}"></script>
        <script src="{{ url('assets/js/vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
        <script src="{{ url('assets/js/vendor/datatables/extensions/dataTables.bootstrap.js')}}"></script>
        <script src="{{ url('assets/js/vendor/chosen/chosen.jquery.min.js')}}"></script>
        <script src="{{ url('assets/js/vendor/summernote/summernote.min.js')}}"></script>
        <script src="{{ url('assets/js/vendor/coolclock/coolclock.js')}}"></script>
        <script src="{{ url('assets/js/vendor/coolclock/excanvas.js')}}"></script>
        <script src="{{ url('assets/js/vendor/datatables/extensions/ColReorder/js/dataTables.colReorder.min.js')}}"></script>
        <script src="{{ url('assets/js/vendor/datatables/extensions/Responsive/js/dataTables.responsive.min.js')}}"></script>
        <script src="{{ url('assets/js/vendor/datatables/extensions/ColVis/js/dataTables.colVis.min.js')}}"></script>
        <script src="{{ url('assets/js/vendor/datatables/extensions/TableTools/js/dataTables.tableTools.min.js')}}"></script>
        <script src="{{ url('assets/js/vendor/parsley/parsley.min.js')}}"></script>
        <script src="{{ url('assets/js/vendor/form-wizard/jquery.bootstrap.wizard.min.js')}}"></script>

        <!--/ vendor javascripts -->




        <!-- ============================================
        ============== Custom JavaScripts ===============
        ============================================= -->
        <script src="{{ url('assets/js/main.js')}}"></script>
        <!--/ custom javascripts -->





        <!-- ===============================================
        ============== Page Specific Scripts ===============
        ================================================ -->


        <!--/ Page Specific Scripts -->

        <script>
            $(window).load(function () {

                $('#rootwizard').bootstrapWizard({
                    onTabShow: function (tab, navigation, index) {
                        var $total = navigation.find('li').length;
                        var $current = index + 1;

                        // If it's the last tab then hide the last button and show the finish instead
                        if ($current >= $total) {
                            $('#rootwizard').find('.pager .next').hide();
                            $('#rootwizard').find('.pager .finish').show();
                            $('#rootwizard').find('.pager .finish').removeClass('disabled');
                        } else {
                            $('#rootwizard').find('.pager .next').show();
                            $('#rootwizard').find('.pager .finish').hide();
                        }

                    },
                    onNext: function (tab, navigation, index) {

                        var form = $('form[name="step' + index + '"]');

                        form.parsley().validate();

                        if (!form.parsley().isValid()) {
                            return false;
                        }

                    },
                    onTabClick: function (tab, navigation, index) {

                        var form = $('form[name="step' + (index + 1) + '"]');
                        form.parsley().validate();

                        if (!form.parsley().isValid()) {
                            return false;
                        }

                    }

                });

            });
        </script>




    </body>
</html>