<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\F92ed732784664dca5efb3669b03438e69cca5f33f4420f5b4996e58aa137657;

/**
 * RequestStatusResponse
 * Example: {"requestId":"786ac8d6-40e5-4dfb-a450-4f71cbb3fc6c","status":"IN_PROGRESS","details":{"account":"7CB64E2791F1A14E5BFEBED41A70F08D","status":"IN_PROGRESS"}}
 */
final class RequestStatusResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'requestId',
        'status',
    ];

    /**
     * Details about user request status.
     */
    public \InfobipSDK\Collections\F92ed732784664dca5efb3669b03438e69cca5f33f4420f5b4996e58aa137657\RequestStatusResponse\DetailsCollection $details;
    /**
     * Request identifier.
     */
    public string $requestId;
    public \InfobipSDK\Enums\F92ed732784664dca5efb3669b03438e69cca5f33f4420f5b4996e58aa137657\StatusResponse $status;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'details' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->details = new \InfobipSDK\Collections\F92ed732784664dca5efb3669b03438e69cca5f33f4420f5b4996e58aa137657\RequestStatusResponse\DetailsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\F92ed732784664dca5efb3669b03438e69cca5f33f4420f5b4996e58aa137657\RequestDetailsResponse::class)) : parent::assignMember($name, $value),
            'requestId' => is_string($value) ? $this->requestId = $value : parent::assignMember($name, $value),
            'status' => is_string($value) ? $this->status = \InfobipSDK\Enums\F92ed732784664dca5efb3669b03438e69cca5f33f4420f5b4996e58aa137657\StatusResponse::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
