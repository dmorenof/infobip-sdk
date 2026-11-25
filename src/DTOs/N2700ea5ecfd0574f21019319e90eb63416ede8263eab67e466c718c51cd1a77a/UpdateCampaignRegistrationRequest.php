<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a;

/**
 * UpdateCampaignRegistrationRequest
 */
final class UpdateCampaignRegistrationRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'numberKeys' => [
        'minItems' => 0,
        'maxItems' => 5000,
        'uniqueItems' => true,
    ],
    'numbers' => [
        'minItems' => 0,
        'maxItems' => 5000,
        'uniqueItems' => true,
    ],
];

    protected const array WRITE_ONLY_FIELDS = [
    'numbers',
];

    /**
     * The numberKey(s) of the numbers to use with the campaign. Alternatively, you can use the 'numbers' property to specify the numbers directly, but note that 'numberKeys' property takes precedence if both are specified.  Total limit for Number pooling campaigns is 35000 instead of 49. You can add or remove up to 5000 numbers at a time for Number pooling campaigns.
     * Documentation: #platform-&-connectivity/numbers
     */
    public \InfobipSDK\Collections\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\ExternalTenDlcCampaign\NumberKeysCollection $numberKeys {
        set {
            $this->assigning('numberKeys', $value);
            $this->numberKeys = $value;
        }
    }
    /**
     * US 10DLC numbers to use with the campaign. You may only use numbers that are associated with your account inside the Infobip platform. Numbers must be provided in international format including the country prefix, e.g. 14232180111. This property can be used instead of 'numberKeys' to specify the campaign numbers; it is not returned in the API response.  Total limit for Number pooling campaigns is 35000 instead of 49. You can add or remove up to 5000 numbers at a time for Number pooling campaigns.
     * Documentation: #platform-&-connectivity/numbers
     */
    public \InfobipSDK\Collections\N0089ea7cf06f0b77e4c88a7276c6f25dd5c0c5bbab819756fc42c548980cae19\FlowDataResponse\InitialScreensCollection $numbers {
        set {
            $this->assigning('numbers', $value);
            $this->numbers = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'numberKeys' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->numberKeys = new \InfobipSDK\Collections\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\ExternalTenDlcCampaign\NumberKeysCollection($value) : parent::assignMember($name, $value),
            'numbers' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->numbers = new \InfobipSDK\Collections\N0089ea7cf06f0b77e4c88a7276c6f25dd5c0c5bbab819756fc42c548980cae19\FlowDataResponse\InitialScreensCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
