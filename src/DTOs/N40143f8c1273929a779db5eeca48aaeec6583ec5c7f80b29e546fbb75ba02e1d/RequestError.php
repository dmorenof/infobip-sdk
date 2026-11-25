<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N40143f8c1273929a779db5eeca48aaeec6583ec5c7f80b29e546fbb75ba02e1d;

/**
 * RequestError
 */
final class RequestError extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\DTOs\N40143f8c1273929a779db5eeca48aaeec6583ec5c7f80b29e546fbb75ba02e1d\ServiceException $serviceException;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'serviceException' => $value instanceof \stdClass ? $this->serviceException = new \InfobipSDK\DTOs\N40143f8c1273929a779db5eeca48aaeec6583ec5c7f80b29e546fbb75ba02e1d\ServiceException($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
