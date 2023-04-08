<?php
    // * variable =   a reusable container that holds data
    // *              basic ones: string, integer, float, boolean

    echo "link: https://www.youtube.com/watch?v=przRGJtl0HY&list=PLZPZq0r_RZOO6bGTY9jbLOyF_x6tgwcuB&index=2";
    // ! To add a line break, use <br> istead of \n
    echo "\n";
    echo "<br><br>";

    // strings
    $name = "Johannes";
    echo $name;
    echo ", my name is {$name}.";

    // int:
    $age = 30;

    // float:
    $amount_in_bank_account = 30.57;

    // dollarsign needs escape character:
    echo "<br>My enormous wealth is: \${$amount_in_bank_account}";

    // boolean:
    $AmIAwesome = true;
    $AmIPortugeese = false;

    // booleans get converted to 1 or nothing:
    echo "<br>Am I awesome? well, {$AmIAwesome}. Am I portugeese? the answer is {$AmIPortugeese}. End of Q&A";

    $cash_on_hand = null;
    echo "<br><br>You want I drink? sure...";
    $ATM_cashout = 10;
    echo "let me just withdraw \${$ATM_cashout}...";
    $drink_price = 7.99;
    echo "pay \${$drink_price}...";
    $cash_on_hand = $ATM_cashout - $drink_price;
    echo "And get the \${$cash_on_hand} change!";
?>