<?php
$md5 = parse_url($_SERVER['REQUEST_URI']);

$CODE = parse_str($md5["query"], $output);

echo "YOUR MD5 CODE IS   ".md5($output["md5"]);

// echo "<br>";  
// echo "Hex formed by md5 function is ".md5($string);  
?>  