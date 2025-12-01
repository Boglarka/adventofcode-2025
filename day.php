<?php

$input = "";

$myfile = fopen("day.txt", "r") or die("Unable to open file!");
$input = fread($myfile, filesize("day.txt"));
fclose($myfile);

function day1($input) {
  $lines = explode("\n", trim($input));
  $res = 0;
  for ($i = 0; $i < sizeof($lines); $i++) {
  }

  return $res;
}

function day2($input) {
  $lines = explode("\n", trim($input));
  $res = 0;
  for ($i = 0; $i < sizeof($lines); $i++) {
  }

  return $res;
}

echo day1($input);
//echo day2($input);
