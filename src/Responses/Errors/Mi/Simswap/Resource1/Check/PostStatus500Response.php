<?php

declare(strict_types=1);

namespace InfobipSDK\Responses\Errors\Mi\Simswap\Resource1\Check;

final class PostStatus500Response extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\DTOs\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\ErrorDto $error;
    public \InfobipSDK\DTOs\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\ErrorDto $networkInfo;
    /**
     * Unique request identifier.
     * Format: uuid
     */
    public string $requestId;
    /**
     * Always null on error.
     */
    public ?bool $simSwapOccurred;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'error' => $value instanceof \stdClass ? $this->error = new \InfobipSDK\DTOs\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\ErrorDto($value) : parent::assignMember($name, $value),
            'networkInfo' => $value instanceof \stdClass ? $this->networkInfo = new \InfobipSDK\DTOs\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\ErrorDto($value) : parent::assignMember($name, $value),
            'requestId' => is_string($value) ? $this->requestId = $value : parent::assignMember($name, $value),
            'simSwapOccurred' => $value === null || is_bool($value) ? $this->simSwapOccurred = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
