<?php

$a1 = readline();
$a2 = readline();
$a3 = readline();


if ($a1 == "vertebrado") {
  if ($a2 == "ave") {
    if ($a3 == "carnivoro") {
      echo "aguia\n";
    } else {
      echo "pomba\n";
    }
  } else {
    if ($a3 == "onivoro") {
      echo "homem\n";
    } else {
      echo "vaca\n";
    }
  }
} else {
  if ($a2 == "inseto") {
    if ($a3 == "hematofago") {
      echo "pulga\n";
    } else {
      echo "lagarta\n";
    }
  } else {
    if ($a3 == "hematofago") {
      echo "sanguessuga\n";
    } else {
      echo "minhoca\n";
    }
  }
}
?>