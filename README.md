# PHP-Cards

A program that displays five poker cards, using one suit of 13. 

The program begins by displaying five cards. These cards are randomly chosen using the rand(1,13) function. The images for each card are saved as card1.jpg, card2.jpg, etc., allowing for the result of rand(1,13) to be plugged into ${'card'.$x}.

A loop is used to display the five cards.

Also totals the points for the five cards. Numbered cards are worth 2-10 points. Faced cards are worth 10 each. Ace is worth 11 points.

If the user gets 50 points, displays "Amazing!" below score.

It keeps a running total of the user's score until they close the program.

Included files:

1. poker.html - Uses the ajax.js file to call the file poker.php.

2. ajax.js - JavaScript code attached to poker.html which calls poker.php

3. poker.php - Initially (as stated above) will display the five cards and the total points. Also includes a button to allow the user to play again. Keeps a running total of the score using a hidden variable (html).