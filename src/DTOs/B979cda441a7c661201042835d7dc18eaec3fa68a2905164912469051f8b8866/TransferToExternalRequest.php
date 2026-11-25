<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866;

/**
 * TransferToExternalRequest
 * Example: {"externalNumber":"41792036727","from":"41793026834"}
 */
final class TransferToExternalRequest extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Valid phone number in the E.164 format to which a call should be transferred.
     * Example: "41792036727"
     */
    public string $externalNumber;
    /**
     * Caller identifier. Must be a phone number in the E.164 format
     * Example: "41793026834"
     */
    public string $from;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'externalNumber' => is_string($value) ? $this->externalNumber = $value : parent::assignMember($name, $value),
            'from' => is_string($value) ? $this->from = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
