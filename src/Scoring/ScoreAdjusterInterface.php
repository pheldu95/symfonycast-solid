<?php

namespace App\Scoring;

use App\Entity\BigFootSighting;

interface ScoreAdjusterInterface
{
    //allows scoring factor classes to have a method that lets them see the score and adjust the score based on what score they get
    public function adjustScore(int $finalScore, BigFootSighting $sighting): int;
}