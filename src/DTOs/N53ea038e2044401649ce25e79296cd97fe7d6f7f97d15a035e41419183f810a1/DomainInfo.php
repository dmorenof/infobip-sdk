<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N53ea038e2044401649ce25e79296cd97fe7d6f7f97d15a035e41419183f810a1;

/**
 * DomainInfo
 *
 * Domain get response.
 */
final class DomainInfo extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'createBounces',
        'createComplaints',
        'dataAccess',
        'deleteBounces',
        'deleteComplaints',
        'deleteOverquotas',
        'domainName',
        'readBounces',
        'readComplaints',
        'readOverquotas',
    ];

    /**
     * Create bounces permission.
     */
    public bool $createBounces;
    /**
     * Create complaints permission.
     */
    public bool $createComplaints;
    public \InfobipSDK\Enums\N53ea038e2044401649ce25e79296cd97fe7d6f7f97d15a035e41419183f810a1\ApiDomainAccess $dataAccess;
    /**
     * Delete bounces permission.
     */
    public bool $deleteBounces;
    /**
     * Delete complaints permission.
     */
    public bool $deleteComplaints;
    /**
     * Delete overquotas permission.
     */
    public bool $deleteOverquotas;
    /**
     * Name of the requested domain.
     */
    public string $domainName;
    /**
     * Read bounces permission.
     */
    public bool $readBounces;
    /**
     * Read complaints permission.
     */
    public bool $readComplaints;
    /**
     * Read overquotas permission.
     */
    public bool $readOverquotas;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'createBounces' => is_bool($value) ? $this->createBounces = $value : parent::assignMember($name, $value),
            'createComplaints' => is_bool($value) ? $this->createComplaints = $value : parent::assignMember($name, $value),
            'dataAccess' => is_string($value) ? $this->dataAccess = \InfobipSDK\Enums\N53ea038e2044401649ce25e79296cd97fe7d6f7f97d15a035e41419183f810a1\ApiDomainAccess::from($value) : parent::assignMember($name, $value),
            'deleteBounces' => is_bool($value) ? $this->deleteBounces = $value : parent::assignMember($name, $value),
            'deleteComplaints' => is_bool($value) ? $this->deleteComplaints = $value : parent::assignMember($name, $value),
            'deleteOverquotas' => is_bool($value) ? $this->deleteOverquotas = $value : parent::assignMember($name, $value),
            'domainName' => is_string($value) ? $this->domainName = $value : parent::assignMember($name, $value),
            'readBounces' => is_bool($value) ? $this->readBounces = $value : parent::assignMember($name, $value),
            'readComplaints' => is_bool($value) ? $this->readComplaints = $value : parent::assignMember($name, $value),
            'readOverquotas' => is_bool($value) ? $this->readOverquotas = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
