@extends('layouts.master-administration')

@section('title', 'Insurance Quote Requests | ' . ucwords($insurance_type))
@section('page_title', ucwords($insurance_type) . ' Insurance Quote Requests')
@section('active_page', ucwords($insurance_type) . ' Insurance Quote Requests')
@section('admin_head')
    <link rel="stylesheet" href="/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
@endsection
@section('content')

@if (Session::has('message'))
    <div class="alert {{ Session::get('alert-class') }}">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Warning!</strong> {{ Session::get('message') }}
    </div>
@endif
<div class="well">
    <table id="messages" class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th>Reference Number</th>
                <th>Type</th>
                <th>Full Name</th>
                <th>Date Created</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if (!empty($requests))
            
                @foreach ($requests as $request)

                <tr>
                    <td><strong>{{ $request->reference_number }}</strong></td>
                    <td>
                        <i class="fa fa-{{ $request->getFontAwesomeIcon() }}" aria-hidden="true"></i>
                        <span class="insurance-type">{{ ucfirst($request->type) }}</span>
                    </td>
                    <td>{{ $request->full_name }}</td>
                    <td>{{ $request->created_at }}</td>
                    <td><a href="{{ route('admin_view_requests', ['reference_number' => $request->reference_number]) }}" class="btn btn-xs btn-info">View</a></td>
                </tr>
        
                @endforeach

            @endif
        </tbody>
        <tfoot>
            <tr>
                <th>Reference Number</th>
                <th>Type</th>
                <th>Full Name</th>
                <th>Date Created</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>
</div>
@endsection

@section('admin_foot')
    <script src="/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#messages').DataTable({
                "lengthMenu": [ 25, 50, 75, 100 ],
                "order": [[ 3, "desc" ]]
            });
        });
    </script>
@endsection