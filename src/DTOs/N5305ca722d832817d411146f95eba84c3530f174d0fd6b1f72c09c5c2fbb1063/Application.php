<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N5305ca722d832817d411146f95eba84c3530f174d0fd6b1f72c09c5c2fbb1063;

/**
 * Application
 *
 * Application data for the recording.
 */
class Application extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'type',
];

    public const string DISCRIMINATOR_BASE = self::class;
    public const string DISCRIMINATOR_PROPERTY = 'type';
    public const array DISCRIMINATOR_MAPPING = [
    '5305ca722d832817d411146f95eba84c3530f174d0fd6b1f72c09c5c2fbb1063.WebrtcApplication' => 'InfobipSDK\\DTOs\\N5305ca722d832817d411146f95eba84c3530f174d0fd6b1f72c09c5c2fbb1063\\WebrtcApplication',
    'WEBRTC' => 'InfobipSDK\\DTOs\\N5305ca722d832817d411146f95eba84c3530f174d0fd6b1f72c09c5c2fbb1063\\WebrtcApplication',
];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\Enums\N7916e19109f991cfe966f390ef0d36117967291fa90eff57d8c8cb768f38352e\ApplicationType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N7916e19109f991cfe966f390ef0d36117967291fa90eff57d8c8cb768f38352e\ApplicationType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
