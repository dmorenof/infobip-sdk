<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\B979cda441a7c661201042835d7dc18eaec3fa68a2905164912469051f8b8866;

/**
 * TransferToExternalConfigApiModel
 * Example: {"tagName":"external_number","transferToAnyNumberEnabled":true,"createdAt":"2022-11-18T09:23:44.033Z","updatedAt":"2023-01-24T21:44:31.630Z"}
 */
final class TransferToExternalConfigApiModel extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'tagName' => [
            'minLength' => 0,
            'maxLength' => 256,
        ],
    ];

    protected const array READ_ONLY_FIELDS = [
        'createdAt',
        'tagName',
        'updatedAt',
    ];

    /**
     * Example: "2022-12-10T13:45:00.777+0000"
     */
    public string $createdAt;
    /**
     * Example: "external_number"
     */
    public string $tagName {
        set {
            $this->assigning('tagName', $value);
            $this->tagName = $value;
        }
    }
    /**
     * Enable or disable agents to transfer calls to numbers that are not stored in People
     */
    public bool $transferToAnyNumberEnabled;
    /**
     * Example: "2022-12-10T13:45:00.777+0000"
     */
    public string $updatedAt;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'createdAt' => is_string($value) ? $this->createdAt = $value : parent::assignMember($name, $value),
            'tagName' => is_string($value) ? $this->tagName = $value : parent::assignMember($name, $value),
            'transferToAnyNumberEnabled' => is_bool($value) ? $this->transferToAnyNumberEnabled = $value : parent::assignMember($name, $value),
            'updatedAt' => is_string($value) ? $this->updatedAt = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
