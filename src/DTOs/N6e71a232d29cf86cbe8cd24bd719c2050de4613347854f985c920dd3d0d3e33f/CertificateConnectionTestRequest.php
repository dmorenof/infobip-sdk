<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N6e71a232d29cf86cbe8cd24bd719c2050de4613347854f985c920dd3d0d3e33f;

/**
 * CertificateConnectionTestRequest
 */
final class CertificateConnectionTestRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'certificateId',
        'webhookUrl',
    ];

    protected const array VALIDATION = [
        'certificateId' => [
            'minLength' => 1,
            'maxLength' => 255,
            'pattern' => '^[a-zA-Z0-9._-]+$',
        ],
        'webhookUrl' => [
            'minLength' => 1,
        ],
    ];

    /**
     * Existing certificate identifier.
     */
    public string $certificateId {
        set {
            $this->assigning('certificateId', $value);
            $this->certificateId = $value;
        }
    }
    /**
     * A webhook URL over which a connectivity test will be performed.
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
            'certificateId' => is_string($value) ? $this->certificateId = $value : parent::assignMember($name, $value),
            'webhookUrl' => is_string($value) ? $this->webhookUrl = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
