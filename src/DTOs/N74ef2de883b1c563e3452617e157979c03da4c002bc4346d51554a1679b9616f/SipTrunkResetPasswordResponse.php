<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N74ef2de883b1c563e3452617e157979c03da4c002bc4346d51554a1679b9616f;

/**
 * SipTrunkResetPasswordResponse
 */
class SipTrunkResetPasswordResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const string DISCRIMINATOR_BASE = self::class;
    public const string DISCRIMINATOR_PROPERTY = 'type';
    public const array DISCRIMINATOR_MAPPING = [
        '74ef2de883b1c563e3452617e157979c03da4c002bc4346d51554a1679b9616f.SipTrunkAuthenticatedResetPasswordResponse' => 'InfobipSDK\\DTOs\\N74ef2de883b1c563e3452617e157979c03da4c002bc4346d51554a1679b9616f\\SipTrunkAuthenticatedResetPasswordResponse',
        '74ef2de883b1c563e3452617e157979c03da4c002bc4346d51554a1679b9616f.SipTrunkRegisteredResetPasswordResponse' => 'InfobipSDK\\DTOs\\N74ef2de883b1c563e3452617e157979c03da4c002bc4346d51554a1679b9616f\\SipTrunkRegisteredResetPasswordResponse',
        'AUTHENTICATED' => 'InfobipSDK\\DTOs\\N74ef2de883b1c563e3452617e157979c03da4c002bc4346d51554a1679b9616f\\SipTrunkAuthenticatedResetPasswordResponse',
        'REGISTERED' => 'InfobipSDK\\DTOs\\N74ef2de883b1c563e3452617e157979c03da4c002bc4346d51554a1679b9616f\\SipTrunkRegisteredResetPasswordResponse',
    ];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\PegasusSipTrunkType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\PegasusSipTrunkType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
