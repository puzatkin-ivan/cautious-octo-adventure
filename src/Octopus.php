<?php

declare(strict_types=1);

namespace Octopus;

final class Octopus
{
    /**
     * @var string
     */
    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $firstParticipant
     * @param string $secondParticipant
     * @return string
     */
    public function predictWinner(string $firstParticipant, string $secondParticipant): string
    {
        return (rand(2, 99) % 2 === 0) ? $firstParticipant : $secondParticipant;
    }
}