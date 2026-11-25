<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611;

/**
 * ConferenceWithErrorCodeProperties
 *
 * Properties of the events that provide `Conference` object together with `ErrorCode`.
 */
final class ConferenceWithErrorCodeProperties extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\DTOs\C18e27d419b307552daa9403b0085ee796da1a5e57e2a4e6fb73f406471574fc\Conference $conference;
    public \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\ErrorCodeInfo $errorCode;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'conference' => $value instanceof \stdClass ? $this->conference = new \InfobipSDK\DTOs\C18e27d419b307552daa9403b0085ee796da1a5e57e2a4e6fb73f406471574fc\Conference($value) : parent::assignMember($name, $value),
            'errorCode' => $value instanceof \stdClass ? $this->errorCode = new \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\ErrorCodeInfo($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
