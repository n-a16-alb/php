<?php
/*function getChange($num) {
    $coin = 0;
    if($num>=10)
        $coin=10;
    else if ($num>=5)
        $coin=5;
    else if ($num>=2)
        $coin=2;
    else if ($num>=1)
        $coin=1;

    if ($coin>0) {
        echo $coin."<br>";
        getChange($num-$coin);
    }
}
echo getChange(34);*/

/*function f($n) {
    if ($n>2)
        return f($n-1)+g($n-2);
    else
        return 1;
}
function g($n) {
    if ($n>2)
        return g($n-1)+f($n-2);
    else
        return 1;
}
echo f(7);*/

class Person {
    public $name;
    public $lastname;
    public $age;
}

$alex = new Person();
$alex->name = "Alex";
$alex->lastname = "Black";
$alex->age = "17";

$ivan = new Person();
$ivan->name = "Ivan";
$ivan->lastname = "Smith";
$ivan->age = "23";

echo $alex->name."<br>";
echo $alex->lastname."<br>";
echo $alex->age."<br>";
echo $ivan->name."<br>";
echo $ivan->lastname."<br>";
echo $ivan->age."<br>";
var_dump($alex);
echo "<hr>";
var_dump($ivan);