<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N45c843446703ba5f4438a6f721c629420452796de20bd3dd9adfccde3ed2ffff;

/**
 * GetValidationPageResponse
 *
 * Validation get page response.
 */
final class GetValidationPageResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'paging',
    'results',
];

    public \InfobipSDK\DTOs\N45c843446703ba5f4438a6f721c629420452796de20bd3dd9adfccde3ed2ffff\CursorPageInfo $paging;
    /**
     * Validated addresses for requested paging information.
     */
    public \InfobipSDK\Collections\N45c843446703ba5f4438a6f721c629420452796de20bd3dd9adfccde3ed2ffff\GetValidationPageResponse\ResultsCollection $results;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'paging' => $value instanceof \stdClass ? $this->paging = new \InfobipSDK\DTOs\N45c843446703ba5f4438a6f721c629420452796de20bd3dd9adfccde3ed2ffff\CursorPageInfo($value) : parent::assignMember($name, $value),
            'results' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->results = new \InfobipSDK\Collections\N45c843446703ba5f4438a6f721c629420452796de20bd3dd9adfccde3ed2ffff\GetValidationPageResponse\ResultsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N45c843446703ba5f4438a6f721c629420452796de20bd3dd9adfccde3ed2ffff\GetValidation::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
