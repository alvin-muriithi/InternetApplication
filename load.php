<?php

require_once
'fnc.php';

$Obj = new fnc();

$arr=["black, white, red, blue, green"];

foreach($arr AS $color){
    echo $color . "<br>";
}

print "<br>";

print "<br>";

print dirname(__FILE__);

print "<br>";

print "<br>";
print "<br>";

print $_SERVER["PHP_SELF"];

print"<br>";

print"<br>";

if (file_exists("fnc.php")) {
    echo "yes";
} else {
    echo "no";
}


print"<br>";

print basename($_SERVER["PHP_SELF"]);