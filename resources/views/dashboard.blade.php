@extends('layouts.main-app')

@section('styles')

<link rel="stylesheet" type="text/css" href="/datatables/dataTables.semanticui.min.css">
<link rel="stylesheet" type="text/css" href="/css/jquery.datetimepicker.css">

@endsection

@section('content')

<div class="ui secondary pointing fluid menu">
    <h2 class="ui header dash_header">
        <i class="dashboard icon"></i>
        <div class="content">
            Dashboard
            <div class="sub header">ERC Travel Services Dashboard</div>
        </div>
    </h2>
</div>

<div class="ui grid">
    <div class="twelve wide column">

        <div class="ui three statistics">
            <div class="statistic">
                <div class="value">
                    <i class="user icon"></i> {{ $clients_count }}
                </div>
                <div class="label">
                    <a href="/clients">
                        Clients
                    </a>
                </div>
            </div>
        </div>

        <div class="ui three statistics">
            <div class="statistic">
                <div class="value">
                    <i class="user icon"></i> 0
                </div>
                <div class="label">
                    <a href="/sa">
                        SA
                    </a>
                </div>
            </div>
        </div>

        <div class="ui three statistics">
            <div class="statistic">
                <div class="value">
                    <i class="user icon"></i> 0
                </div>
                <div class="label">
                    <a href="/po">
                        PO
                    </a>
                </div>
            </div>
        </div>

    </div>

</div>

@endsection

@section('scripts')
<script type="text/javascript" src="/datatables/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="/datatables/dataTables.semanticui.min.js"></script>
<script type="text/javascript" src="/js/jquery.datetimepicker.full.min.js"></script>

@endsection