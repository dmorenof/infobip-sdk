<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N74d8b21d2b740d37eba3fa2f7296b180343b1bcffffec58c82756c7c83775e15;

/**
 * PublicHangupRequest
 *
 * Hangup request.
 */
final class PublicHangupRequest extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\PublicErrorCode $errorCode;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'errorCode' => is_string($value) ? $this->errorCode = \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\PublicErrorCode::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
