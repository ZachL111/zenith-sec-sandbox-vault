<?php
declare(strict_types=1);
require __DIR__ . "/../src/DomainReview.php";

use Portfolio\DomainReview;
use Portfolio\DomainReviewLens;

$item = new DomainReview(65, 38, 29, 64);
assert(DomainReviewLens::score($item) === 145);
assert(DomainReviewLens::lane($item) === "ship");
