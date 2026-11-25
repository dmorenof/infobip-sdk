<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N34438aa163eb13a2a06ad96ae98170e41cc2ee8902e8b7655aba73ceb0bb23f1;

/**
 * DomainResponse
 *
 * Detailed domain information.
 */
final class DomainResponse extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Activation status of the domain.
     * Example: false
     */
    public bool $active;
    /**
     * Status if the domain is blocked.
     * Example: false
     */
    public bool $blocked;
    public \InfobipSDK\Enums\N34438aa163eb13a2a06ad96ae98170e41cc2ee8902e8b7655aba73ceb0bb23f1\BlocklistConfigurationLevel $blocklistConfigurationLevel;
    /**
     * Branded tracking domain name assigned to the domain.
     * Example: "branded.example.com"
     */
    public string $brandedDomainName;
    /**
     * Date the domain was created. Has the following format: `yyyy-MM-dd'T'HH:mm:ss.SSSZ`.
     * Example: "2021-01-02T01:00:00.123Z"
     * Format: date-time
     */
    public string $createdAt;
    /**
     * DNS records for the domain.
     */
    public \InfobipSDK\Collections\N34438aa163eb13a2a06ad96ae98170e41cc2ee8902e8b7655aba73ceb0bb23f1\DomainResponse\DnsRecordsCollection $dnsRecords;
    /**
     * Id of the domain.
     * Example: 1
     * Format: int64
     */
    public int $domainId;
    /**
     * Name of the domain.
     * Example: "example.com"
     */
    public string $domainName;
    public \InfobipSDK\DTOs\N34438aa163eb13a2a06ad96ae98170e41cc2ee8902e8b7655aba73ceb0bb23f1\TrackingResponse $tracking;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'active' => is_bool($value) ? $this->active = $value : parent::assignMember($name, $value),
            'blocked' => is_bool($value) ? $this->blocked = $value : parent::assignMember($name, $value),
            'blocklistConfigurationLevel' => is_string($value) ? $this->blocklistConfigurationLevel = \InfobipSDK\Enums\N34438aa163eb13a2a06ad96ae98170e41cc2ee8902e8b7655aba73ceb0bb23f1\BlocklistConfigurationLevel::from($value) : parent::assignMember($name, $value),
            'brandedDomainName' => is_string($value) ? $this->brandedDomainName = $value : parent::assignMember($name, $value),
            'createdAt' => is_string($value) ? $this->createdAt = $value : parent::assignMember($name, $value),
            'dnsRecords' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->dnsRecords = new \InfobipSDK\Collections\N34438aa163eb13a2a06ad96ae98170e41cc2ee8902e8b7655aba73ceb0bb23f1\DomainResponse\DnsRecordsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N34438aa163eb13a2a06ad96ae98170e41cc2ee8902e8b7655aba73ceb0bb23f1\DnsRecordResponse::class)) : parent::assignMember($name, $value),
            'domainId' => is_int($value) ? $this->domainId = $value : parent::assignMember($name, $value),
            'domainName' => is_string($value) ? $this->domainName = $value : parent::assignMember($name, $value),
            'tracking' => $value instanceof \stdClass ? $this->tracking = new \InfobipSDK\DTOs\N34438aa163eb13a2a06ad96ae98170e41cc2ee8902e8b7655aba73ceb0bb23f1\TrackingResponse($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
