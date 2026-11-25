<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a;

/**
 * ExternalTenDlcCampaign
 */
final class ExternalTenDlcCampaign extends \InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\Campaign
{
    public const array REQUIRED_FIELDS = [
        'name',
    ];

    protected const array VALIDATION = [
        'externalCampaignId' => [
            'minLength' => 0,
            'maxLength' => 100,
        ],
        'name' => [
            'minLength' => 1,
            'maxLength' => 30,
            'pattern' => '[A-Za-z0-9_ ]*',
        ],
        'numberKeys' => [
            'minItems' => 0,
            'maxItems' => 49,
            'uniqueItems' => true,
        ],
        'numberPreviews' => [
            'uniqueItems' => true,
        ],
        'numbers' => [
            'minItems' => 0,
            'maxItems' => 49,
            'uniqueItems' => true,
        ],
        'referenceId' => [
            'minLength' => 0,
            'maxLength' => 50,
        ],
    ];

    protected const array READ_ONLY_FIELDS = [
        'createdDate',
        'id',
        'lastModifiedDate',
        'numberPreviews',
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * The ID of the campaign as defined by The Campaign Registry.
     */
    public string $externalCampaignId {
        set {
            $this->assigning('externalCampaignId', $value);
            $this->externalCampaignId = $value;
        }
    }
    /**
     * The numberKey(s) of the numbers to use with the campaign. Alternatively, you can use the 'numbers' property to specify the numbers directly, but note that 'numberKeys' property takes precedence if both are specified.
     * Documentation: #platform-&-connectivity/numbers
     */
    public \InfobipSDK\Collections\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\ExternalTenDlcCampaign\NumberKeysCollection $numberKeys {
        set {
            $this->assigning('numberKeys', $value);
            $this->numberKeys = $value;
        }
    }
    public \InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\NumberPool $numberPool;
    /**
     * The number(s) to use with the campaign. This property is read-only and ignored in POST/PUT calls.
     */
    public \InfobipSDK\Collections\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\ExternalTenDlcCampaign\NumberPreviewsCollection $numberPreviews {
        set {
            $this->assigning('numberPreviews', $value);
            $this->numberPreviews = $value;
        }
    }
    /**
     * US 10DLC Numbers to be used with the campaign.
     */
    public \InfobipSDK\Collections\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\ExternalTenDlcCampaign\NumbersCollection $numbers {
        set {
            $this->assigning('numbers', $value);
            $this->numbers = $value;
        }
    }
    public \InfobipSDK\Enums\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\PolicyType $policy;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'externalCampaignId' => is_string($value) ? $this->externalCampaignId = $value : parent::assignMember($name, $value),
            'numberKeys' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->numberKeys = new \InfobipSDK\Collections\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\ExternalTenDlcCampaign\NumberKeysCollection($value) : parent::assignMember($name, $value),
            'numberPool' => $value instanceof \stdClass ? $this->numberPool = new \InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\NumberPool($value) : parent::assignMember($name, $value),
            'numberPreviews' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->numberPreviews = new \InfobipSDK\Collections\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\ExternalTenDlcCampaign\NumberPreviewsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\NumberPreview::class)) : parent::assignMember($name, $value),
            'numbers' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->numbers = new \InfobipSDK\Collections\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\ExternalTenDlcCampaign\NumbersCollection($value) : parent::assignMember($name, $value),
            'policy' => is_string($value) ? $this->policy = \InfobipSDK\Enums\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\PolicyType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
