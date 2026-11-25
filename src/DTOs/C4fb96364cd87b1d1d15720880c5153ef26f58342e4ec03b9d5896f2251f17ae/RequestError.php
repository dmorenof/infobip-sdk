<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae;

/**
 * RequestError
 *
 * Request error object.
 */
final class RequestError extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\DTOs\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\ServiceException $serviceException;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'serviceException' => $value instanceof \stdClass ? $this->serviceException = new \InfobipSDK\DTOs\C4fb96364cd87b1d1d15720880c5153ef26f58342e4ec03b9d5896f2251f17ae\ServiceException($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
