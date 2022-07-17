<?php
// Array with names
$a[] = "a";
$a[] = "b";
$a[] = "c";
$a[] = "d";
$a[] = "e";
$a[] = "f";
$a[] = "g";
$a[] = "h";
$a[] = "i";
$a[] = "j";
$a[] = "k";

$a[] = "j";
$a[] = "k";

$a[] = "l";
$a[] = "m";
$a[] = "n";
$a[] = "o";
$a[] = "p";
$a[] = "q";
$a[] = "r";
$a[] = "s";
$a[] = "t";
$a[] = "u";
$a[] = "v";
$a[] = "w";
$a[] = "x";

$a[] = "y";
$a[] = "z";
// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from ""
if ($q !== "") {
  $q = strtolower($q);
  $len=strlen($q);
  foreach($a as $name) {
    if (stristr($q, substr($name, 0, $len))) {
      if ($hint === "") {
        $hint = $name;
      } else {
        $hint .= ",<br> $name";
      }
    }
  }
}

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggestion" : $hint;
?>