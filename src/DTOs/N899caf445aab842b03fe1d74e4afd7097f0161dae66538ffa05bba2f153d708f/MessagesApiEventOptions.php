<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f;

/**
 * MessagesApiEventOptions
 *
 * Event options.
 */
final class MessagesApiEventOptions extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\DeliveryTimeWindow $deliveryTimeWindow;
    public \InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\Platform $platform;
    public \InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\ValidityPeriod $validityPeriod;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'deliveryTimeWindow' => $value instanceof \stdClass ? $this->deliveryTimeWindow = new \InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\DeliveryTimeWindow($value) : parent::assignMember($name, $value),
            'platform' => $value instanceof \stdClass ? $this->platform = new \InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\Platform($value) : parent::assignMember($name, $value),
            'validityPeriod' => $value instanceof \stdClass ? $this->validityPeriod = new \InfobipSDK\DTOs\N899caf445aab842b03fe1d74e4afd7097f0161dae66538ffa05bba2f153d708f\ValidityPeriod($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
