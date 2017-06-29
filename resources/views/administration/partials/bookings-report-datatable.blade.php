<table id="booking-payments" class="ui celled table" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th>Booking ID</th>
            <th>Client</th>
            <th>Room</th>
            <th>Price</th>
            <th>Payment</th>
            <th>Paid?</th>
            <th>Date Received</th>
            <th></th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>Booking ID</th>
            <th>Client</th>
            <th>Room</th>
            <th>Price</th>
            <th>Payment</th>
            <th>Paid?</th>
            <th>Date Received</th>
            <th></th>
        </tr>
    </tfoot>
    <tbody>
        @foreach ($bookings as $booking)
        <tr>
            <td>{{ $booking->id }}</td>
            <td>{{ $booking->client_name }}</td>
            <td>{{ $booking->room_number }} {{ $booking->room_name }}</td>
            <td>{{ $booking->price }}</td>
            <td>{{ $booking->payment }}</td>
            <td>{{ $booking->is_paid }}</td>
            <td>{{ $booking->created_at }}</td>
            <td>
                <a class="ui mini blue button" href="/reports/{{ $booking->id }}/{{ $month }}/{{ $year }}">
                    Open&nbsp;
                    <i class="icon search"></i>
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>