@extends('layout') {{-- Ensure this extends a valid layout --}}

@section('title', 'Exploring Blade')

@section('content')
    <h2>Conditional Statements (@if, @elseif, @else)</h2>
    
    {{-- Define user role --}}
    @php $userRole = 'admin'; @endphp

    @if($userRole === 'admin')
        <p>Welcome, Admin!</p>
    @elseif($userRole === 'editor')
        <p>Welcome, Editor!</p>
    @else
        <p>Welcome, User!</p>
    @endif

    <hr>

    <h2>Looping (@for, @foreach, @forelse, @while)</h2>

    <h3>Using @for</h3>
    @for ($i = 1; $i <= 5; $i++)
        <p>Iteration {{ $i }}</p>
    @endfor

    <h3>Using @foreach (Loop through an array)</h3>

    {{-- Debugging: Print the $users variable --}}
    <pre>{{ var_dump($users ?? 'Users not set') }}</pre>

    {{-- Ensure $users is passed from the controller --}}
    @if(isset($users) && is_array($users))
        @foreach ($users as $user)
            <p>User: {{ $user }}</p>
        @endforeach
    @else
        <p>No users available.</p>
    @endif

    <h3>Using @forelse (Handles empty arrays)</h3>

    {{-- Debugging: Print the $products variable --}}
    <pre>{{ var_dump($products ?? 'Products not set') }}</pre>

    {{-- Ensure $products is defined --}}
    @php $products = $products ?? []; @endphp

    @forelse ($products as $product)
        <p>Product: {{ $product }}</p>
    @empty
        <p>No products available.</p>
    @endforelse

@endsection
