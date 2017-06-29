<table id="clients" class="ui celled table" cellspacing="0">
    <thead>
        <tr>
            <th>Full Name</th>
            <th>EMail Address</th>
            <th>Mobile Number</th>
            <th>Gender</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>Full Name</th>
            <th>EMail Address</th>
            <th>Mobile Number</th>
            <th>Gender</th>
        </tr>
    </tfoot>
    <tbody>
        @foreach ($clients as $client)
        <tr>
            <td>
                <a class="ui button mini blue" href="/clients/{{ $client->id }}">
                    <i class="icon user"></i>
                    Info
                </a>
                {{ $client->title }} {{ $client->getFullName() }}
            </td>
            <td>{{ $client->email }}</td>
            <td>{{ $client->mobile_number }}</td>
            <td>{{ $client->gender }}</td>
        </tr>
        @endforeach
    </tbody>
</table>