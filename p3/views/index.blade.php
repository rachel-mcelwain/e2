@extends('templates/master')

@section('content')

    <h2>Project 3</h2>
    <a href='/history'>Game History</a>
    <h2>Game Mechanics</h2>
        <ul>
            <li>Please choose either Rock, Paper, or Scissors as your element</li>
            <li>Once you have chosen, press the "LET'S GO" button to submit</li>
            <li>Remember, Rock beats scissors, Scissors beat Paper, and Paper beats Rock!</li>
        </ul>
    
    <h2>Choose Your Element!</h2>
        <form method='POST' action='/process'>
            <input type='radio' test='rock-radio' name='pick' value='rock' id='rock'><label for='rock'>Rock</label><br>
            <input type='radio' test='paper-radio' name='pick' value='paper' id='paper'><label for='paper'>Paper</label><br>
            <input type='radio' test='scissors-radio' name='pick' value='scissors' id='scissors'><label for='scissors'>Scissors</label><br>

            <button test='submit-button' type='submit'>LET'S GO!</button>
    </form><br> 

    @if($app->errorsExist())
        <ul class='error alert alert-danger'>
            @foreach($app->errors() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    @if($pick)
        <div test='results-div' class='results'>
            You chose {{ $pick }} and your opponent chose {{ $element }}.

            @if($pick == $element)
                There was a tie!
            @elseif($pick == 'rock' && $element == 'scissors')
                Congrats! You won!
            @elseif($pick == 'paper' && $element == 'rock')
                Congrats! You won!
            @elseif($pick == 'scissors' && $element == 'paper')
                Congrats! You won!
            @else
                Sorry, you lose. Try again.
        @endif

    @endif
@endsection
