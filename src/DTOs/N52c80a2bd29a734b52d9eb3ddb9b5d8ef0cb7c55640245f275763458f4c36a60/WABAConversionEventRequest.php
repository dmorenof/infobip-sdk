<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N52c80a2bd29a734b52d9eb3ddb9b5d8ef0cb7c55640245f275763458f4c36a60;

/**
 * WABAConversionEventRequest
 */
final class WABAConversionEventRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'conversions',
    'sourceId',
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
    public \InfobipSDK\Collections\N52c80a2bd29a734b52d9eb3ddb9b5d8ef0cb7c55640245f275763458f4c36a60\WABAConversionEventRequest\ConversionsCollection $conversions {
        set {
            $this->assigning('conversions', $value);
            $this->conversions = $value;
        }
    }
    /**
     * Sender as source identifier. This is the phone number registered via the embedded signup flow available in Exchange app.
     * Example: "1234567890"
     */
    public string $sourceId;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'conversions' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->conversions = new \InfobipSDK\Collections\N52c80a2bd29a734b52d9eb3ddb9b5d8ef0cb7c55640245f275763458f4c36a60\WABAConversionEventRequest\ConversionsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N52c80a2bd29a734b52d9eb3ddb9b5d8ef0cb7c55640245f275763458f4c36a60\MetaConversionModel::class)) : parent::assignMember($name, $value),
            'sourceId' => is_string($value) ? $this->sourceId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
