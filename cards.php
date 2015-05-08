<?php session_start() ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="EN" dir="ltr" xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>cards.php</title>
<link rel="stylesheet" type="text/css" href="cards.css" />
</head>

<body>
<h1>Daniel's Card Program</h1>

<p>Numbered cards are worth 2-10 points. Faced cards are worth 10 each. Ace is worth 11 points.</p>

<?php

printCards();
printForm();


function printCards() {
	global $cardScore;
	
	print "<h3>Your Hand:</h3>\n";
	$cardScore = 0;
	
	print "<p>";
		for($x=1; $x<=5; $x++) {
			${'card'.$x} = rand(1,13);
			showCards(${'card'.$x});
			calcCardScore(${'card'.$x});
		}
		print "<br/><br/>";
		if($cardScore >=50) {
			print "Your card score this round is $cardScore!<br/><i>Amazing!</i>";
		}else{
			print "Your card score this round is $cardScore!<br/><br/>";
		}
		print "</p>";
} // end printCards

function showCards($value) {
	print <<<QUOTE
		<img src = "card$value.jpg"
		width = "160"
		height = "220"
		alt = "card: $value" />
QUOTE;
} //end showCards

function calcCardScore($value) {
	global $cardScore;

	switch($value) {
		case 1:
			$cardScore += 11;
			break;
		case 2:
			$cardScore += 2;
			break;
		case 3:	
			$cardScore += 3;
			break;
		case 4:	
			$cardScore += 4;
			break;
		case 5:	
			$cardScore += 5;
			break;
		case 6:	
			$cardScore += 6;
			break;
		case 7:	
			$cardScore += 7;
			break;
		case 8:	
			$cardScore += 8;
			break;
		case 9:	
			$cardScore += 9;
			break;
		case 10:
			$cardScore += 10;
			break;
		case 11: case 12: case 13:
			$cardScore += 10;
			break;
		default:
			$cardScore += 0;
	}

} //end calcCardScore

function printForm() {
	global $cardScore;

	if (isset($_SESSION["counter"])){
		$counter = $_SESSION["counter"];
	}else{
		$counter = 0;
	}
	$counter += $cardScore;
	print "<h3>Your Overall Score: $counter</h3><br/>";

	//store new data
	$_SESSION["counter"] = $counter;

	print<<<QUOTE

		<form action="" method="post">
			<p>
				<button type="submit">Reshuffle?</button>
			</p>
		</form>

QUOTE;

} //end printForm


?>
  
</body>
</html>
