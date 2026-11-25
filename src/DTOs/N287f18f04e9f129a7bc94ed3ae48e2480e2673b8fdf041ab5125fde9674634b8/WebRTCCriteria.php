<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8;

/**
 * WebRTCCriteria
 */
final class WebRTCCriteria extends \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\Criteria
{
    public const array REQUIRED_FIELDS = [
    'type',
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * WebRTC custom data. To meet the criteria, all of the provided custom data pairs must match.
     */
    public \InfobipSDK\Collections\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\WebRTCCriteria\CustomDataCollection $customData;
    /**
     * WebRTC identity or regular expression pattern representing identity. Examples: `WebRTC_user`, `WebRTC_(.+)`.
     */
    public string $identity;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'customData' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->customData = new \InfobipSDK\Collections\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\WebRTCCriteria\CustomDataCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\CustomDataEntry::class)) : parent::assignMember($name, $value),
            'identity' => is_string($value) ? $this->identity = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
