@extends('layouts.main-app')

@section('styles')

<link rel="stylesheet" type="text/css" href="/datatables/dataTables.semanticui.min.css">

@endsection

@section('content')

<div class="ui secondary pointing fluid menu">
    <h2 class="ui header dash_header">
        <i class="users icon"></i>
        <div class="content">
            Clients
            <div class="sub header">Listings of all clients</div>
        </div>
    </h2>
</div>

<div class="ui grid">
    <div class="twelve wide column">
        @include('partials.clients-datatable')
    </div>
    <div class="seven wide column"></div>
</div>

@endsection

@section('scripts')

<script type="text/javascript" src="/datatables/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="/datatables/dataTables.semanticui.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('#clients').DataTable();
});
</script>

@endsection