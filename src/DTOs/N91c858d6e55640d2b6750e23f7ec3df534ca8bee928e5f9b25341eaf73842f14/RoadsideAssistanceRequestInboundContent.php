<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14;

/**
 * RoadsideAssistanceRequestInboundContent
 */
final class RoadsideAssistanceRequestInboundContent extends \InfobipSDK\DTOs\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\RoadsideAssistanceInboundContent
{
    public const array REQUIRED_FIELDS = [];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\DTOs\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\Location $location;
    /**
     * Contains details filled in request questionnaire.
     */
    public \InfobipSDK\DTOs\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\RoadsideAssistanceRequestInboundContent\Map $request;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'location' => $value instanceof \stdClass ? $this->location = new \InfobipSDK\DTOs\N91c858d6e55640d2b6750e23f7ec3df534ca8bee928e5f9b25341eaf73842f14\Location($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
