<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N94dad8b938c4159f751dc1ff0b70e7beab7409955ce0b31399dbe9488973d3a6;

/**
 * DtmfSendRequest
 */
final class DtmfSendRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'dtmf',
];

    /**
     * Optional parameter to update a call's custom data.
     */
    public \InfobipSDK\DTOs\N94dad8b938c4159f751dc1ff0b70e7beab7409955ce0b31399dbe9488973d3a6\DtmfSendRequest\CustomDataMap $customData;
    /**
     * DTMF digits to send.
     */
    public string $dtmf;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'dtmf' => is_string($value) ? $this->dtmf = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
