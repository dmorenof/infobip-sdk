<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553;

/**
 * BlockAction
 *
 * Used for blocking MT messages.
 */
final class BlockAction extends \InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\MoNonForwardAction
{
    public const array REQUIRED_FIELDS = [
    'type',
];

    protected const array READ_ONLY_FIELDS = [
    'editable',
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\Enums\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\BlockActionType $blockType;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'blockType' => is_string($value) ? $this->blockType = \InfobipSDK\Enums\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\BlockActionType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
