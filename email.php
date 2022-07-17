<?php
// Array with names
$a[] = "abc@gmail.com";
$a[] = "babc@gmail.com";
$a[] = "cbc@gmail.com";
$a[] = "dabc@gmail.com";
$a[] = "ebc@gmail.com";
$a[] = "fbc@gmail.com";
$a[] = "gabc@gmail.com";
$a[] = "hbc@gmail.com";
$a[] = "ibc@gmail.com";
$a[] = "jabc@gmail.com";
$a[] = "kbc@gmail.com";
$a[] = "lbc@gmail.com";

$a[] = "mbc@gmail.com";
$a[] = "nbc@gmail.com";

$a[] = "obc@gmail.com";
$a[] = "pbc@gmail.com";
$a[] = "rbc@gmail.com";
$a[] = "sbc@gmail.com";
$a[] = "tbc@gmail.com";
$a[] = "ubc@gmail.com";
$a[] = "vbc@gmail.com";
$a[] = "wbc@gmail.com";
$a[] = "xbc@gmail.com";
$a[] = "ybc@gmail.com";
$a[] = "zbc@gmail.com";

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