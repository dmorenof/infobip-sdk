<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N284df221d4ea79ba964b452422482b56ed35030dc947e42a2c1842f66361972c;

/**
 * ScoredInteractionMemoryApiResponse
 *
 * An interaction memory with its relevance score.
 */
final class ScoredInteractionMemoryApiResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'memory',
];

    public \InfobipSDK\DTOs\N284df221d4ea79ba964b452422482b56ed35030dc947e42a2c1842f66361972c\InteractionMemoryApiResponse $memory;
    /**
     * Relevance score combining match quality and recency. Higher is more relevant. Only comparable between results of the same response.
     * Example: 0.83
     * Format: double
     */
    public ?float $score;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'memory' => $value instanceof \stdClass ? $this->memory = new \InfobipSDK\DTOs\N284df221d4ea79ba964b452422482b56ed35030dc947e42a2c1842f66361972c\InteractionMemoryApiResponse($value) : parent::assignMember($name, $value),
            'score' => $value === null || is_float($value) ? $this->score = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
