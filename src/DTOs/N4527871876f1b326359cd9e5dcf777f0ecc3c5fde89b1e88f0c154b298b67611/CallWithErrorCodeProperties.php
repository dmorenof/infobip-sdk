<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611;

/**
 * CallWithErrorCodeProperties
 *
 * Properties of the events that provide `CallLog` object.
 */
final class CallWithErrorCodeProperties extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\DTOs\N431fb79b0e816230968e14ba1e1c6fadb75cfde9cb3c381f4217b2777f48153f\CallLog $callLog;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'callLog' => $value instanceof \stdClass ? $this->callLog = new \InfobipSDK\DTOs\N431fb79b0e816230968e14ba1e1c6fadb75cfde9cb3c381f4217b2777f48153f\CallLog($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
