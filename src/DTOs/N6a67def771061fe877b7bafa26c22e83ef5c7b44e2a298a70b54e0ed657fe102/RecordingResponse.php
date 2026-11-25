<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N6a67def771061fe877b7bafa26c22e83ef5c7b44e2a298a70b54e0ed657fe102;

/**
 * RecordingResponse
 */
final class RecordingResponse extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\DTOs\N5305ca722d832817d411146f95eba84c3530f174d0fd6b1f72c09c5c2fbb1063\Application $application;
    public \InfobipSDK\DTOs\N6a67def771061fe877b7bafa26c22e83ef5c7b44e2a298a70b54e0ed657fe102\Recording $recording;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'recording' => $value instanceof \stdClass ? $this->recording = new \InfobipSDK\DTOs\N6a67def771061fe877b7bafa26c22e83ef5c7b44e2a298a70b54e0ed657fe102\Recording($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
