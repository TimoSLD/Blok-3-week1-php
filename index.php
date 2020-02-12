<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 2</title>
</head>
<body>
<?php
//hello world in h1 tag.
echo '<h1>Hello World!</h1>';
//const met hello world.
define('test', 'Hello World!');
echo test;
echo '<br>';
//var die ook veranderd
$test = 'Learning PHP';
$$test = 'Hello World!';
echo $test;
echo '<br>';
echo $$test;
echo '<br>';
//2 vars die 1 zin maken.
$test1 = '<h1>Hello<h1>';
$test2 = '<h1>World!<h1>';
echo $test1;
echo $test2;
//array die hello world maakt.

$array = ['Hello', 'World!'];

echo $array[0] . $array[1];



?>
</body>
</html>
