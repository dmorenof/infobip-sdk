<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea;

/**
 * LimitedTimeOfferApiData
 *
 * Limited time offer.
 */
final class LimitedTimeOfferApiData extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'text',
    ];

    protected const array VALIDATION = [
        'text' => [
            'minLength' => 1,
            'maxLength' => 16,
        ],
    ];

    /**
     * Indicates whether offer expiration details will appear in the delivered message. If set to true, copy code button must be included in the buttons array, and must appear first in the array.
     */
    public bool $hasExpiration;
    /**
     * Offer details text. Up to 16 characters.
     */
    public string $text {
        set {
            $this->assigning('text', $value);
            $this->text = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'hasExpiration' => is_bool($value) ? $this->hasExpiration = $value : parent::assignMember($name, $value),
            'text' => is_string($value) ? $this->text = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
