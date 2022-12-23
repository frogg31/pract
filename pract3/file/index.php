<?php
require_once "disk.php";
require_once "file.php";
require_once "directory.php";

$file_one = new File('ppp');
$directory_one = new Directorya('sfdh');
$disk_one = new Disk('i');

$file_two = new File('adfd');
$directory_two = new Directorya('22');
$disk_two = new Disk('iweri');

$fileThree = new File('ewr');
$fileI = new File('dfkg');
$directoryThree = new Directorya('7887');
$diskThree = new Disk('cmx');

$directory_one->add($file_one);
$disk_one->add($directory_one);
echo $disk_one->render().PHP_EOL;

$directory_two->add($file_two);
$disk_two->add($directory_two);
echo $disk_two->render().PHP_EOL;

$directoryThree->add($fileThree);
$diskThree->add($fileI);
$diskThree->add($directoryThree);
echo $diskThree->render().PHP_EOL;

$arr[] = $disk_one;
$arr[] = $disk_two;
$arr[] = $diskThree;
$diskTemp = new Disk('temp');

foreach ($arr as $value) {
    for ($i = 1; $i < count($arr); $i++) {
        if ($arr[$i - 1]->counter() < $arr[$i]->counter()) {
            $diskTemp = $arr[$i - 1];
            $arr[$i - 1] = $arr[$i];
            $arr[$i] = $diskTemp;
        }
    }
}

foreach($arr as $value){
    echo $value->getName().PHP_EOL;
}