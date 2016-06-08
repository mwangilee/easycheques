@extends('layouts.master')

@section('content')


<div class="page page-dashboard">

    <div class="pageheader">

        <h2>Dashboard <span></span></h2>

        <div class="page-bar">

            <ul class="page-breadcrumb">
                <li>
                    <a href="index.html"><i class="fa fa-home"></i> Scoring</a>
                </li>
                <li>
                    <a href="index.html">Dashboard</a>
                </li>
            </ul>



        </div>

    </div>

    <!-- cards row -->
    <div class="row">

        <!-- col -->
        <div class="card-container col-lg-3 col-sm-6 col-sm-12">
            <div class="card">
                <div class="front bg-greensea">

                    <!-- row -->
                    <div class="row">
                        <!-- col -->
                        <div class="col-xs-4">
                            <i class="fa fa-bars fa-4x"></i>
                        </div>
                        <!-- /col -->
                        <!-- col -->
                        <div class="col-xs-8">
                            <p class="text-elg text-strong mb-0">3 659</p>
                            <span>New Requests</span>
                        </div>
                        <!-- /col -->
                    </div>
                    <!-- /row -->

                </div>
                <div class="back bg-greensea">



                </div>
            </div>
        </div>
        <!-- /col -->

        <!-- col -->
        <div class="card-container col-lg-3 col-sm-6 col-sm-12">
            <div class="card">
                <div class="front bg-lightred">

                    <!-- row -->
                    <div class="row">
                        <!-- col -->
                        <div class="col-xs-4">
                            <i class="fa fa-dashboard fa-4x"></i>
                        </div>
                        <!-- /col -->
                        <!-- col -->
                        <div class="col-xs-8">
                            <p class="text-elg text-strong mb-0">19 364</p>
                            <span>Printing</span>
                        </div>
                        <!-- /col -->
                    </div>
                    <!-- /row -->

                </div>
                <div class="back bg-lightred">

                    <!-- row -->

                    <!-- /row -->

                </div>
            </div>
        </div>
        <!-- /col -->

        <!-- col -->
        <div class="card-container col-lg-3 col-sm-6 col-sm-12">
            <div class="card">
                <div class="front bg-blue">

                    <!-- row -->
                    <div class="row">
                        <!-- col -->
                        <div class="col-xs-4">
                            <i class="fa fa-cog fa-4x"></i>
                        </div>
                        <!-- /col -->
                        <!-- col -->
                        <div class="col-xs-8">
                            <p class="text-elg text-strong mb-0">165</p>
                            <span>Pending</span>
                        </div>
                        <!-- /col -->
                    </div>
                    <!-- /row -->

                </div>
                <div class="back bg-blue">

                    <!-- row -->

                    <!-- /row -->

                </div>
            </div>
        </div>
        <!-- /col -->

        <!-- col -->
        <div class="card-container col-lg-3 col-sm-6 col-sm-12">
            <div class="card">
                <div class="front bg-slategray">

                    <!-- row -->
                    <div class="row">
                        <!-- col -->
                        <div class="col-xs-4">
                            <i class="fa fa-eye fa-4x"></i>
                        </div>
                        <!-- /col -->
                        <!-- col -->
                        <div class="col-xs-8">
                            <p class="text-elg text-strong mb-0">29 651</p>
                            <span>Accounts</span>
                        </div>
                        <!-- /col -->
                    </div>
                    <!-- /row -->

                </div>
                <div class="back bg-slategray">

                    <!-- row -->

                    <!-- /row -->

                </div>
            </div>
        </div>
        <!-- /col -->

    </div>
    <!-- /row -->




    <!-- row -->
    <div class="row">



        <!-- col -->
        <div class="col-md-8">

            <!-- tile -->
            <section class="tile">

                <!-- tile header -->
                <div class="tile-header bg-greensea dvd dvd-btm">
                    <h1 class="custom-font"><strong>Statistics </strong>Graph</h1>
                    <ul class="controls">

                        <li class="dropdown">

                            <a role="button" tabindex="0" class="dropdown-toggle settings" data-toggle="dropdown">
                                <i class="fa fa-cog"></i>
                                <i class="fa fa-spinner fa-spin"></i>
                            </a>

                            <ul class="dropdown-menu pull-right with-arrow animated littleFadeInUp">
                                <li>
                                    <a role="button" tabindex="0" class="tile-toggle">
                                        <span class="minimize"><i class="fa fa-angle-down"></i>&nbsp;&nbsp;&nbsp;Minimize</span>
                                        <span class="expand"><i class="fa fa-angle-up"></i>&nbsp;&nbsp;&nbsp;Expand</span>
                                    </a>
                                </li>
                                <li>
                                    <a role="button" tabindex="0" class="tile-refresh">
                                        <i class="fa fa-refresh"></i> Refresh
                                    </a>
                                </li>
                                <li>
                                    <a role="button" tabindex="0" class="tile-fullscreen">
                                        <i class="fa fa-expand"></i> Fullscreen
                                    </a>
                                </li>
                            </ul>

                        </li>
                        <li class="remove"><a role="button" tabindex="0" class="tile-close"><i class="fa fa-times"></i></a></li>
                    </ul>
                </div>
                <!-- /tile header -->

                <!-- tile widget -->
                <div class="tile-widget bg-greensea">
                    <div id="statistics-chart" style="height: 250px;"></div>
                </div>
                <!-- /tile widget -->

                <!-- tile body -->

                <!-- /tile body -->

            </section>
            <!-- /tile -->

        </div>
        <!-- /col -->



        <!-- col -->
        <div class="col-md-4">

            <!-- tile -->

            <!-- /tile -->

        </div>
        <!-- /col -->


    </div>
    <!-- /row -->





    <!-- row -->
    <div class="row">


        <!-- col -->

        <!-- /col -->



        <!-- col -->
        <div class="col-md-4">



        </div>
        <!-- /col -->


        <!-- col -->
        <div class="col-md-4">


            <!-- tile -->
            <section class="tile bg-slategray widget-calendar">


                <div class="tile-body p-0">
                    <div id="mini-calendar"></div>
                </div>
                <!-- /tile body -->

            </section>
            <!-- /tile -->



        </div>
        <!-- /col -->


    </div>
    <!-- /row -->





    <!-- row -->
    <div class="row">
        <!-- col -->
        <div class="col-md-8">
            <!-- tile -->
            <section class="tile">

            </section>
            <!-- /tile -->
        </div>

        <div class="col-md-4">
            <!-- tile -->
            <section class="tile">


            </section>
            <!-- /tile -->
        </div>


    </div>

</div>

<script>
    $(window).load(function () {
        // Initialize Statistics chart
        var data = [{
                data: [[1, 15], [2, 40], [3, 35], [4, 39], [5, 42], [6, 50], [7, 46], [8, 49], [9, 59], [10, 60], [11, 58], [12, 74]],
                label: 'Unique Visits',
                points: {
                    show: true,
                    radius: 4
                },
                splines: {
                    show: true,
                    tension: 0.45,
                    lineWidth: 4,
                    fill: 0
                }
            }, {
                data: [[1, 50], [2, 80], [3, 90], [4, 85], [5, 99], [6, 125], [7, 114], [8, 96], [9, 130], [10, 145], [11, 139], [12, 160]],
                label: 'Page Views',
                bars: {
                    show: true,
                    barWidth: 0.6,
                    lineWidth: 0,
                    fillColor: {colors: [{opacity: 0.3}, {opacity: 0.8}]}
                }
            }];

        var options = {
            colors: ['#e05d6f', '#61c8b8'],
            series: {
                shadowSize: 0
            },
            legend: {
                backgroundOpacity: 0,
                margin: -7,
                position: 'ne',
                noColumns: 2
            },
            xaxis: {
                tickLength: 0,
                font: {
                    color: '#fff'
                },
                position: 'bottom',
                ticks: [
                    [1, 'JAN'], [2, 'FEB'], [3, 'MAR'], [4, 'APR'], [5, 'MAY'], [6, 'JUN'], [7, 'JUL'], [8, 'AUG'], [9, 'SEP'], [10, 'OCT'], [11, 'NOV'], [12, 'DEC']
                ]
            },
            yaxis: {
                tickLength: 0,
                font: {
                    color: '#fff'
                }
            },
            grid: {
                borderWidth: {
                    top: 0,
                    right: 0,
                    bottom: 1,
                    left: 1
                },
                borderColor: 'rgba(255,255,255,.3)',
                margin: 0,
                minBorderMargin: 0,
                labelMargin: 20,
                hoverable: true,
                clickable: true,
                mouseActiveRadius: 6
            },
            tooltip: true,
            tooltipOpts: {
                content: '%s: %y',
                defaultTheme: false,
                shifts: {
                    x: 0,
                    y: 20
                }
            }
        };

        var plot = $.plot($("#statistics-chart"), data, options);

        $(window).resize(function () {
            // redraw the graph in the correctly sized div
            plot.resize();
            plot.setupGrid();
            plot.draw();
        });
        // * Initialize Statistics chart

        //Initialize morris chart
        Morris.Donut({
            element: 'browser-usage',
            data: [
                {label: 'Chrome', value: 25, color: '#00a3d8'},
                {label: 'Safari', value: 20, color: '#2fbbe8'},
                {label: 'Firefox', value: 15, color: '#72cae7'},
                {label: 'Opera', value: 5, color: '#d9544f'},
                {label: 'Internet Explorer', value: 10, color: '#ffc100'},
                {label: 'Other', value: 25, color: '#1693A5'}
            ],
            resize: true
        });
        //*Initialize morris chart


        // Initialize owl carousels
        $('#todo-carousel, #feed-carousel, #notes-carousel').owlCarousel({
            autoPlay: 5000,
            stopOnHover: true,
            slideSpeed: 300,
            paginationSpeed: 400,
            singleItem: true,
            responsive: true
        });

        $('#appointments-carousel').owlCarousel({
            autoPlay: 5000,
            stopOnHover: true,
            slideSpeed: 300,
            paginationSpeed: 400,
            navigation: true,
            navigationText: ['<i class=\'fa fa-chevron-left\'></i>', '<i class=\'fa fa-chevron-right\'></i>'],
            singleItem: true
        });
        //* Initialize owl carousels


        // Initialize rickshaw chart
        var graph;

        var seriesData = [[], []];
        var random = new Rickshaw.Fixtures.RandomData(50);

        for (var i = 0; i < 50; i++) {
            random.addData(seriesData);
        }

        graph = new Rickshaw.Graph({
            element: document.querySelector("#realtime-rickshaw"),
            renderer: 'area',
            height: 133,
            series: [{
                    name: 'Series 1',
                    color: 'steelblue',
                    data: seriesData[0]
                }, {
                    name: 'Series 2',
                    color: 'lightblue',
                    data: seriesData[1]
                }]
        });

        var hoverDetail = new Rickshaw.Graph.HoverDetail({
            graph: graph,
        });

        graph.render();

        setInterval(function () {
            random.removeData(seriesData);
            random.addData(seriesData);
            graph.update();

        }, 1000);
        //* Initialize rickshaw chart

        //Initialize mini calendar datepicker
        $('#mini-calendar').datetimepicker({
            inline: true
        });
        //*Initialize mini calendar datepicker


        //todo's
        $('.widget-todo .todo-list li .checkbox').on('change', function () {
            var todo = $(this).parents('li');

            if (todo.hasClass('completed')) {
                todo.removeClass('completed');
            } else {
                todo.addClass('completed');
            }
        });
        //* todo's


        //initialize datatable
        $('#project-progress').DataTable({
            "aoColumnDefs": [
                {'bSortable': false, 'aTargets': ["no-sort"]}
            ],
        });
        //*initialize datatable

        //load wysiwyg editor
        $('#summernote').summernote({
            toolbar: [
                //['style', ['style']], // no style button
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']],
                        //['insert', ['picture', 'link']], // no insert buttons
                        //['table', ['table']], // no table button
                        //['help', ['help']] //no help button
            ],
            height: 143   //set editable area's height
        });
        //*load wysiwyg editor
    });
</script>

<script>
    $(window).load(function () {

        //initialize basic datatable
        var table = $('#basic-usage').DataTable({
            "ajax": 'assets/extras/datatables-basic.json',
            "columns": [
                {"data": "id"},
                {"data": "firstName"},
                {"data": "lastName"}
            ],
            "aoColumnDefs": [
                {'bSortable': false, 'aTargets': ["no-sort"]}
            ],
            "dom": 'Rlfrtip'
        });

        $('#basic-usage tbody').on('click', 'tr', function () {
            if ($(this).hasClass('row_selected')) {
                $(this).removeClass('row_selected');
            }
            else {
                table.$('tr.row_selected').removeClass('row_selected');
                $(this).addClass('row_selected');
            }
        });
        //*initialize basic datatable




        //initialize editable datatable

        function restoreRow(oTable, nRow) {
            var aData = oTable.row(nRow).data();
            var jqTds = $('>td', nRow);

            for (var i = 0, iLen = jqTds.length; i < iLen; i++) {
                oTable.row(nRow).data(aData[i]);
            }

            oTable.draw();
        }

        function editRow(oTable, nRow) {
            var aData = oTable.row(nRow).data();
            var jqTds = $('>td', nRow);
            jqTds[0].innerHTML = '<input type="text" class="form-control input-sm" value="' + aData[0] + '">';
            jqTds[1].innerHTML = '<input type="text" class="form-control input-sm" value="' + aData[1] + '">';
            jqTds[2].innerHTML = '<input type="text" class="form-control input-sm" value="' + aData[2] + '">';
            jqTds[3].innerHTML = '<input type="text" class="form-control input-sm" value="' + aData[3] + '">';
            jqTds[4].innerHTML = '<input type="text" class="form-control input-sm" value="' + aData[4] + '">';
            jqTds[5].innerHTML = '<a role="button" tabindex="0" class="edit text-success text-uppercase text-strong text-sm mr-10">Save</a><a role="button" tabindex="0" class="cancel text-warning text-uppercase text-strong text-sm mr-10">Cancel</a>';
        }

        function saveRow(oTable, nRow) {
            var jqInputs = $('input', nRow);
            oTable.cell(nRow, 0).data(jqInputs[0].value);
            oTable.cell(nRow, 1).data(jqInputs[1].value);
            oTable.cell(nRow, 2).data(jqInputs[2].value);
            oTable.cell(nRow, 3).data(jqInputs[3].value);
            oTable.cell(nRow, 4).data(jqInputs[4].value);
            oTable.cell(nRow, 5).data('<a role="button" tabindex="0" class="edit text-primary text-uppercase text-strong text-sm mr-10">Edit</a><a role="button" tabindex="0" class="delete text-danger text-uppercase text-strong text-sm mr-10">Remove</a>');
            oTable.draw();
        }

        var table2 = $('#editable-usage');

        var oTable = $('#editable-usage').DataTable({
            "aoColumnDefs": [
                {'bSortable': false, 'aTargets': ["no-sort"]}
            ]
        });

        var nEditing = null;
        var nNew = false;

        $('#add-entry').click(function (e) {
            e.preventDefault();

            if (nNew && nEditing) {
                if (confirm("Previous row is not saved yet. Save it ?")) {
                    saveRow(oTable, nEditing); // save
                    $(nEditing).find("td:first").html("Untitled");
                    nEditing = null;
                    nNew = false;

                } else {
                    oTable.row(nEditing).remove().draw(); // cancel
                    nEditing = null;
                    nNew = false;

                    return;
                }
            }

            var aiNew = oTable.row.add(['', '', '', '', '', '', '']).draw();
            var nRow = oTable.row(aiNew[0]).node();
            editRow(oTable, nRow);
            nEditing = nRow;
            nNew = true;
        });

        table2.on('click', '.delete', function (e) {
            e.preventDefault();

            if (confirm("Are you sure?") == false) {
                return;
            }

            var nRow = $(this).parents('tr')[0];
            oTable.row(nRow).remove().draw();
            alert("Deleted!");
        });

        table2.on('click', '.cancel', function (e) {
            e.preventDefault();
            if (nNew) {
                oTable.row(nEditing).remove().draw();
                nEditing = null;
                nNew = false;
            } else {
                restoreRow(oTable, nEditing);
                nEditing = null;
            }
        });

        table2.on('click', '.edit', function (e) {
            e.preventDefault();

            /* Get the row as a parent of the link that was clicked on */
            var nRow = $(this).parents('tr')[0];

            if (nEditing !== null && nEditing != nRow) {
                /* Currently editing - but not this row - restore the old before continuing to edit mode */
                restoreRow(oTable, nEditing);
                editRow(oTable, nRow);
                nEditing = nRow;
            } else if (nEditing == nRow && this.innerHTML == "Save") {
                /* Editing this row and want to save it */
                saveRow(oTable, nEditing);
                nEditing = null;
                alert("Updated!");
            } else {
                /* No edit in progress - let's start one */
                editRow(oTable, nRow);
                nEditing = nRow;
            }
        });
        //*initialize editable datatable

        //initialize responsive datatable
        var table3 = $('#responsive-usage').DataTable({
            "ajax": 'assets/extras/datatables-responsive.json',
            "columns": [
                {"data": "id"},
                {"data": "firstName"},
                {"data": "lastName"},
                {"data": "tel"},
                {"data": "address"},
                {"data": "city"},
                {"data": "state"},
                {"data": "zip"}
            ],
            "aoColumnDefs": [
                {'bSortable': false, 'aTargets': ["no-sort"]}
            ]
        });
        //*initialize responsive datatable

        //initialize responsive datatable
        function stateChange(iColumn, bVisible) {
            console.log('The column', iColumn, ' has changed its status to', bVisible);
        }

        var table4 = $('#advanced-usage').DataTable({
            "ajax": 'assets/extras/datatables-basic.json',
            "columns": [
                {"data": "id"},
                {"data": "firstName"},
                {"data": "lastName"}
            ],
            "aoColumnDefs": [
                {'bSortable': false, 'aTargets': ["no-sort"]}
            ]
        });

        var colvis = new $.fn.dataTable.ColVis(table4);

        $(colvis.button()).insertAfter('#colVis');
        $(colvis.button()).find('button').addClass('btn btn-default').removeClass('ColVis_Button');

        var tt = new $.fn.dataTable.TableTools(table4, {
            sRowSelect: 'single',
            "aButtons": [
                'copy',
                'print', {
                    'sExtends': 'collection',
                    'sButtonText': 'Save',
                    'aButtons': ['csv', 'xls', 'pdf']
                }
            ],
            "sSwfPath": "assets/js/vendor/datatables/extensions/TableTools/swf/copy_csv_xls_pdf.swf",
        });

        $(tt.fnContainer()).insertAfter('#tableTools');
        //*initialize responsive datatable

    });

</script>
@endsection