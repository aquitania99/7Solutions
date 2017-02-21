@extends('layouts.app-dashboard')

@section('content-row')
    <h1>List users.....</h1>
    <div class="panel panel-flat">
        <table class="table datatable-basic table-bordered table-striped table-hover">
            <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email Address</th>
                <th>Telephone</th>
                <th>Status</th>
                <th>Passport #</th>
                <th>Registry Date</th>
                <th>User Type</th>
                <!--<th class="text-center">Actions</th>-->
            </tr>
            </thead>
            <tbody>
            @foreach($data as $row)
                <tr>
                    <td>{{$row->firstname}}</td>
                    <td>{{$row->lastname}}</td>
                    <td>{{$row->email}}</td>
                    <td>{{$row->mobile}}</td>
                    <td><span class="label label-success">Active</span></td>
                    <td>ABC123456</td>
                    <td>{{$row->created_at}}</td>
                    <td>{{$row->type}}</td>
<!--                    <td class="text-center">
                        <ul class="icons-list">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="icon-menu9"></i>
                                </a>

                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="#"><i class="icon-file-pdf"></i>Edit</a></li>
                                    <li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a></li>
                                    <li><a href="#"><i class="icon-mailbox"></i>Email</a></li>
                                </ul>
                            </li>
                        </ul>
                    </td>-->
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    @endsection
@section('extraJs')
    <!-- Theme JS files -->
    <script type="text/javascript" src="{{asset('assets/js/plugins/tables/datatables/datatables.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/pages/datatables_basic.js')}}"></script>
    <!-- /theme JS files -->
    @parent
@stop