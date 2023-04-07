<?php

namespace App\Scoring;

use App\Entity\BigFootSighting;

interface ScoringFactorInterface
{
    //will have a function that takes a Bigfoot sighting and returns an integer (score)
    public function score(BigFootSighting $sighting): int;
}