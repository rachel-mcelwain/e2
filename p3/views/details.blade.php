@extends('templates/master')

@section('title')
    Round Details
@endsection

@section('content')
    <h2>Round Details</h2>
    <a href='/'>Home</a><br>
    <a href='/history'>History</a>

    <ul>
        <li>Round id: {{ $round['id'] }}</li>
        <li>Player's Choice: {{ $round['pick'] }}</li>
        <li>Opponent's Choice: {{ $round['element'] }}</li>
        <li>Winner: {{ $round['winner'] }}</li>
        <li>Timestamp: {{ $round['timestamp'] }}</li>
    </ul>
@endsection