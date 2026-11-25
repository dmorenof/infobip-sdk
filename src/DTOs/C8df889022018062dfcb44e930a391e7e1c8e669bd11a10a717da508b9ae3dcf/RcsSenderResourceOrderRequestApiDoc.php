<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf;

/**
 * RCS_SENDER_LAUNCH
 */
final class RcsSenderResourceOrderRequestApiDoc extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'countryCode',
    'requirements',
    'senderName',
    'trafficOrigin',
    'type',
];

    protected const array VALIDATION = [
    'additionalContactEmails' => [
        'minItems' => 0,
        'maxItems' => 3,
    ],
    'senderName' => [
        'minLength' => 1,
        'maxLength' => 255,
    ],
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Email addresses that would be contacted by Infobip support team for any request related matter.
     */
    public \InfobipSDK\Collections\StringCollection $additionalContactEmails {
        set {
            $this->assigning('additionalContactEmails', $value);
            $this->additionalContactEmails = $value;
        }
    }
    /**
     * Country code in two-letter ISO standard.
     */
    public string $countryCode;
    /**
     * List of carrier names excluded from the sender launch.
     */
    public \InfobipSDK\Collections\StringCollection $excludedCarriers;
    public \InfobipSDK\DTOs\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\RcsSenderFeatureOptInsApiDoc $featureOptIns;
    public \InfobipSDK\DTOs\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\Platform $platform;
    /**
     * List of requirements for the resource.
     */
    public \InfobipSDK\Collections\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\AlphaResourceOrderApiDoc\RequirementsCollection $requirements;
    /**
     * Sender name.
     */
    public string $senderName {
        set {
            $this->assigning('senderName', $value);
            $this->senderName = $value;
        }
    }
    public \InfobipSDK\Enums\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\TrafficOrigin $trafficOrigin;
    /**
     * Type of resource.
     */
    public \InfobipSDK\Enums\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\RcsSenderResourceOrderRequestApiDoc\TypeEnum $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'additionalContactEmails' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->additionalContactEmails = new \InfobipSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'countryCode' => is_string($value) ? $this->countryCode = $value : parent::assignMember($name, $value),
            'excludedCarriers' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->excludedCarriers = new \InfobipSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'featureOptIns' => $value instanceof \stdClass ? $this->featureOptIns = new \InfobipSDK\DTOs\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\RcsSenderFeatureOptInsApiDoc($value) : parent::assignMember($name, $value),
            'platform' => $value instanceof \stdClass ? $this->platform = new \InfobipSDK\DTOs\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\Platform($value) : parent::assignMember($name, $value),
            'requirements' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->requirements = new \InfobipSDK\Collections\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\AlphaResourceOrderApiDoc\RequirementsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\FilledRequirement::class)) : parent::assignMember($name, $value),
            'senderName' => is_string($value) ? $this->senderName = $value : parent::assignMember($name, $value),
            'trafficOrigin' => is_string($value) ? $this->trafficOrigin = \InfobipSDK\Enums\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\TrafficOrigin::from($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\C8df889022018062dfcb44e930a391e7e1c8e669bd11a10a717da508b9ae3dcf\RcsSenderResourceOrderRequestApiDoc\TypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
