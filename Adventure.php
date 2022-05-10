<?php

declare(strict_types=1);

namespace Adventure;

use Octopus\Octopus;

class Adventure
{
    public static function begin(): void
    {
        $octopus = new Octopus('Paul');
        echo $octopus->predictWinner('Real Madrid', 'Liverpool');
    }
}