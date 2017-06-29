@extends('layouts.master-administration')

@section('title', 'Insurance Quote Requests | ' . ucwords($general_details['type']) . ' | Details')
@section('page_title', ucwords($general_details['type']) . ' Insurance Quote Requests')
@section('previous_page', '<li><a href="'. route('admin_insurance_requests_by_type', ['insurance_type' => $general_details['type']]) .'">'. ucwords($general_details['type']) .' Insurance Quote Requests</a></li>')
@section('active_page', 'View Details')
@section('content')

    <!-- Nav tabs -->
    <ul class="nav nav-tabs nav-bg" role="tablist">
        <li role="presentation" class="active"><a href="#general" aria-controls="general" role="tab" data-toggle="tab">General</a></li>
        <li role="details"><a href="#details" aria-controls="details" role="tab" data-toggle="tab">Insurance Details</a></li>

        @if (!empty($insurance_product_list))
            <li role="products"><a href="#products" aria-controls="products" role="tab" data-toggle="tab">Insurance Products</a></li>
        @endif

        @if (!empty($operations))
            <li role="operations"><a href="#operations" aria-controls="operations" role="tab" data-toggle="tab">Transport Operation Nature</a></li>
        @endif
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="general">
            <div class="well">
                <table class="view-data-table general-quote-table">
                    <tbody>
                        <tr>
                            <td><label>Reference Number: </label></td>
                            <td><span>{{ $general_details['reference_number'] }}</span></td>
                        </tr>
                        <tr>
                            <td><label>Full Name: </label></td>
                            <td><span>{{ $general_details['full_name'] }}</span></td>
                        </tr>
                        <tr>
                            <td><label>Email: </label></td>
                            <td><span>{{ $general_details['email'] }}</span></td>
                        </tr>
                        <tr>
                            <td><label>Address: </label></td>
                            <td><span>{{ $general_details['address'] }}</span></td>
                        </tr>
                        <tr>
                            <td><label>Post Code: </label></td>
                            <td><span>{{ $general_details['postal_code'] }}</span></td>
                        </tr>
                        <tr>
                            <td><label>Phone: </label></td>
                            <td><span>{{ $general_details['contact_number'] }}</span></td>
                        </tr>
                        <tr>
                            <td><label>Preferred method of contact: </label></td>
                            <td><span>{{ $general_details['contact_mode'] }}</span></td>
                        </tr>
                        <tr>
                            <td><label>Occupation: </label></td>
                            <td><span>{{ $occupation_name }}</span></td>
                        </tr>
                        <tr>
                            <td><label>Date Insurance Required: </label></td>
                            <td><span>{{ ($general_details['date_required']) ? date_format(date_create($general_details['date_required']), 'F ,d Y') : '' }}</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div role="tabpanel" class="tab-pane" id="details">
            <div class="well">

                @if($general_details['type'] == $insuranceType::TYPE_BUSINESS)

                    @include('administration.partials._business')

                @elseif($general_details['type'] == $insuranceType::TYPE_LIFE)

                    @include('administration.partials._life')

                @elseif($general_details['type'] == $insuranceType::TYPE_OTHER)

                    @include('administration.partials._other')

                @elseif($general_details['type'] == $insuranceType::TYPE_WORKERS_COMPENSATION)

                    @include('administration.partials._workers')

                @elseif($general_details['type'] == $insuranceType::TYPE_LIABILITY)

                    @include('administration.partials._liability')

                @elseif($general_details['type'] == $insuranceType::TYPE_TRANSPORT_OPERATOR)

                    @include('administration.partials._transport')

                @elseif($general_details['type'] == $insuranceType::TYPE_HOME_CONTENTS)

                    @include('administration.partials._home-contents')

                @elseif($general_details['type'] == $insuranceType::TYPE_TRAVEL)

                    @include('administration.partials._travel')

                @endif
            </div>
        </div>

        @if(!empty($insurance_product_list))
            <div role="tabpanel" class="tab-pane" id="products">
                <div class="well">
                    <ol>
                        @foreach ($insurance_product_list as $product)
                            <li>{{ $product->name }}</li>
                        @endforeach
                    </ol>
                </div>
            </div>
        @endif

        @if(!empty($operations))
             <div role="tabpanel" class="tab-pane" id="operations">
                 <div class="well">
                    <ol>
                        @foreach ($operations as $operation)
                            <li>{{ $operation->name }}</li>
                        @endforeach
                    </ol> 
                 </div>
             </div>
        @endif
    </div>
@endsection
