<?php

namespace App\Scoring;

use App\Entity\BigFootSighting;

interface ScoringFactorInterface
{
    /**
     * Return the score that should be added to the overall score
     *
     * This method should not throw an exception for any normal reason
     */
    //will have a function that takes a Bigfoot sighting and returns an integer (score)
    public function score(BigFootSighting $sighting): int;

    //allows scoring factor classes to have a method that lets them see the score and adjust the score based on what score they get
    public function adjustScore(int $finalScore, BigFootSighting $sighting): int;
}