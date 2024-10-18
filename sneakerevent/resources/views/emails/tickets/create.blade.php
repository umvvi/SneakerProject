@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Koop uw Ticket</h1>

        @if(session('notification'))
            <div class="alert alert-success">{{ session('notification') }}</div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        <form action="{{ route('tickets.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="first_name">Voornaam</label>
                <input type="text" name="first_name" id="first_name" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="last_name">Achternaam</label>
                <input type="text" name="last_name" id="last_name" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="location">Locatie</label>
                <input type="text" name="location" id="location" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="ticket_type">Ticket Type</label>
                <select name="ticket_type" id="ticket_type" class="form-control" required>
                    <option value="">Selecteer een type</option>
                    <option value="General">Algemeen</option>
                    <option value="VIP">VIP</option>
                </select>
            </div>

            <input type="hidden" name="event_id" value="1"> <!-- Replace with actual event ID -->
            <input type="hidden" name="event_date" value="2024-09-01"> <!-- Adjust accordingly -->

            <button type="submit" class="btn btn-primary">Bestel Ticket</button>
        </form>
    </div>
@endsection
