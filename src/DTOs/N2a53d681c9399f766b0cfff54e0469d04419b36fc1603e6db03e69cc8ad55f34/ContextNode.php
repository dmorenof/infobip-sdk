<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N2a53d681c9399f766b0cfff54e0469d04419b36fc1603e6db03e69cc8ad55f34;

/**
 * ContextNode
 *
 * List of retrieved context nodes.
 */
final class ContextNode extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'node',
        'score',
    ];

    public \InfobipSDK\DTOs\N2a53d681c9399f766b0cfff54e0469d04419b36fc1603e6db03e69cc8ad55f34\NodeDetails $node;
    /**
     * Relevance score for the node.
     * Format: double
     */
    public float $score;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'node' => $value instanceof \stdClass ? $this->node = new \InfobipSDK\DTOs\N2a53d681c9399f766b0cfff54e0469d04419b36fc1603e6db03e69cc8ad55f34\NodeDetails($value) : parent::assignMember($name, $value),
            'score' => is_float($value) ? $this->score = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
