<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611;

/**
 * DialogWithErrorCodeProperties
 *
 * Properties of the events that provide `Dialog` object together with `ErrorCode`.
 */
final class DialogWithErrorCodeProperties extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\Dialog $dialog;
    public \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\ErrorCodeInfo $errorCode;
    public \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\DialogHangupSource $hangupSource;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'dialog' => $value instanceof \stdClass ? $this->dialog = new \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\Dialog($value) : parent::assignMember($name, $value),
            'errorCode' => $value instanceof \stdClass ? $this->errorCode = new \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\ErrorCodeInfo($value) : parent::assignMember($name, $value),
            'hangupSource' => is_string($value) ? $this->hangupSource = \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\DialogHangupSource::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
