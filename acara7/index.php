<?php
include_once("./lib.php");
$stefan = new Person();
$jimmy = new Person;

$stefan->set_name("Stefan Mischook");
$jimmy->set_name("Nick Waddles");
echo "Stefan's full name: " . $stefan->get_name();
echo "Nick's full name: " . $jimmy->get_name();
