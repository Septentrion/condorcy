<?php

namespace App\Condorcy\Vote;

interface VoteInterface
{
    /**
     *
     */
    public function decide(array $votes): array;
}
