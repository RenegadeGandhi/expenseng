@extends('layouts.home')
@push('css')
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="/extras/datatables/css/buttons.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/extras/datatables/css/fixedHeader.bootstrap4.css">
    <script src="/extras/jquery/jquery-3.3.1.min.js"></script>
    <script  type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" />

        <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" />
        <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<title>ExpenseNg - Companies</title>
@endpush

@section('content')
<div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <div class="row">
                    <div class="col-xl-12">
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="mb-0">Registered Companies </h3>
                                <p></p>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="table table-striped table-bordered second" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>S/N</th>
                                                <th>Name</th>
                                                <th>Short Name</th>
                                                <th>Company Twitter</th>
                                                <th>CEO</th>
                                                <th>CEO Twitter</th>
                                                <th>Actions</th>

                                            </tr>
                                        </thead>

                                        <tbody>
                                        @if (count($companies ) > 0)

                                            <tr>
                                            @foreach ($companies as $company)
                                                <td>
                                                    {{$company->id}}
                                                </td>
                                                <td>{{$company->name}}</td>
                                            <td><a href="/admin/{{$company->shortname}}/people"></a>{{$company->shortname}}</td>
                                                <td>{{$company->industry}}</td>
                                                <td>{{$company->ceo}}</td>
                                                <td>{{$company->twitter}}</td>
                                                <td>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <a href="{{'/admin/company/edit/' . $company->id}}"><i class="fa fa-edit" style="color: #00945E"></i></a>
                                                        </div>
                                                        <!--modal begin-->

                                                            <div class="col-md-6">
                                                            <i class="fa fa-trash" data-toggle="modal" data-target="#exampleModal" style="color: red"></i>
                                                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Are you sure???</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">

                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                    <form action="{{'/admin/company/delete/'. $ministry->id}}" method="post" >
                                                                @method('delete')
                                                                @csrf
                                                                <button type="button" class="btn btn-danger">Delete</button>
                                                                </form>
                                                                </div>
                                                                </div>
  </div>
</div>
                                                    </div>
                                                    </div>


                                                </td>
                                            </tr>

                                        @endforeach
                                        @endif

                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>S/N</th>
                                                <th>Company Name</th>
                                                <th>Short Name</th>
                                                <th>Company Twitter</th>
                                                <th>CEO</th>
                                                <th>CEO Twitter</th>
                                                <th>Actions</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end data table  -->
                    <!-- ============================================================== -->
                </div>
@endsection

@section('js')

    <!-- main js -->
    <script src="{{ asset('js/main-js.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/dashboard-ecommerce.js') }}" type="text/javascript"></script>



    <!-- bootstap bundle js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.bundle.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <!-- slimscroll js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/slimscroll/jquery.slim.min.js"></script>
    <script src="/vendor/slimscroll/jquery.slimscroll.js"></script>
    <!-- datatable  js -->
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <!-- sparkline js -->
    <script src="/vendor/charts/sparkline/jquery.sparkline.js"></script>
    <!-- morris js -->
    <script src="/vendor/charts/morris-bundle/raphael.min.js"></script>
    <script src="/vendor/charts/morris-bundle/morris.js"></script>
    <!-- chart c3 js -->
    <script src="/vendor/charts/c3charts/c3.min.js"></script>
    <script src="/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
    <script src="/vendor/charts/c3charts/C3chartjs.js"></script>
    <script>
        jQuery(document).ready(function() {
    $('#example').DataTable();
    } );
    </script>



@endsection

