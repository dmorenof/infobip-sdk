<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N74ef2de883b1c563e3452617e157979c03da4c002bc4346d51554a1679b9616f;

/**
 * SipTrunkAuthenticatedResetPasswordResponse
 */
final class SipTrunkAuthenticatedResetPasswordResponse extends \InfobipSDK\DTOs\N74ef2de883b1c563e3452617e157979c03da4c002bc4346d51554a1679b9616f\SipTrunkResetPasswordResponse
{
    public const array REQUIRED_FIELDS = [];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\SipTrunkAuthenticationWithCredentials $authentication;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'authentication' => $value instanceof \stdClass ? $this->authentication = new \InfobipSDK\DTOs\N4527871876f1b326359cd9e5dcf777f0ecc3c5fde89b1e88f0c154b298b67611\SipTrunkAuthenticationWithCredentials($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
