<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\E89661b226e518f36a162935afcdf1132c95b0e63e9c86c5ef5f31c5a8d865a2;

/**
 * AccountConfigurationRequest
 * Example: {"webhookUrl":"https://www.url.com/assets/receive/url"}
 */
final class AccountConfigurationRequest extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'webhookUrl' => [
            'minLength' => 0,
            'maxLength' => 255,
            'pattern' => '',
        ],
    ];

    /**
     * Webhook url all inbound messages will be forwarded to.
     */
    public string $webhookUrl {
        set {
            $this->assigning('webhookUrl', $value);
            $this->webhookUrl = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'webhookUrl' => is_string($value) ? $this->webhookUrl = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
