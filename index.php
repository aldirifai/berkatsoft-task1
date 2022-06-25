
<?php
function containsLetters($firstWord, $secondWord)
{
    $result = array();
    $inc = 0;
    foreach (str_split($firstWord) as $firstSplit) {
        $result[$inc] = false;
        foreach (str_split($secondWord) as $secondSplit) {
            if (strtolower($firstSplit) == strtolower($secondSplit)) {
                $result[$inc] = true;
            }
        }
        $inc++;
    }

    foreach ($result as $final) {
        if ($final == false) {
            return false;
        }
    }

    return true;
}

$text1 = containsLetters('brs', 'berkatsoft'); // true
$text2 = containsLetters('brs', 'berkatco'); // false
$text3 = containsLetters('brs', 'BERKATsoft'); // true

var_dump($text1);
var_dump($text2);
var_dump($text3);
?>
