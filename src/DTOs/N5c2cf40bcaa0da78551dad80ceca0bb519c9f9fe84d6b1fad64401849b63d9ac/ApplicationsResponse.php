<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N5c2cf40bcaa0da78551dad80ceca0bb519c9f9fe84d6b1fad64401849b63d9ac;

/**
 * ApplicationsResponse
 */
final class ApplicationsResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'applications',
    ];

    /**
     * List of applications.
     */
    public \InfobipSDK\Collections\N5c2cf40bcaa0da78551dad80ceca0bb519c9f9fe84d6b1fad64401849b63d9ac\ApplicationsResponse\ApplicationsCollection $applications;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'applications' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->applications = new \InfobipSDK\Collections\N5c2cf40bcaa0da78551dad80ceca0bb519c9f9fe84d6b1fad64401849b63d9ac\ApplicationsResponse\ApplicationsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N5c2cf40bcaa0da78551dad80ceca0bb519c9f9fe84d6b1fad64401849b63d9ac\ApplicationResponse::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
