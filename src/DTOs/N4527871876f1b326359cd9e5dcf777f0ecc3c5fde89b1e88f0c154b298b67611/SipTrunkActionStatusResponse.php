<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611;

/**
 * SipTrunkActionStatusResponse
 *
 * SIP trunk action status.
 */
final class SipTrunkActionStatusResponse extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Description of the `FAILED` or `RESET` action.
     */
    public string $reason;
    public \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\SipTrunkActionStatus $status;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'reason' => is_string($value) ? $this->reason = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\SipTrunkActionStatus::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
