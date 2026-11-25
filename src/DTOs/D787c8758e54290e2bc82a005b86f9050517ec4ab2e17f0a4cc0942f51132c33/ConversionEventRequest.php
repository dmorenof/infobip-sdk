<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\D787c8758e54290e2bc82a005b86f9050517ec4ab2e17f0a4cc0942f51132c33;

/**
 * ConversionEventRequest
 */
final class ConversionEventRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'conversions',
    ];

    protected const array VALIDATION = [
        'conversions' => [
            'minItems' => 1,
            'maxItems' => 1000,
        ],
    ];

    /**
     * Conversion events collection.
     */
    public \InfobipSDK\Collections\D787c8758e54290e2bc82a005b86f9050517ec4ab2e17f0a4cc0942f51132c33\ConversionEventRequest\ConversionsCollection $conversions {
        set {
            $this->assigning('conversions', $value);
            $this->conversions = $value;
        }
    }
    /**
     * Conversion events source identifier. In case of ads that click to WhatsApp, it should be the Facebook Page selected through Ads manager and through Exchange app. Could be omitted if only one page is connected through Exchange app.
     */
    public string $sourceId;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'conversions' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->conversions = new \InfobipSDK\Collections\D787c8758e54290e2bc82a005b86f9050517ec4ab2e17f0a4cc0942f51132c33\ConversionEventRequest\ConversionsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\D787c8758e54290e2bc82a005b86f9050517ec4ab2e17f0a4cc0942f51132c33\ConversionEventModel::class)) : parent::assignMember($name, $value),
            'sourceId' => is_string($value) ? $this->sourceId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
