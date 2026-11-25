<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea;

/**
 * AuthenticationButtonApiData
 *
 * Authentication template buttons. Has to be either a 'copy code' button or 'one-tap' button.
 */
class AuthenticationButtonApiData extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'otpType',
    ];

    public const string DISCRIMINATOR_BASE = self::class;
    public const string DISCRIMINATOR_PROPERTY = 'otpType';
    public const array DISCRIMINATOR_MAPPING = [
        'COPY_CODE' => 'InfobipSDK\\DTOs\\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\\CopyCodeButtonApiData',
        'ONE_TAP' => 'InfobipSDK\\DTOs\\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\\OneTapButtonApiData',
        'f9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea.CopyCodeButtonApiData' => 'InfobipSDK\\DTOs\\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\\CopyCodeButtonApiData',
        'f9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea.OneTapButtonApiData' => 'InfobipSDK\\DTOs\\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\\OneTapButtonApiData',
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    /**
     * Type of OTP button.
     */
    public \InfobipSDK\Enums\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\AuthenticationButtonApiData\OtpTypeEnum $otpType;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'otpType' => is_string($value) ? $this->otpType = \InfobipSDK\Enums\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea\AuthenticationButtonApiData\OtpTypeEnum::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
