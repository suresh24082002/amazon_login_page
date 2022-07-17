<?php
// Array with names
$a[] = "Anna";
$a[] = "Brittany";
$a[] = "Cinderella";
$a[] = "Diana";
$a[] = "Eva";
$a[] = "Fiona";
$a[] = "Gunda";
$a[] = "Hege";
$a[] = "Inga";
$a[] = "Johanna";
$a[] = "Kitty";
$a[] = "Linda";
$a[] = "Nina";
$a[] = "Ophelia";
$a[] = "Petunia";
$a[] = "Amanda";
$a[] = "Raquel";
$a[] = "Cindy";
$a[] = "Doris";
$a[] = "Eve";
$a[] = "Evita";
$a[] = "Sunniva";
$a[] = "Tove";
$a[] = "Unni";
$a[] = "Violet";
$a[] = "Liza";
$a[] = "Elizabeth";
$a[] = "Ellen";
$a[] = "Wenche";
$a[] = "Vicky";
$a[] = "amma";
$a[] = "appa";
$a[] = "akash";
$a[] = "abirami";
$a[] = "ajay";
$a[] = "ajith";
$a[] = "abitha";
$a[] = "akalya";
$a[] = "abishek";
$a[] = "akilan";
$a[] = "akshay";
$a[] = "anitha";
$a[] = "arun";
$a[] = "arjun";
$a[] = "aravinth";
$a[] = "amal";
$a[] = "banu";
$a[] = "badri";
$a[] = "bala";
$a[] = "barani";
$a[] = "boopalan";
$a[] = "bavana";
$a[] = "charan";
$a[] = "dhanapal";
$a[] = "dhevaraj";
$a[] = "dhanush";
$a[] = "dharun";
$a[] = "dhivakar";
$a[] = "dhivyan";
$a[] = "dharani";
$a[] = "dhilip";
$a[] = "dhivya";
$a[] = "dharshini";
$a[] = "eswar";
$a[] = "gopal";
$a[] = "gokul";
$a[] = "gopi";
$a[] = "ghanesh";
$a[] = "govind";
$a[] = "hari";
$a[] = "harish";
$a[] = "hariharn";
$a[] = "harini";
$a[] = "haritha";
$a[] = "harshitah";
$a[] = "hems";
$a[] = "iswarya";
$a[] = "i love uu";
$a[] = "iyam perumal";
$a[] = "jay krisha";
$a[] = "jayanthi";
$a[] = "jayapal";
$a[] = "jagathish";
$a[] = "john cena";
$a[] = "kavin";
$a[] = "karthi";
$a[] = "kanan";
$a[] = "kanishka";
$a[] = "kaviya";
$a[] = "kani";
$a[] = "kishore";
$a[] = "krishna";
$a[] = "lakshmi";
$a[] = "lokesh";
$a[] = "lenin";
$a[] = "linga";
$a[] = "mano";
$a[] = "maha";
$a[] = "malar";
$a[] = "malathi";
$a[] = "mani";
$a[] = "moni";
$a[] = "mukesh";
$a[] = "murali";
$a[] = "narayana";
$a[] = "nandhini";
$a[] = "naveen";
$a[] = "nithiesh";
$a[] = "nithik";
$a[] = "nithya";
$a[] = "paul";
$a[] = "pradeep";
$a[] = "prasath";
$a[] = "praveena";
$a[] = "praveen";
$a[] = "priya";
$a[] = "ragavan";
$a[] = "ragavi";
$a[] = "rani";
$a[] = "ragul";
$a[] = "ram";
$a[] = "ranjith";
$a[] = "revathi";
$a[] = "ramesh";
$a[] = "ritiesh";
$a[] = "rose";
$a[] = "roshini";
$a[] = "roja";
$a[] = "saro";
$a[] = "sakthi";
$a[] = "sandhip";
$a[] = "sanjay";
$a[] = "santhosh";
$a[] = "saravana";
$a[] = "sasi";
$a[] = "sathya";
$a[] = "selva";
$a[] = "senthil";
$a[] = "sethu";
$a[] = "sankar";
$a[] = "swetha";
$a[] = "shiva";
$a[] = "siddesg";
$a[] = "sriram";
$a[] = "srithick";
$a[] = "suba";
$a[] = "sujain";
$a[] = "sujay";
$a[] = "sowmiya";
$a[] = "sneha";
$a[] = "sanmahti";

$a[] = "suresh";
$a[] = "surya";
$a[] = "susee";
$a[] = "sindhu";
$a[] = "swami";

$a[] = "thiru";
$a[] = "thianesh";

$a[] = "thamanah";
$a[] = "tharun";
$a[] = "thenisha";
$a[] = "thiagu";
$a[] = "thendral";
$a[] = "tamil selvi";
$a[] = "tharninkumar";
$a[] = "uvetha";
$a[] = "venky";
$a[] = "vinisha";

$a[] = "vikashini";
$a[] = "vignesh";
$a[] = "viky";
$a[] = "vikarm";
$a[] = "walter";
$a[] = "yuvan";
$a[] = "yogesh";
$a[] = "yuvaraj";
$a[] = "queen";

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