@extends('admin.layouts.app')

@section('title','Admin - Leagues')

@section('body')

    <div class="main-content">
        <div class="content-heading clearfix">
            <div class="heading-left">
                <h1 class="page-title">Leagues</h1>
                <p class="page-subtitle">All Leagues</p>
            </div>
            <ul class="breadcrumb">
                <li><a href="/admin/admin"><i class="fa fa-home"></i> Home</a></li>
                <li><a href="#" class="active">Leagues</a></li>
            </ul>
        </div>
        <div class="container-fluid">

            <!-- FEATURED DATATABLE -->
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">Leagues Management</h3>
                </div>
                <div class="project-heading">
                    <div class="row">
                        <div class="col-md-9">
                            {{--<div class="media">--}}
                            {{--<div class="media-left">--}}
                            {{--<img src="assets/img/project-logo.png" class="project-logo" alt="Project Logo">--}}
                            {{--</div>--}}
                            {{--<div class="media-body">--}}
                            {{--<h2 class="project-title">B2B eCommerce Project</h2>--}}
                            {{--<span class="label label-success status">RUNNING</span>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                        </div>
                        <div class="col-md-3 text-right">
                            <div class="btn-group">
                                <a href="/admin/leagues/create" class="btn btn-primary">ADD NEW LEAGUE</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <table id="featured-datatable" class="table table-striped table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>League Name</th>
                            <th>Number of Maps</th>
                            <th>Points per Map</th>
                            <th>League Level</th>
                            <th>Teams per League</th>
                            <th>League Start Date</th>
                            <th>Matchday Start Date</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(isset($all_leagues))
                            @foreach($all_leagues as $key => $al)

                                <tr class="gradeX">
                                    <td>{{$key+1}}</td>
                                    <td>{{$al->league_name}}</td>
                                    <td>{{$al->number_of_maps}}</td>
                                    <td>{{$al->points_per_map}}</td>
                                    <td>{{$al->league_level}}</td>
                                    <td>{{$al->teams_per_league}}</td>
                                    <td>{{date('d M Y H:i', strtotime($al->league_start_date))}}</td>
                                    <td>{{date('d M Y H:i', strtotime($al->matchday_start_date))}}</td>
                                    <td>
                                        <span class="actions">
                                            <a href="/admin/leagues/edit/{{$al->id}}"><i class="fa fa-pencil"></i></a>
                                            <a href="/admin/leagues/destroy/{{$al->id}}"><i class="fa fa-trash"></i></a>
                                        </span>
                                    </td>
                                </tr>

                        @endforeach

                        @endif

                    </table>
                </div>
            </div>
            <!-- END FEATURED DATATABLE -->
        </div>
    </div>


    <script src="{{asset('admin/assets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('admin/assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('admin/assets/vendor/pace/pace.min.js')}}"></script>
    <script src="{{asset('admin/assets/vendor/datatables/js-main/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('admin/assets/vendor/datatables/js-bootstrap/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{asset('admin/assets/vendor/datatables-colreorder/dataTables.colReorder.js')}}"></script>
    <script src="{{asset('admin/assets/vendor/datatables-tabletools/js/dataTables.tableTools.js')}}"></script>
    <script src="{{asset('admin/assets/scripts/klorofilpro-common.js')}}"></script>

    <script>
        $(function()
        {
            // datatable column with reorder extension
            $('#datatable-column-reorder').dataTable(
                {
                    pagingType: "full_numbers",
                    sDom: "RC" +
                    "t" +
                    "<'row'<'col-sm-6'i><'col-sm-6'p>>",
                    colReorder: true,
                });
            // datatable with column filter enabled
            var dtTable = $('#datatable-column-filter').DataTable(
                { // use DataTable, not dataTable
                    sDom: // redefine sDom without lengthChange and default search box
                    "t" +
                    "<'row'<'col-sm-6'i><'col-sm-6'p>>"
                });
            $('#datatable-column-filter thead').append('<tr class="row-filter"><th></th><th></th><th></th><th></th><th></th></tr>');
            $('#datatable-column-filter thead .row-filter th').each(function()
            {
                $(this).html('<input type="text" class="form-control input-sm" placeholder="Search...">');
            });
            $('#datatable-column-filter .row-filter input').on('keyup change', function()
            {
                dtTable
                    .column($(this).parent().index() + ':visible')
                    .search(this.value)
                    .draw();
            });
            // datatable with paging options and live search
            $('#featured-datatable').dataTable(
                {
                    sDom: "<'row'<'col-sm-6'l><'col-sm-6'f>r>t<'row'<'col-sm-6'i><'col-sm-6'p>>",
                });
            // datatable with export feature
            var exportTable = $('#datatable-data-export').DataTable(
                {
                    sDom: "T<'clearfix'>" +
                    "<'row'<'col-sm-6'l><'col-sm-6'f>r>" +
                    "t" +
                    "<'row'<'col-sm-6'i><'col-sm-6'p>>",
                    "tableTools":
                        {
                            "sSwfPath": "assets/vendor/datatables-tabletools/swf/copy_csv_xls_pdf.swf"
                        }
                });
            // datatable with scrolling
            $('#datatable-basic-scrolling').dataTable(
                {
                    scrollY: "300px",
                    scrollCollapse: true,
                    paging: false
                });
        });
    </script>

@endsection