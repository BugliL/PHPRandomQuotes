<?php
$quotesArr = file("quotes.txt", FILE_IGNORE_NEW_LINES);
print_r($quotesArr);

$i = rand(0, sizeof($quotesArr)-1);
$selected = $quotesArr[$i];

echo $i;
echo ": ";
echo $selected;
echo "\n";
?>
