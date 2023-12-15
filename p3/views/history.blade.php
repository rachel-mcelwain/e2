@extends('templates/master')

@section('title')
    Round history
@endsection

@section('content')
    <h2>Round History</h2>
    
    <ul>
    @foreach($details as $details)
        <li><a href='/details?id={{ $details['id'] }}'>{{ $details['timestamp'] }}</a></li>
    @endforeach
    </ul>

    <a href='/'>Home</a>
@endsection