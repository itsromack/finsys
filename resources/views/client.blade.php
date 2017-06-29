@extends('layouts.main-app')

@section('content')

<div class="ui secondary pointing fluid menu">
    <h2 class="ui header dash_header">
        <i class="user icon"></i>
        <div class="content">
            {{ $client->title }} {{ $client->getFullName() }}
            <div class="sub header">
                Client Information
            </div>
        </div>
    </h2>
</div>

@include('common.partials.announcement')
@include('common.partials.flash-message')
@include('common.partials.form-request-validation')

<div class="ui grid">
    <div class="twelve wide column">
        <form action="/clients/update" method="POST">
            {{ csrf_field() }}
            <input type="hidden" name="client_id" value="{{ $client->id }}">
            <div class="ui form">
                <div class="four fields">
                    <div class="field">
                        <label>Title</label>
                        <input type="text" name="title" placeholder="Title" value="{{ $client->title }}">
                    </div>
                    <div class="field">
                        <label>First Name or Company Name</label>
                        @if ($errors->any())
                        <input type="text" name="first_name" placeholder="First Name" value="{!! old('first_name') !!}">
                        @else
                        <input type="text" name="first_name" placeholder="First Name" value="{{ $client->first_name }}">
                        @endif
                    </div>
                    <div class="field">
                        <label>Middle Name</label>
                        <input type="text" name="middle_name" placeholder="Middle Name" value="{{ $client->middle_name }}">
                    </div>
                    <div class="field">
                        <label>Last Name</label>
                        <input type="text"  name="last_name"placeholder="Last Name" value="{{ $client->last_name }}">
                    </div>
                </div>
                <div class="four fields">
                    <div class="field">
                        <label>Birthdate {{ $client->birthdate }}</label>
                        <input type="date" name="birthdate" placeholder="Birthdate" value="{{ $client->birthdate }}">
                    </div>
                    <div class="field">
                        <label>Civil Status</label>
                        <input type="text" name="civil_status" placeholder="Civil Status" value="{{ $client->civil_status }}">
                    </div>
                    <div class="field">
                        <label>Profession</label>
                        <input type="text" name="profession" placeholder="Profession" value="{{ $client->profession }}">
                    </div>
                    <div class="field">
                        <label>Vehicle Plate Number</label>
                        <input type="text" name="vehicle_plate_number" placeholder="Vehicle Plate Number" value="{{ $client->vehicle_plate_number }}">
                    </div>
                </div>
                <div class="three fields">
                    <div class="field">
                        <label>Gender</label>
                        <input type="radio" name="gender" value="male" class="gender" @if ($client->gender == 'male') checked="checked" @endif> Male
                        <input type="radio" name="gender" value="female" class="gender" @if ($client->gender == 'female') checked="checked" @endif> Female
                    </div>
                    <div class="field">
                        <label>Email</label>
                        @if ($errors->any())
                        <input type="email" name="email" placeholder="Email" value="{!! old('email') !!}">
                        @else
                        <input type="email" name="email" placeholder="Email" value="{{ $client->email }}">
                        @endif
                    </div>
                    <div class="field">
                        <label>Mobile Number</label>
                        @if ($errors->any())
                        <input type="text" name="mobile_number" placeholder="Mobile Number" value="{!! old('mobile_number') !!}">
                        @else
                        <input type="text" name="mobile_number" placeholder="Mobile Number" value="{{ $client->mobile_number }}">
                        @endif
                    </div>
                </div>
                <div class="three fields">
                    <div class="field">
                        <label>Address</label>
                        <input type="text" name="address" placeholder="Address" value="{{ $client->address }}">
                    </div>
                    <div class="field">
                        <label>Town</label>
                        <input type="text" name="town" placeholder="Town" value="{{ $client->town }}">
                    </div>
                    <div class="field">
                        <label>City</label>
                        <input type="text" name="city" placeholder="City" value="{{ $client->city }}">
                    </div>
                </div>
                <div class="four fields">
                    <div class="field">
                        <label>Province</label>
                        <input type="text" name="province" placeholder="Province" value="{{ $client->province }}">
                    </div>
                    <div class="field">
                        <label>Postal Code</label>
                        <input type="text" name="postal_code" placeholder="Postal Code" value="{{ $client->postal_code }}">
                    </div>
                    <div class="field">
                        <label>Country</label>
                        @include('shared.countries-dropdown')
                    </div>
                    <div class="field">
                        <label>Nationality</label>
                        <input type="text" name="nationality" placeholder="Nationality" value="{{ $client->nationality }}">
                    </div>
                </div>
                <div class="one fields">
                    <a class="ui button" href="/clients">
                        <i class="arrow left icon"></i>
                        Back to clients list
                    </a>
                    <button class="ui button blue">
                        <i class="save icon"></i>
                        Save Changes
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

@if (count($client->bookings()->get()))
<div class="ui secondary pointing fluid menu">
    <h3 class="ui header dash_header">Bookings</h3>
</div>

<div class="ui grid">
    <div class="twelve wide column">
        <table id="available-rooms" class="ui celled table" cellspacing="0" width="80%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Room</th>
                    <th>Number</th>
                    <th>Type</th>
                    <th>Booking Schedule</th>
                    <th>Pax</th>
                    <th></th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>ID</th>
                    <th>Room</th>
                    <th>Number</th>
                    <th>Type</th>
                    <th>Booking Schedule</th>
                    <th>Pax</th>
                    <th></th>
                </tr>
            </tfoot>
            <tbody>
                @foreach ($client->bookings()->get() as $booking)
                <?php
                $room = $booking->room()->first();
                ?>
                <tr>
                    <td>{{ $booking->id }}</td>
                    <td>
                        <strong>
                            {{ $room->name }}
                        </strong>
                    </td>
                    <td>{{ $room->number }}</td>
                    <td>{{ $room->type }}</td>
                    <td>{!! $booking->getBookingSchedule() !!}</td>
                    <td>{{ $booking->adults_count }}</td>
                    <td>
                        <a href="/bookings/{{ $booking->id }}" class="ui mini button">
                            <i class="icon folder open"></i>
                            Open
                        </a>
                        <a href="/bookings/{{ $booking->id }}/confirmation" target="_blank" class="ui mini button">
                            <i class="icon mail"></i>
                            Confirmation
                        </a>
                        <a href="/payments/{{ $booking->id }}" class="ui mini button">
                            <i class="icon payment"></i>
                            Payment Details
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endif

@endsection

@section('scripts')
<script type="text/javascript">
(function(){
    $('.hotel-countries').val('{{ $client->country }}');
})();
</script>
@endsection