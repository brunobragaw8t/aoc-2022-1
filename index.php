<?php

$input = file_get_contents('./input.txt');

$elves = explode("\n\n", $input);

$elves2 = array_map(function($elf) {
  return explode("\n", $elf);
}, $elves);

$elves3 = array_map(function($elf) {
  return array_sum($elf);
}, $elves2);

echo max($elves3);
