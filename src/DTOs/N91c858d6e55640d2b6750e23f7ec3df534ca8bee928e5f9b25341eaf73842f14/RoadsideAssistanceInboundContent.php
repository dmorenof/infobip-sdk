<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14;

/**
 * RoadsideAssistanceInboundContent
 *
 * Event from roadside assistance satellite communication.
 */
class RoadsideAssistanceInboundContent extends \Dmorenof\SdkRuntime\DTO
{
    public const string DISCRIMINATOR_BASE = self::class;
    public const string DISCRIMINATOR_PROPERTY = 'type';
    public const array DISCRIMINATOR_MAPPING = [
    '91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14.RoadsideAssistanceLocationInboundContent' => 'InfobipSDK\\DTOs\\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\\RoadsideAssistanceLocationInboundContent',
    '91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14.RoadsideAssistanceRequestInboundContent' => 'InfobipSDK\\DTOs\\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\\RoadsideAssistanceRequestInboundContent',
    '91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14.RoadsideAssistanceStatusInboundContent' => 'InfobipSDK\\DTOs\\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\\RoadsideAssistanceStatusInboundContent',
    '91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14.RoadsideAssistanceTextInboundContent' => 'InfobipSDK\\DTOs\\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\\RoadsideAssistanceTextInboundContent',
    'LOCATION' => 'InfobipSDK\\DTOs\\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\\RoadsideAssistanceLocationInboundContent',
    'REQUEST' => 'InfobipSDK\\DTOs\\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\\RoadsideAssistanceRequestInboundContent',
    'STATUS' => 'InfobipSDK\\DTOs\\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\\RoadsideAssistanceStatusInboundContent',
    'TEXT' => 'InfobipSDK\\DTOs\\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\\RoadsideAssistanceTextInboundContent',
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\Enums\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\RoadsideAssistanceInboundContentType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\RoadsideAssistanceInboundContentType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
