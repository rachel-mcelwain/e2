<!doctype html>
<html lang='en'>

<head> 
    <title>Project 2 - Rock, Paper, Scissors</title>
    <meta charset='utf-8'>
    <link href=data:, rel=icon>

</head>

<body>
    <h2>Project 2</h2>

    <form method='POST' action='process.php'>

        <input type='radio' id='rock' name='pick' value='rock'><label for='rock'>Rock</label>
        <input type='radio' id='paper' name='pick' value='paper'><label for='paper'>Paper</label>
        <input type='radio' id='scissors' name='pick' value='scissors'><label for='scissors'>Scissors</label>

        <button type='submit'>LET'S GO!</button>
    </form>

    <h2>Game Mechanics</h2>

    <h2>Results</h2>
        <ul>
            <li>Player A chose <?php echo $playerA ?></li>
            <li>Player B chose <?php echo $playerB ?></li>
            <li>The winner is <?php echo $winner ?></li>
        </ul>
</body>
