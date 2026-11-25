<?php

declare(strict_types=1);

namespace InfobipSDK\Responses\Mi\Simswap\Resource1\Check;

final class Post extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Additional network information about the SIM swap.
     */
    public \InfobipSDK\Responses\Mi\Simswap\Resource1\Check\Post\NetworkInfoResponse $networkInfo;
    /**
     * Unique request identifier.
     * Format: uuid
     */
    public string $requestId;
    /**
     * Indicates whether SIM swap occurred in the requested period.
     */
    public ?bool $simSwapOccurred;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'requestId' => is_string($value) ? $this->requestId = $value : parent::assignMember($name, $value),
            'simSwapOccurred' => $value === null || is_bool($value) ? $this->simSwapOccurred = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
