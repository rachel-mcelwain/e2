<!doctype html>
<html lang='en'>

<head> 
    <title>Project 2 - Rock, Paper, Scissors</title>
    <meta charset='utf-8'>
    <link href=data:, rel=icon>

</head>

<body>

    <h2>Project 2</h2>

    <h2>Game Mechanics</h2>
        <ul>
            <li>You will be player A</li>
            <li>Please choose either Rock, Paper, or Scissors as your element</li>
            <li>Once you have chosen, press the "LET'S GO" button to submit</li>
            <li>Remember, Rock beats scissors, Scissors beat Paper, and Paper beats Rock!</li>
        </ul>
    
    <h2>Choose Your Element!</h2>

    <form method='POST' action='process.php'>

        <input type='radio' id='rock' name='pick' value='rock' checked><label for='rock'>Rock</label><br>
        <input type='radio' id='paper' name='pick' value='paper'><label for='paper'>Paper</label><br>
        <input type='radio' id='scissors' name='pick' value='scissors'><label for='scissors'>Scissors</label><br>

        <button type='submit'>LET'S GO!</button>
    </form>

    <?php if (isset($_SESSION['results'])) { ?>
    <h2>Results</h2>

        Your opponent chose <?php echo $element; ?><br>
        You chose <?php echo $pick; ?><br>
        <?php echo $winner; ?>
    
    <?php } ?>

</body>

</html>
