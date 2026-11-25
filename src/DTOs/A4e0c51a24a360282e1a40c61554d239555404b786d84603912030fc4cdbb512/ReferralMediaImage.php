<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\A4e0c51a24a360282e1a40c61554d239555404b786d84603912030fc4cdbb512;

/**
 * ReferralMediaImage
 */
final class ReferralMediaImage extends \Dmorenof\SdkRuntime\DTO
{
    protected const array WRITE_ONLY_FIELDS = [
    'url',
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\Enums\A4e0c51a24a360282e1a40c61554d239555404b786d84603912030fc4cdbb512\MediaType $type;
    /**
     * URL that leads to the image that end user saw and clicked.
     */
    public string $url;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\A4e0c51a24a360282e1a40c61554d239555404b786d84603912030fc4cdbb512\MediaType::from($value) : parent::assignMember($name, $value),
            'url' => is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
