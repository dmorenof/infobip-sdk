<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N34438aa163eb13a2a06ad96ae98170e41cc2ee8902e8b7655aba73ceb0bb23f1;

/**
 * AddDomainRequest
 */
final class AddDomainRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'domainName',
        'targetedDailyTraffic',
    ];

    protected const array VALIDATION = [
        'dkimKeyLength' => [
            'format' => 'int32',
        ],
        'domainName' => [
            'minLength' => 0,
            'maxLength' => 100,
        ],
        'targetedDailyTraffic' => [
            'minimum' => 1,
        ],
    ];

    /**
     * Required for application use in a send request for outbound traffic. Returned in notification events.
     */
    public string $applicationId;
    /**
     * Value for DKIM key length.
     * Example: 1024
     * Format: int32
     */
    public \InfobipSDK\Enums\N34438aa163eb13a2a06ad96ae98170e41cc2ee8902e8b7655aba73ceb0bb23f1\AddDomainRequest\KeyLengthEnum $dkimKeyLength {
        set {
            $this->assigning('dkimKeyLength', $value);
            $this->dkimKeyLength = $value;
        }
    }
    /**
     * Unique name for the domain.
     * Example: "example.com"
     */
    public string $domainName {
        set {
            $this->assigning('domainName', $value);
            $this->domainName = $value;
        }
    }
    /**
     * Required for entity use in a send request for outbound traffic. Returned in notification events.
     */
    public string $entityId;
    /**
     * Targeted daily traffic.
     * Example: 1000
     * Format: int64
     */
    public int $targetedDailyTraffic {
        set {
            $this->assigning('targetedDailyTraffic', $value);
            $this->targetedDailyTraffic = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'applicationId' => is_string($value) ? $this->applicationId = $value : parent::assignMember($name, $value),
            'dkimKeyLength' => is_int($value) ? $this->dkimKeyLength = \InfobipSDK\Enums\N34438aa163eb13a2a06ad96ae98170e41cc2ee8902e8b7655aba73ceb0bb23f1\AddDomainRequest\KeyLengthEnum::from($value) : parent::assignMember($name, $value),
            'domainName' => is_string($value) ? $this->domainName = $value : parent::assignMember($name, $value),
            'entityId' => is_string($value) ? $this->entityId = $value : parent::assignMember($name, $value),
            'targetedDailyTraffic' => is_int($value) ? $this->targetedDailyTraffic = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
