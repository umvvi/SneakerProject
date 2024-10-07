<table>
    <thead>
    <tr>
        <th>Name</th>
        <th>Ticket Type</th>
        <th>Location</th>
        <th>Date</th>
    </tr>
    </thead>
    <tbody>
    @foreach($tickets as $ticket)
        <tr>
            <td>{{ $ticket->first_name }} {{ $ticket->last_name }}</td>
            <td>{{ $ticket->ticket_type }}</td>
            <td>{{ $ticket->location }}</td>
            <td>{{ $ticket->created_at }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
