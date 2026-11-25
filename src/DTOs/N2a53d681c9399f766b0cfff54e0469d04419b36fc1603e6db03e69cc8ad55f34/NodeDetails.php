<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N2a53d681c9399f766b0cfff54e0469d04419b36fc1603e6db03e69cc8ad55f34;

/**
 * NodeDetails
 *
 * Context node details.
 */
final class NodeDetails extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'id',
        'text',
    ];

    protected const array VALIDATION = [
        'endCharIdx' => [
            'format' => 'int32',
        ],
        'startCharIdx' => [
            'format' => 'int32',
        ],
    ];

    /**
     * End character index.
     * Format: int32
     */
    public int $endCharIdx {
        set {
            $this->assigning('endCharIdx', $value);
            $this->endCharIdx = $value;
        }
    }
    /**
     * Node ID.
     */
    public string $id;
    /**
     * Metadata information.
     */
    public \InfobipSDK\DTOs\N2a53d681c9399f766b0cfff54e0469d04419b36fc1603e6db03e69cc8ad55f34\NodeDetails\MetadataMap $metadata;
    /**
     * Start character index.
     * Format: int32
     */
    public int $startCharIdx {
        set {
            $this->assigning('startCharIdx', $value);
            $this->startCharIdx = $value;
        }
    }
    /**
     * Text content.
     */
    public string $text;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'endCharIdx' => is_int($value) ? $this->endCharIdx = $value : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'startCharIdx' => is_int($value) ? $this->startCharIdx = $value : parent::assignMember($name, $value),
            'text' => is_string($value) ? $this->text = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
