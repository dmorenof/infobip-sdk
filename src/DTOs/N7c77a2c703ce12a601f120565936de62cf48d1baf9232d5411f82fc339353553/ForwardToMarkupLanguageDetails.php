<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553;

/**
 * ForwardToMarkupLanguageDetails
 */
final class ForwardToMarkupLanguageDetails extends \InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\VoiceActionDetails
{
    public const array REQUIRED_FIELDS = [];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Unique ID of the Markup Language.
     * Format: int64
     */
    public int $markupLanguageConfigId;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'markupLanguageConfigId' => is_int($value) ? $this->markupLanguageConfigId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
