<?php
require_once 'Buyer.php';

$user_one = new Buyer('ooo', 'u', 'r', 'ppp', 99, 6);
$user_two = new Buyer('ijf', 'r', 'd', 'pppkdjfg', 599, 7884645615);
$user_three = new Buyer('hu', 'a', 'g', 'dfgjppp', 799, 1);

$arr[] = $user_one;
$arr[] = $user_two;
$arr[] = $user_three;

foreach ($arr as $key => $value) {
    $arr[$key]->getAllInformation($key);
}

foreach ($arr as $value) {
    for ($i = 1; $i < count($arr); $i++) {
        if ($arr[$i - 1]->getSurname()[0] > $arr[$i]->getSurname()[0]) {
            $temUser = $arr[$i - 1];
            $arr[$i - 1] = $arr[$i];
            $arr[$i] = $temUser;
        }
    }
}

echo ("").PHP_EOL;

foreach ($arr as $key => $value) {
    $arr[$key]->getAllInformation($key);
}
