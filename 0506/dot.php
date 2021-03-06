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

// var_dump($a[]);
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
        $hint .= ", $name";
      }
    }
  }
}

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggestion" : $hint;
?>

<!DOCTYPE html>
<html>
  <body>
    <h2>The XMLHttpRequest Object</h2>
    <h3>Start typing a name in the input field below:</h3>

    <p>Suggestions: <span id="txtHint"></span></p>
    <p>
      First name:
      <input type="text" id="txt1" onkeyup="showHint(this.value)" />
    </p>

    <script>
      function showHint(str) {
        if (str.length == 0) {
          document.getElementById('txtHint').innerHTML = '';
          return;
        }
        const xhttp = new XMLHttpRequest();
        xhttp.onload = function () {
          document.getElementById('txtHint').innerHTML =
            this.responseText;
        };
        xhttp.open('GET', 'dot.php?q=' + str);
        xhttp.send();
      }
    </script>
  </body>
</html>