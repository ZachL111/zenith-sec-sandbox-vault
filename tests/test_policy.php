<?php
declare(strict_types=1);
require __DIR__ . "/../src/Policy.php";

use Portfolio\Policy;
use Portfolio\Signal;

$signal_case_1 = new Signal(61, 74, 17, 14, 5);
assert(Policy::score($signal_case_1) === 64);
assert(Policy::classify($signal_case_1) === "review");
$signal_case_2 = new Signal(81, 99, 13, 16, 8);
assert(Policy::score($signal_case_2) === 145);
assert(Policy::classify($signal_case_2) === "review");
$signal_case_3 = new Signal(89, 88, 20, 7, 6);
assert(Policy::score($signal_case_3) === 168);
assert(Policy::classify($signal_case_3) === "review");
