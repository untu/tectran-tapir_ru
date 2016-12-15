<?php

$config = [
  "sendTo" => "gk@saymon.info, welcome@saymon.info",
  "subject" => "Tectran-tapir: требуется консультация",
];

function objToStr($obj){
  $str = '';
  foreach($obj as $key => $value) {
    $str .=" $key: $value \r\n";
  }
  
  return $str;
}

$toEmalStr = objToStr($_POST);

// echo $toEmalStr; // Uncomment for debug.

mail($config['sendTo'], $config['subject'], $toEmalStr, "Content-type: text/plain; charset=utf-8");
echo 'ok';

?>