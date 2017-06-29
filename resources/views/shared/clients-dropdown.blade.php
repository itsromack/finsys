<select name="client_id" class="ui dropdown hotel-clients">
	<option value="">Select a client</option>
@foreach ($clients as $client)
  	<option value="{{ $client->id }}">{{ $client->getFullName() }}</option>
@endforeach
</select>