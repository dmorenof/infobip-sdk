<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N34438aa163eb13a2a06ad96ae98170e41cc2ee8902e8b7655aba73ceb0bb23f1;

/**
 * DnsRecordResponse
 *
 * Records for the domain.
 */
final class DnsRecordResponse extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Expected value to be set for the given record.
     */
    public string $expectedValue;
    /**
     * Name of the record.
     */
    public string $name;
    /**
     * Type of the record.
     */
    public string $recordType;
    /**
     * Boolean value representing if the record is verified or not.
     */
    public bool $verified;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'expectedValue' => is_string($value) ? $this->expectedValue = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'recordType' => is_string($value) ? $this->recordType = $value : parent::assignMember($name, $value),
            'verified' => is_bool($value) ? $this->verified = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
