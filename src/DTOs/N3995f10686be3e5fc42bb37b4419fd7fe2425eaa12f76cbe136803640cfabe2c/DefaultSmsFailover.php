<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c;

/**
 * DefaultSmsFailover
 *
 * Failover SMS message to be sent if the original message could not be delivered.
 */
final class DefaultSmsFailover extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'text',
];

    public \InfobipSDK\DTOs\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\RegionalOptions $regional;
    /**
     * The sender ID. It can be alphanumeric or numeric (e.g., `CompanyName`). Make sure you don't exceed [character limit](https://www.infobip.com/docs/sms/get-started#sender-names).
     */
    public string $sender;
    /**
     * Content of the message being sent.
     */
    public string $text;
    public \InfobipSDK\DTOs\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\ValidityPeriod $validityPeriod;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'regional' => $value instanceof \stdClass ? $this->regional = new \InfobipSDK\DTOs\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\RegionalOptions($value) : parent::assignMember($name, $value),
            'sender' => is_string($value) ? $this->sender = $value : parent::assignMember($name, $value),
            'text' => is_string($value) ? $this->text = $value : parent::assignMember($name, $value),
            'validityPeriod' => $value instanceof \stdClass ? $this->validityPeriod = new \InfobipSDK\DTOs\N3995f10686be3e5fc42bb37b4419fd7fe2425eaa12f76cbe136803640cfabe2c\ValidityPeriod($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
