<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N4f883ab7a2c1db442b6865996e0e9f08b46ee1927d7a2c7d45b090008604a1ec;

/**
 * IosPushNotificationConfig
 *
 * Optional. Required if android is not set. Configuration used to enable iOS push notifications.
 */
final class IosPushNotificationConfig extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'apnsCertificateFileContent',
        'apnsCertificateFileName',
    ];

    /**
     * Base64 encoded content of the P12 APNS certificate file used to enable iOS push notifications.
     */
    public string $apnsCertificateFileContent;
    /**
     * Name of the APNS certificate file used to enable iOS push notifications.
     */
    public string $apnsCertificateFileName;
    /**
     * Password used for decryption of the APNS certificate.
     */
    public string $apnsCertificatePassword;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'apnsCertificateFileContent' => is_string($value) ? $this->apnsCertificateFileContent = $value : parent::assignMember($name, $value),
            'apnsCertificateFileName' => is_string($value) ? $this->apnsCertificateFileName = $value : parent::assignMember($name, $value),
            'apnsCertificatePassword' => is_string($value) ? $this->apnsCertificatePassword = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
