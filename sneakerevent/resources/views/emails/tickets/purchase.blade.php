<!-- resources/views/tickets/purchase.blade.php -->
<form action="{{ route('tickets.store') }}" method="POST">
    @csrf
    <label for="event_id">Select Event:</label>
    <select name="event_id" id="event_id" required>
        @foreach ($events as $event)
            <option value="{{ $event->id }}">{{ $event->name }}</option>
        @endforeach
    </select>

    <label for="number_of_tickets">Number of Tickets:</label>
    <input type="number" name="number_of_tickets" id="number_of_tickets" min="1" required>

    <button type="submit">Purchase Tickets</button>
</form>
