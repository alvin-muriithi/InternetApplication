<?php

require_once "layouts/layouts.php";
$ObjLayouts = new layouts();

require_once "menus/menus.php";
$ObjMenus = new menus();
//Class Auto Load 

function classAutoLoad($classname){
    $directories=["contents","layout","menus"];

    foreach($directories AS $dir){
        $filename = dirname(__FILE__) . DIRECTORY_SEPARATOR . $dir . DIRECTORY_SEPARATOR . $classname . ".php";
        if(file_exists($filename) AND is_readable($filename)){
            require_once $filename;
        }
    }
}

spl_autoload_register('classAutoLoad');

//Creating instances of all classes
    $Objlayouts= new layouts();
    $ObjMenus= new menus();
    $ObjHeadings= new headings();


//Similar method of calling class as class auto load
/*
require_once "layouts\layouts.php";
$Objlayouts= new layouts();
require_once "menus/menus.php";
$ObjMenus= new menus();
require_once "contents\headings.php";
$ObjHeadings= new headings();



/*
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
*/