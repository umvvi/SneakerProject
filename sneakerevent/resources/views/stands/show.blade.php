@extends('layouts.app')

@section('title', $stand->type)

@section('content')
    <div class="container mx-auto">
        <h1 class="text-3xl font-bold">{{ $stand->type }} Stand</h1>
        <p class="text-gray-600">Seller: {{ $stand->seller->name }}</p>
        <p>Status: {{ $stand->rented_status ? 'Rented' : 'Available' }}</p>
        <p class="my-4">Remarks: {{ $stand->remark }}</p>
    </div>
@endsection
