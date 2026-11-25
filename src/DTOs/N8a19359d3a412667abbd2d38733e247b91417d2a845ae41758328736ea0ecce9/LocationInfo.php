<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N8a19359d3a412667abbd2d38733e247b91417d2a845ae41758328736ea0ecce9;

/**
 * LocationInfo
 *
 * End user location information.
 */
final class LocationInfo extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'country',
    ];

    /**
     * End user country needed for processing documents. Format [ISO 3166-1 alpha-3](https://en.wikipedia.org/wiki/ISO_3166-1_alpha-3).
     * Example: "HRV"
     */
    public string $country;
    /**
     * End user language. Will be used within the UI when completing scenario steps. Format: [ISO 639-1](http://www.lingoes.net/en/translator/langcode.htm).
     * Example: "en-US"
     */
    public string $language;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'country' => is_string($value) ? $this->country = $value : parent::assignMember($name, $value),
            'language' => is_string($value) ? $this->language = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
